@extends('layouts.nav')

@section('form')

    <div class="container my-5">
        <div class="bg-light rounded-4 mx-auto" >
            <div class="card-body p-4">
                <header class="text-center mb-4">
                    <h2 class="text-primary">TRACER STUDY VOKASI</h2>
                </header>
                <section>
                    <h3 class="mb-3 text-center">DAPODIK ALUMNI - DATA UMUM</h3>

                    <div class="row mt-5 mb-5">
                        <div class="col-2 ">
                        </div>
                        <div class="col ">
                            <img class="rounded ps-auto" src="assets/IMG_20231119_132233.jpg" style="max-height: 200px">
                        </div>
                        <div class="col ">
                            <p>Nama Lengkap</p>
                            <p>NISN</p>
                            <p>Alamat</p>
                            <p>Angkatan</p>
                            <p>Tempat Tanggal Lahir</p>
                        </div>
                        <div class="col ">
                            <p>Mochammad Suluh Tri Yoni</p>
                            <p>8345387483287</p>
                            <p>Desa Kotanagaya</p>
                            <p>2024</p>
                            <p>27 Juli 2024</p>
                        </div>
                        <div class="col-2 "></div>
                    </div>

                    <div class="container" style="max-width: 1000px">
                        <!-- Formulir Mulai di sini -->
                    <form action="" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="example@email.com" required>
                            @error('email')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">No.HP/WhatsApp</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="xxxxxxxxxxxx">
                        </div>

                        <h3 class="mb-3">Aktifitas Setelah Lulus</h3>

                        <!-- Dropdown Pilihan -->
                        <div class="mb-3">
                            <label for="section-select" class="form-label">Aktifitas Kelulusan</label>
                            <select id="section-select" class="form-select" onchange="showSection(this.value)">
                                <option value="">— Pilih —</option>
                                <option value="bekerja">Bekerja</option>
                                <option value="kuliah">Kuliah</option>
                                <option value="tidak_bekerja">Tidak Bekerja</option>
                            </select>
                        </div>

                        <!-- Section Pertanyaan Bekerja -->
                        <div id="bekerja-section" class="form-section mb-3" style="display:none;">
                            <h4 class="mb-3">Pertanyaan</h4>
                            <div class="mb-3">
                                <label for="jenis_kegiatan" class="form-label">1 Apa Bentuk Kegiatan atau pekerjaan yang Anda lakukan?</label>
                                <input type="text" id="jenis_kegiatan" name="jenis_kegiatan" class="form-control" placeholder="Masukkan bentuk kegiatan atau pekerjaan">
                            </div>

                            <div class="mb-3">
                                <label for="lokasi_pekerjaan" class="form-label">2 Dimana tempat lokasi usaha atau pekerjaan Anda?</label>
                                <input type="text" id="lokasi_pekerjaan" name="lokasi_pekerjaan" class="form-control" placeholder="Masukkan lokasi usaha atau pekerjaan">
                            </div>

                            <div class="mb-3">
                                <label for="bentuk_usaha" class="form-label">3 Apa bentuk usaha atau pekerjaan Anda?</label>
                                <input type="text" id="bentuk_usaha" name="bentuk_usaha" class="form-control" placeholder="Masukkan bentuk usaha atau pekerjaan">
                            </div>

                            <div class="mb-3">
                                <label for="produk_usaha" class="form-label">4 Apa produk usaha Anda?</label>
                                <input type="text" id="produk_usaha" name="produk_usaha" class="form-control" placeholder="Masukkan produk usaha">
                            </div>

                            <div class="mb-3">
                                <label for="status_usaha" class="form-label">5 Status kepemilikan usaha yang dijalankan?</label>
                                <input type="text" id="status_usaha" name="status_usaha" class="form-control" placeholder="Masukkan status kepemilikan usaha">
                            </div>

                            <div class="mb-3">
                                <label for="status_usaha" class="form-label">6 Kapan Anda mulai bekerja atau memulai usaha setelah lulus SMK?</label>
                                <input type="text" id="status_usaha" name="status_usaha" class="form-control" placeholder="Masukkan status kepemilikan usaha">
                            </div>

                            <div class="mb-3">
                                <label for="hasil_bulanan" class="form-label">7 Berapa rata-rata hasil bulanan dari usaha atau pekerjaan Anda?</label>
                                <input type="text" id="hasil_bulanan" name="hasil_bulanan" class="form-control" placeholder="Masukkan rata-rata hasil bulanan">
                            </div>

                            <div class="mb-3">
                                <label for="ganti_pekerjaan" class="form-label">8 Berapa kali Anda berganti usaha atau pekerjaan sejak Anda lulus dari SMK?</label>
                                <input type="text" id="ganti_pekerjaan" name="ganti_pekerjaan" class="form-control" placeholder="Masukkan jumlah pergantian usaha atau pekerjaan">
                            </div>

                        </div>

                        <!-- Section Pertanyaan Melanjutkan Kuliah -->
                        <div id="kuliah-section" class="form-section mb-3" style="display:none;">
                            <h4 class="mb-3">Pertanyaan</h4>
                            <div class="mb-3">
                                <label for="nama_universitas" class="form-label">1 Dimana anda melanjutkan studi?</label>
                                <input type="text" id="nama_universitas" name="nama_universitas" class="form-control" placeholder="Masukkan nama universitas">
                            </div>

                            <div class="mb-3">
                                <label for="universitas" class="form-label">2 Apa nama perguruan tinggi anda?</label>
                                <input type="text" id="universitas" name="universitas" class="form-control" placeholder="Masukkan nama perguruan tinggi">
                            </div>

                            <div class="mb-3">
                                <label for="jenjang_pendidikan" class="form-label">3 Apa jenjang Pendidikan yang anda tempuh?</label>
                                <input type="text" id="jenjang_pendidikan" name="jenjang_pendidikan" class="form-control" placeholder="Masukkan jenjang pendidikan">
                            </div>

                            <div class="mb-3">
                                <label for="fakultas" class="form-label">4 Fakultas apa yang anda tempuh?</label>
                                <input type="text" id="fakultas" name="fakultas" class="form-control" placeholder="Masukkan fakultas">
                            </div>

                            <div class="mb-3">
                                <label for="jurusan" class="form-label">5 Jurusan apa yang anda tempuh?</label>
                                <input type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Masukkan jurusan">
                            </div>

                            <div class="mb-3">
                                <label for="nim" class="form-label">6 Masukkan NIM anda?</label>
                                <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukkan NIM">
                            </div>

                            <div class="mb-3">
                                <label for="alasan_pendidikan" class="form-label">7 Apa alasan anda melanjutkan pendidikan yang anda tempuh sekarang?</label>
                                <input type="text" id="alasan_pendidikan" name="alasan_pendidikan" class="form-control" placeholder="Masukkan alasan melanjutkan pendidikan">
                            </div>
                        </div>

                        <!-- Section Pertanyaan Tidak Bekerja -->
                        <div id="tidak_bekerja-section" class="form-section mb-3" style="display:none;">
                            <h4 class="mb-3">Pertanyaan</h4>
                            <div class="mb-3">
                                <label for="alasan" class="form-label">1 Alasan tidak bekerja :</label>
                                <textarea type="text" id="alasan" name="alasan" class="form-control" placeholder="Masukkan alasan"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Simpan</button>

                        <!-- Alert untuk pesan umum -->
                        @if (session('message'))
                            <div class="alert alert-danger mt-3">
                                {{ session('message') }}
                            </div>
                        @endif
                    </form>
                    <!-- Formulir Berakhir di sini -->
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script>
        function showSection(section) {
            document.querySelectorAll('.form-section').forEach(function(sec) {
                sec.style.display = 'none';
            });
            if (section) {
                document.getElementById(section + '-section').style.display = 'block';
            }
        }

        window.onload = function() {
            document.querySelectorAll('.form-section').forEach(function(sec) {
                sec.style.display = 'none';
            });
        };
    </script>

@endsection
