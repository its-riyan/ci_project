<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Main -->
<section class="py-8 py-md-11 bg-light">
    <!-- / .container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <!-- Heading -->
                <h2>
                    <span class="text-primary">Hi</span>
                </h2>
                <!-- Text -->
                <p class="fs-lg text-muted mb-7 mb-md-9 px-md-9"> Welcome to our Playground and Framewrok Environmnets. Let's build and show your creations ! </p>
            </div>
        </div>
        <!-- / .row Q -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Card -->
                <div class="accordion" id="featuresAccordion">
                    <!-- Q1 -->
                    <div class="accordion-item">
                        <!-- Button -->
                        <div class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#featuresOne" aria-expanded="true" aria-controls="featuresOne">
                            <div class="me-auto">
                                <!-- Title -->
                                <p class="fw-bold mb-0" id="featuresOneHeading"> (Q1) Get Product (Ajax Refresh) </p>
                                <!-- Text -->
                                <p class="fs-sm text-muted mb-0"> Tampilkan produk dengan memasukan SKU tanpa harus mereload halaman. </p>
                            </div>
                            <!-- Badge -->
                            <span class="badge rounded-pill bg-danger-soft ms-4">
                                <span class="h6 text-uppercase">Need to Solve</span>
                            </span>
                        </div>
                        <!-- Collapse -->
                        <div class="accordion-collapse collapse show" id="featuresOne" aria-labelledby="featuresOneHeading" data-bs-parent="#featuresAccordion">
                            <div class="accordion-body">
                                <p class="fs-sm text-muted mb-0"> SKU di setiap produk memiliki nilai unik, hanya akan tampil 1 produk untuk 1 SKU. Jika tidak ditemukan wajib memberikan respon "SKU tidak di temukan". <br><br> Setiap hasil produk yang ditampilkan sudah memiliki slug url (Cek Table DB) dimana user ketika mengklik akan diarahakan ke slug url tersebut (Anda tidak perlu membuat halaman ini cukup arahkan saja). Good Luck ! </p>
                            </div>
                        </div>
                    </div>
                    <!-- Q2 -->
                    <div class="accordion-item">
                        <!-- Button -->
                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#featuresTwo" aria-expanded="false" aria-controls="featuresTwo">
                            <div class="me-auto">
                                <!-- Title -->
                                <p class="fw-bold mb-0" id="featuresTwoHeading"> (Q2) Show Products by its Category </p>
                                <!-- Text -->
                                <p class="fs-sm text-muted mb-0"> Tampilkan setiap produk berdasarkan kategori dari produk tersebut. </p>
                            </div>
                            <!-- Badge -->
                            <span class="badge rounded-pill bg-danger-soft ms-4">
                                <span class="h6 text-uppercase">Need to Solve</span>
                            </span>
                        </div>
                        <!-- Collapse -->
                        <div class="accordion-collapse collapse" id="featuresTwo" aria-labelledby="featuresTwoHeading" data-bs-parent="#featuresAccordion">
                            <div class="accordion-body">
                                <p class="fs-sm text-muted mb-0"> Di dalam slug url brand/nama-kategori, pastikan hanya produk yang tampil dari brand tersebut. Good Luck ! </p>
                            </div>
                        </div>
                    </div>
                    <!-- Q3 -->
                    <div class="accordion-item">
                        <!-- Button -->
                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#featuresThree" aria-expanded="false" aria-controls="featuresThree">
                            <div class="me-auto">
                                <!-- Title -->
                                <p class="fw-bold mb-0" id="featuresThreeHeading"> (Q3) Show Products by its Brand </p>
                                <!-- Text -->
                                <p class="fs-sm text-muted mb-0"> Tampilkan setiap produk berdasarkan brand dari produk tersebut. </p>
                            </div>
                            <!-- Badge -->
                            <span class="badge rounded-pill bg-danger-soft ms-4">
                                <span class="h6 text-uppercase">Need to Solve</span>
                            </span>
                        </div>
                        <!-- Collapse -->
                        <div class="accordion-collapse collapse" id="featuresThree" aria-labelledby="featuresThreeHeading" data-bs-parent="#featuresAccordion">
                            <div class="accordion-body">
                                <p class="fs-sm text-muted mb-0"> Di dalam slug url brand/nama-brand, pastikan hanya produk yang tampil dari brand tersebut. Good Luck ! </p>
                            </div>
                        </div>
                    </div>
                    <!-- Q4 -->
                    <div class="accordion-item">
                        <!-- Button -->
                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#featuresFour" aria-expanded="false" aria-controls="featuresFour">
                            <div class="me-auto">
                                <!-- Title -->
                                <p class="fw-bold mb-0" id="featuresFourHeading"> (Q4) API RESTful Web Service </p>
                                <!-- Text -->
                                <p class="fs-sm text-muted mb-0">Lakukan PUT, PATCH, GET & DELETE</p>
                            </div>
                            <!-- Badge -->
                            <span class="badge rounded-pill bg-danger-soft ms-4">
                                <span class="h6 text-uppercase">Need to Solve</span>
                            </span>
                        </div>
                        <!-- Collapse -->
                        <div class="accordion-collapse collapse" id="featuresFour" aria-labelledby="featuresFourHeading" data-bs-parent="#featuresAccordion">
                            <div class="accordion-body">
                                <p class="fs-sm text-muted mb-0"> Item Produk (Produk URL, Product Image URL, Product Title, Produk Category, Produk Brand) . Good Luck ! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / .row Q -->
    </div>
    <!-- / .container -->
