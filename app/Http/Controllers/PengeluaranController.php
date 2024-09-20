<?php

namespace App\Http\Controllers;

use App\Models\PengeluaranModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengeluaranController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'jumlah_pengeluaran' => 'required',
            'date' => 'required',
            'keterangan' => 'required'
        ], [
            'jumlah_pegeluaran.required' => 'mohon isi jumlah pengeluaran',
            'date.required' => 'mohon isi tanggal',
            'keterangan.required' => 'mohon isi keterangan',
        ]);


        $data = [
            'jumlah_pengeluaran' => request()->input('jumlah_pengeluaran'),
            'tanggal' => request()->input('date'),
            'keterangan' => request()->input('keterangan')
        ];

        PengeluaranModel::create($data);

        return redirect('/dashboard')->with('success', 'Data berhasil ditambah!!');

    }

    public function viewupdate($id){
        $data = PengeluaranModel::find($id);
        return view('expenseupdate' , compact('data'));
    }

    public function update($id,Request $request){
        $request->validate([
            'update_pengeluaran' => 'required',
            'update_tanggal' => 'required|date',
            'update_keterangan' => 'required'
        ], [
            'update_pengeluaran.required' => 'Tolong isi nominal pengeluaran',
            'update_tanggal.required' => 'Tolong isi tangggal',
            'update_tanggal.date' => 'Tolong isi tangggal dengan format date',
            'update_keterangan.required' => 'Tolong isi keterangan'
        ]);
       
        PengeluaranModel::where('id', $id)->update([
            'jumlah_pengeluaran' => request()->input('update_pengeluaran'),
            'tanggal' => request()->input('update_tanggal'),
            'keterangan' => request()->input('update_keterangan')
        ]);

        return redirect('/dashboard')->with('success', 'Data Berhasil di update');
    }

    public function hapus($id){
        PengeluaranModel::where('id' ,$id)->delete();

        return redirect('dashboard')->with('success', 'data berhasil dihapus');
    }
}
