
@extends('layouts.nav')

@section('beranda')


<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Design &middot; Development &middot; Marketing</div></div>
                    <div class="fs-3 fw-light text-muted">SMK Lebih Baik Lebih Baik SMK</div>
                    <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">SMK Negeri 1 Bolango Selatan</span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume">Resume</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="project">Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <!-- Header profile picture-->
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">

                    <img class="profile-img mt-3" src="assets/1.png" alt="Logo" style="max-height: 400px" />
                </div>
            </div>
        </div>
    </div>
</header>

@endsection
