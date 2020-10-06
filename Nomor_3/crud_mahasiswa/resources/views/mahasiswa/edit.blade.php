@extends('layouts.master')

@section('content')
  <h1>Edit Data Mahasiswa</h1>
  @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
  @endif
  <div class="row">
    <div class="col-lg-12">
      <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputNIM">NIM</label>
          <input name="nim" type="number" class="form-control" id="inputNIM" aria-describedby="nimHelp" placeholder="Masukkan NIM" value="{{$mahasiswa->nim}}">
        </div>
        <div class="form-group">
          <label for="inputNama">Nama</label>
          <input name="nama" type="text" class="form-control" id="inputNama" aria-describedby="namaHelp" placeholder="Masukkan Nama" value="{{$mahasiswa->nama}}">
        </div>
        <div class="form-group">
          <label for="selectJenisKelamin">Jenis Kelamin</label>
          <select name="gender" class="form-control" id="selectJenisKelamin">
            <option value="Laki-Laki" @if($mahasiswa->gender == 'Laki-Laki') selected @endif>Laki-Laki</option>
            <option value="Perempuan" @if($mahasiswa->gender == 'Perempuan') selected @endif>Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="inputTempatLahir">Tempat Lahir</label>
          <input name="tempat_lahir" type="text" class="form-control" id="inputTempatLahir" aria-describedby="tempatLahirHelp" placeholder="Masukkan Tempat Lahir" value="{{$mahasiswa->tempat_lahir}}">
        </div>
        <div class="form-group">
          <label for="inputTanggalLahir">Tanggal Lahir</label>
          <input name="tanggal_lahir" type="date" id="inputTanggalLahir" value="{{$mahasiswa->tanggal_lahir}}">
        </div>
        <div class="form-group">
          <label for="inputAlamat">Alamat</label>
          <textarea name="alamat" class="form-control" id="inputAlamat" rows="3">{{$mahasiswa->alamat}}</textarea>
        </div>
        <div class="form-group">
          <label for="inputTahunMasuk">Tahun Masuk</label>
          <input name="tahun_masuk" type="number" class="form-control" id="inputTahunMasuk" aria-describedby="tahunMasukHelp" placeholder="Masukkan Tahun Masuk" value="{{$mahasiswa->tahun_masuk}}">
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
      </form>
    </div>
  </div>
@endsection
