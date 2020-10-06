@extends('layouts.master')

@section('content')
  @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
  @endif
  <div class="row">
    <div class="col-6">
      <h1>Data Mahasiswa</h1>
    </div>
    <div class="col-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
        Tambah Data Mahasiswa
      </button>
    </div>

    <table class="table table-hover">
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Tahun Masuk</th>
        <th>Aksi</th>
      </tr>

      @foreach($data_mahasiswa as $mahasiswa)
      <tr>
        <td>{{$mahasiswa->nim}}</td>
        <td>{{$mahasiswa->nama}}</td>
        <td>{{$mahasiswa->gender}}</td>
        <td>{{$mahasiswa->tempat_lahir}}</td>
        <td>{{$mahasiswa->tanggal_lahir}}</td>
        <td>{{$mahasiswa->alamat}}</td>
        <td>{{$mahasiswa->tahun_masuk}}</td>
        <td>
          <a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
          <a href="/mahasiswa/{{$mahasiswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ?')">Hapus</a>
        </td>
      </tr>
      @endforeach
    </table>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/mahasiswa/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="inputNIM">NIM</label>
              <input name="nim" type="number" class="form-control" id="inputNIM" aria-describedby="nimHelp" placeholder="Masukkan NIM">
            </div>
            <div class="form-group">
              <label for="inputNama">Nama</label>
              <input name="nama" type="text" class="form-control" id="inputNama" aria-describedby="namaHelp" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
              <label for="selectJenisKelamin">Jenis Kelamin</label>
              <select name="gender" class="form-control" id="selectJenisKelamin">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputTempatLahir">Tempat Lahir</label>
              <input name="tempat_lahir" type="text" class="form-control" id="inputTempatLahir" aria-describedby="tempatLahirHelp" placeholder="Masukkan Tempat Lahir">
            </div>
            <div class="form-group">
              <label for="inputTanggalLahir">Tanggal Lahir</label>
              <input name="tanggal_lahir" type="date" id="inputTanggalLahir">
            </div>
            <div class="form-group">
              <label for="inputAlamat">Alamat</label>
              <textarea name="alamat" class="form-control" id="inputAlamat" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="inputTahunMasuk">Tahun Masuk</label>
              <input name="tahun_masuk" type="number" class="form-control" id="inputTahunMasuk" aria-describedby="tahunMasukHelp" placeholder="Masukkan Tahun Masuk">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
