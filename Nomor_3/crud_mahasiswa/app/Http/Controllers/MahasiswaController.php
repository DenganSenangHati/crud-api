<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
      /**$data_mahasiswa = Mahasiswa::all();
      return view('mahasiswa.index', ['data_mahasiswa' => $data_mahasiswa]);**/
      return Mahasiswa::all();
    }

    public function create(request $request){
      /**Mahasiswa::create($request->all());
      return redirect('/mahasiswa')->with('sukses', 'Data berhasil ditambahkan');**/
      $mahasiswa = new Mahasiswa;
      $mahasiswa->nim = $request->nim;
      $mahasiswa->nama = $request->nama;
      $mahasiswa->gender = $request->gender;
      $mahasiswa->tempat_lahir = $request->tempat_lahir;
      $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
      $mahasiswa->alamat = $request->alamat;
      $mahasiswa->tahun_masuk = $request->tahun_masuk;
      $mahasiswa->save();

      return "Data created";
    }

    /**public function edit($id){
      $mahasiswa = Mahasiswa::find($id);
      return view('mahasiswa/edit', ['mahasiswa' => $mahasiswa]);
    }**/

    public function update(request $request, $id){
      /**$mahasiswa = Mahasiswa::find($id);
      $mahasiswa->update($request->all());

      return redirect('/mahasiswa')->with('sukses', 'Data berhasil diubah');**/
      $nim = $request->nim;
      $nama = $request->nama;
      $gender = $request->gender;
      $tempat_lahir = $request->tempat_lahir;
      $tanggal_lahir = $request->tanggal_lahir;
      $alamat = $request->alamat;
      $tahun_masuk = $request->tahun_masuk;

      $mahasiswa = Mahasiswa::find($id);
      $mahasiswa->nim = $nim;
      $mahasiswa->nama = $nama;
      $mahasiswa->gender = $gender;
      $mahasiswa->tempat_lahir = $tempat_lahir;
      $mahasiswa->tanggal_lahir = $tanggal_lahir;
      $mahasiswa->alamat = $alamat;
      $mahasiswa->tahun_masuk = $tahun_masuk;
      $mahasiswa->save();

      return "Data updated";
    }

    public function delete($id){
      /**$mahasiswa = Mahasiswa::find($id);
      $mahasiswa->delete($mahasiswa);

      return redirect('/mahasiswa')->with('sukses', 'Data berhasil dihapus');**/
      $mahasiswa = Mahasiswa::find($id);
      $mahasiswa->delete();

      return "Data deleted";
    }
}