</section>

<!-- Q1 -->
<section class="py-6">
    <div class="container">
        <div class="row row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <!-- Badge -->
                <span class="badge rounded-pill bg-danger-soft mb-3">
                    <span class="h6 text-uppercase">(Q1)</span>
                </span>
                <!-- Heading -->
                <h1> Get Product (Ajax Refresh) </h1>
            </div>
            <div class="col-6">
                <!-- Form -->
                <form class="rounded shadow">
                    <div class="input-group input-group-lg">
                        <!-- Text -->
                        <span class="input-group-text border-0 pe-1">
                            <i class="fe fe-search"></i>
                        </span>
                        <!-- Input -->
                        <input type="text" class="form-control border-0 px-1" aria-label="Show Product by SKU" placeholder="Enter Product SKU" value="">
                        <!-- Text -->
                        <span class="input-group-text border-0 py-0 ps-1 pe-3">
                            <!-- Button -->
                            <button type="submit" class="btn btn-sm btn-primary"> Show </button>
                        </span>
                    </div>
                </form>
            </div>
        </div> <!-- / .row -->
    </div>
</section>


<!-- your answer here -->
<section>
    <div class="container">
        <div class="row row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <!-- Card -->
                <div class="card mb-6 shadow-light-lg lift lift-lg">
                    <!-- Image -->
                    <a class="card-img-top" href="#!">
                        <!-- Image -->
                        <img src="https://is1-ssl.mzstatic.com/image/thumb/Purple71/v4/fa/45/6c/fa456cf4-cc98-acdb-17b1-82f556436db0/mzl.fluxetgb.png/1200x630wa.png" alt="..." class="card-img-top">
                        <!-- Shape -->
                        <div class="position-relative">
                            <div class="shape shape-bottom shape-fluid-x text-white">
                                <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor" /></svg>
                            </div>
                        </div>
                    </a>
                    <a class="card-meta mt-auto" href="#!">
                        <!-- Divider -->
                        <hr class="card-meta-divider">
                        <!-- Title -->
                        <h6 class="text-uppercase text-muted me-2 mb-0"> Product Name </h6>
                    </a>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
<!-- your answer here -->

<!-- Q2 -->
<section class="py-6">
    <div class="container">
        <div class="row row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <!-- Badge -->
                <span class="badge rounded-pill bg-danger-soft mb-3">
                    <span class="h6 text-uppercase">(Q2)</span>
                </span>
                <!-- Heading -->
                <h1> Show Products by its Category </h1>
            </div>
            <div class="col-6">
                <!-- Button -->
                <a href="#!" class="btn w-100 btn-outline-gray-300 d-flex align-items-center">
                    <span class="mx-auto">Go to Pages</span> <i class="fe fe-arrow-right"></i>
                </a>
            </div>
        </div> <!-- / .row -->
    </div>
</section>

<!-- Q3 -->
<section class="py-6">
    <div class="container">
        <div class="row row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <!-- Badge -->
                <span class="badge rounded-pill bg-danger-soft mb-3">
                    <span class="h6 text-uppercase">(Q3)</span>
                </span>
                <!-- Heading -->
                <h1> Show Products by its Brand </h1>
            </div>
            <div class="col-6">
                <!-- Button -->
                <a href="#!" class="btn w-100 btn-outline-gray-300 d-flex align-items-center">
                    <span class="mx-auto">Go to Pages</span> <i class="fe fe-arrow-right"></i>
                </a>
            </div>
        </div> <!-- / .row -->
    </div>
</section>

<!-- Q4 -->
<section class="py-6">
    <div class="container">
        <div class="row row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <!-- Badge -->
                <span class="badge rounded-pill bg-danger-soft mb-3">
                    <span class="h6 text-uppercase">(Q4) </span>
                </span>
                <!-- Heading -->
                <h1> API RESTful Web Service </h1>
            </div>
            <div class="col-6">
                <!-- Button -->
                <a href="#!" class="btn w-100 btn-outline-gray-300 d-flex align-items-center">
                    <span class="mx-auto">Go to Pages</span> <i class="fe fe-arrow-right"></i>
                </a>
            </div>
        </div> <!-- / .row -->
    </div>
</section>

<!-- SHAPE -->
<div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x text-gray-200">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
		</svg>
	</div>
</div>