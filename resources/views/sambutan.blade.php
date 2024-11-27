
@extends('layouts.nav')

@section('sambutan')

    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    {{-- <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div> --}}
                    <h1 class="fw-bolder">Selamat Datang</h1>
                    <p class="lead fw-normal text-muted mb-0">Pengantar bagi Alumni SMK</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-12">

                        <p>
                            Selamat datang di survey penelusuran lulusan <b> SMK NEGERI 1 BULANGO SELATAN</b>. Tolong isi pertanyaan survey dengan benar!
                        </p>

                        <h3 class="h6 fw-bold">Tujuan dari tracer study adalah untuk:</h3>
                        <ol>
                            <li>Mengetahui keterserapan lulusan pendidikan vokasi ke dunia kerja atau melanjutkan pendidikan</li>
                            <li>Mendapatkan informasi umpan balik dari lulusan untuk meningkatkan kualitas program pendidikan dan pelatihan vokasi</li>
                            <li>Mendapatkan informasi tentang ketenagakerjaan dan dunia industri pada level lokal dan nasional</li>
                            <li>Mendapatkan informasi kompetensi (hard skills dan soft skills) yang dibutuhkan industri lokal dan nasional</li>
                            <li>Memetakan kinerja satuan pendidikan vokasi dalam pelaksanaan program pendidikan dan pelatihan vokasi</li>
                        </ol>

                        <p>
                            Kami mengharapkan partisipasi Anda selaku lulusan pendidikan vokasi untuk memberikan data dan informasi terkait dengan kegiatan Anda setelah kelulusan. Informasi yang diberikan sangat bermanfaat bagi Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi untuk perbaikan kebijakan terkait dengan penyelenggaraan pendidikan vokasi di tingkat pusat dan daerah. Bagi satuan pendidikan, tracer study bermanfaat sebagai dasar pertimbangan dalam perbaikan kurikulum dan sistem pembelajaran.
                        </p>

                        <h3 class="h6 fw-bold">Petunjuk Pengisian</h3>
                        <ol>
                            <li>Isilah data identitas Anda dengan lengkap dan benar</li>
                            <li>Jawab pertanyaan-pertanyaan dalam instrumen ini dengan cara meng-klik tombol di samping jawaban yang sesuai dengan keadaan sebenarnya</li>
                            <li>Aplikasi ini secara otomatis akan mengarahkan Anda pada pertanyaan berikut setelah pertanyaan yang muncul sebelumnya Anda jawab</li>
                        </ol>

                        <div class="text-center mt-4">
                            <a href="/data" class="btn btn-primary">MULAI SURVEY</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
