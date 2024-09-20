<?php

namespace App\Http\Controllers;

use App\Models\PemasukanModel;
use App\Models\PengeluaranModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PemasukanController extends Controller
{
   public function view(){
    $data = array(
      'pemasukan' => PemasukanModel::get(),
      'pengeluaran' => PengeluaranModel::get(),
      'totalpemasukan'=> PemasukanModel::get()->sum('jumlah_pemasukan'),
      'totalpengeluaran'=>PengeluaranModel::get()->sum('jumlah_pengeluaran')
      
    ); 
    return view('/dashboard',compact('data'
   ));
   }


   public function tambah(){
      return view('income');
   }


   public function create (Request $request) {
      $request -> validate([ 
         'jumlah_pemasukan' => 'required|numeric',
         'date' => 'required',
         'keterangan' => 'required'
      ], [
         'jumlah_pemasukan.required' => 'mohon isi jumlah pemasukan',
         'date.required' => 'mohon isi tanggal',
         'keterangan.required' => 'mohon isi keterangan',
      ]);


      $data = [
         'jumlah_pemasukan' => request()->input('jumlah_pemasukan'),
         'tanggal' => request()->input('date'),
         'keterangan' => request()->input('keterangan')
      ];
      
      PemasukanModel::create($data);

      return redirect('/dashboard')->with('success', 'Data berhasil ditambah!!');
   }

   //Buat Akses Halaman/Form Update
   public function viewupdate($id){
      $data = PemasukanModel::find($id);
      return view('incomeupdate', compact('data'));
   }
   
   //Mengupdate Data
   public function update($id){
      //Validator::make(ngambil data, peraturan datanya, pesan peraturan jika tidak sesuai)
      $validator = Validator::make(request()->all(), [
         'update_pemasukan' => 'required',
         'update_tanggal' => 'required|date',
         'update_keterangan' => 'required'
      ], [
         'update_pemasukan.required' => 'Tolong Isi Nominal Pemasukan',
         'update_tanggal.required' => 'Tolong isi tanggal',
         'update_tanggal.date' => 'Tolong isi tanggal dengan format date',
         'update_keterangan.required' => 'Tolong isi keterangan'
      ]);
      //buat pesan
      //'nama_input.peraturan'
      if($validator->fails()){
         //with('namapesan', 'isipesan')
         return back()->with('fails', $validator->messages()->get('*'));  
      }

      PemasukanModel::where('id', $id)->update([
         'jumlah_pemasukan' => request()->input('update_pemasukan'),
         'tanggal' => request()->input('update_tanggal'),
         'keterangan' => request()->input('update_keterangan')
      ]);

      return redirect('/dashboard')->with('success', 'data berhasil untuk diupdate');
   }

   public function delete($id) {
      PemasukanModel::where('id', $id)->delete();

      return redirect('dashboard')->with("success", 'data berhasil untuk dihapus');
   }
}