@extends('layouts.nav')

@section('data')
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-12 col-xl-12">
                    {{-- Table start --}}
                    <button type="button" class="btn btn-outline-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Tambah Data
                    </button>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">TTL</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <label style="visibility: hidden;">{{ $i = 1 }}</label>
                            @foreach($data as $d)
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->ttl }}</td>
                                <td>{{ $d->alamat }}</td>
                                <td>{{ $d->email }}</td>
                                <td>{{ $d->no_telp }}</td>
                                <td>
                                    <button class="btn btn-outline-warning btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editModal"
                                        data-id="{{ $d->id }}"
                                        data-nama="{{ $d->nama }}"
                                        data-ttl="{{ $d->ttl }}"
                                        data-alamat="{{ $d->alamat }}"
                                        data-email="{{ $d->email }}"
                                        data-no_telp="{{ $d->no_telp }}">
                                        Edit
                                    </button>
                                    <a class="btn btn-sm btn-outline-danger" href="{{ route('delete.dt', $d->nama) }}">Delete</a>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Table end --}}
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Modal start --}}
<!-- Modal  Insert-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <form method="post" action="{{ Route('regis') }}">
            @csrf

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nama Lengkap" name="nama" required>
                <label for="floatingInput">Nama Lengkap</label>
            </div>

            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="floatingInput" placeholder="Tanggal Lahir" name="ttl" required>
                <label for="floatingInput">Tanggal Lahir</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Alamat" name="alamat" required>
                <label for="floatingInput">Alamat</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email" required>
                <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="No hp" name="no_telp" required>
                <label for="floatingInput">No Hp</label>
            </div>

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

        </form>

      </div>
    </div>
  </div>
{{-- Modal end --}}


{{-- modal Edit/update --}}

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" id="edit_id" name="id">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="edit_nama" placeholder="Nama Lengkap" name="nama" required>
                        <label for="floatingInput">Nama Lengkap</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="edit_ttl" placeholder="Tanggal Lahir" name="ttl" required>
                        <label for="floatingInput">Tanggal Lahir</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="edit_alamat" placeholder="Alamat" name="alamat" required>
                        <label for="floatingInput">Alamat</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="edit_email" placeholder="Email" name="email" required>
                        <label for="floatingInput">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="edit_no_telp" placeholder="No hp" name="no_telp" required>
                        <label for="floatingInput">No Hp</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- end modal --}}

<script>
    var editModal = document.getElementById('editModal');
    editModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        var nama = button.getAttribute('data-nama');
        var ttl = button.getAttribute('data-ttl');
        var alamat = button.getAttribute('data-alamat');
        var email = button.getAttribute('data-email');
        var no_telp = button.getAttribute('data-no_telp');


        document.getElementById('edit_id').value = id;
        document.getElementById('edit_nama').value = nama;
        document.getElementById('edit_ttl').value = ttl;
        document.getElementById('edit_alamat').value = alamat;
        document.getElementById('edit_email').value = email;
        document.getElementById('edit_no_telp').value = no_telp;


        var form = document.getElementById('editForm');
        form.action = '/siswa/' + id;
    });
</script>

@endsection
