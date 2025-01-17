
@extends('layouts.nav')

@section('project')


<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Galery Angkatan</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-12 col-xxl-12">
                <!-- Project Card 1-->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5 ">
                    <img class="img-fluid" src="assets/sekolah1.jpeg" alt="..." style="max-height: 400px">
                    <div class="card-body p-5">
                        <h2 class="fw-bolder">Angkatan 2022 VARILAGERS</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                    </div>
                </div>

                <!-- Project Card 2-->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <img class="img-fluid" src="assets/sekolah2.jpg" alt="..." style="max-height: 400px">
                    <div class="card-body p-5">
                        <h2 class="fw-bolder">Angkatan 2023 BINTANG</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to action section-->
<section class="py-5 bg-gradient-primary-to-secondary text-white">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="display-4 fw-bolder mb-4">Jangan lupa isi survey yah</h2>
            <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="form">MULAI SURVEY</a>
        </div>
    </div>
</section>

@endsection
