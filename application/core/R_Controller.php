<?php defined('BASEPATH') or exit('No direct script access allowed');

class R_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //general settings
        $this->general_settings = $this->config->item('general_settings');
        //set timezone
        date_default_timezone_set($this->general_settings->timezone);
        //routes
        $this->routes = $this->config->item('routes');
        //languages
        $this->languages = $this->config->item('languages');
        //site lang
        $this->site_lang = $this->language_model->get_site_language($this->languages);
        //selected lang
        $this->selected_lang = $this->site_lang;
        //language base url
        $this->lang_base_url = base_url();
        //set language
        $this->lang_segment = "";
        $lang_segment = $this->uri->segment(1);
        foreach ($this->languages as $lang) {
            if ($lang_segment == $lang->short_form) {
                if ($this->general_settings->multilingual_system == 1):
                    $this->selected_lang = $lang;
                    $this->lang_segment = $lang->short_form;
                else:
                    redirect(base_url());
                endif;
            }
        }
        //set lang base url
        if ($this->general_settings->site_lang == $this->selected_lang->id) {
            $this->lang_base_url = base_url();
        } else {
            $this->lang_base_url = base_url() . $this->selected_lang->short_form . "/";
        }

        //cache system
        $this->cache_static = $this->general_settings->static_content_cache_system == 1 ? 1 : 0;
        $this->cache_product = $this->general_settings->product_cache_system == 1 ? 1 : 0;
        if ($this->cache_static == 1 || $this->cache_product == 1) {
            $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
        }
        //storage settings
        $this->storage_settings = $this->settings_model->get_storage_settings();
        //product settings
        $this->product_settings = $this->settings_model->get_product_settings();

        //settings
        $this->settings = $this->settings_model->get_settings($this->selected_lang->id);

        //application name
        $this->app_name = $this->general_settings->application_name;
        //aws base url
        $this->aws_base_url = $this->storage_settings->aws_base_url . $this->storage_settings->aws_bucket . "/";
        if (empty($this->storage_settings->aws_bucket)) {
            $this->aws_base_url = $this->storage_settings->aws_base_url;
        }
        //variables
        $this->username_maxlength = 40;
        $this->thousands_separator = '.';
        $this->input_initial_price = '0.00';

    }

}

class Frontend_R_Controller extends R_Controller
{
    public function __construct()
    {
        parent::__construct();

        //maintenance mode
        if ($this->general_settings->maintenance_mode_status == 1) {
            if (!is_admin()) {
                $this->maintenance_mode();
            }
        }

        if ($this->input->method() == "post") {
            //set post language
            $lang_id = $this->input->post('sys_lang_id', true);
            if (!empty($lang_id)) {
                $this->selected_lang = $this->language_model->get_language($lang_id);
                $this->language_translations = $this->get_translation_array($lang_id);
                if ($this->general_settings->site_lang == $lang_id) {
                    $this->lang_base_url = base_url();
                } else {
                    $this->lang_base_url = base_url() . $this->selected_lang->short_form . "/";
                }
            }
        }

    }

}
