<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_proker;

class DashboardController extends Controller
{
    public function tampil()
    {
        $tbl_proker = tbl_proker::all();

        return view('sneat.html.index',compact('tbl_proker'));
    }

    public function tambahproker()
    {
        return view('sneat.html.tambah-proker');
    }

    public function insertproker(Request $request)
    {
        $data = $request->all();
        $progker = new tbl_proker();
        $progker->nama_proker = $data['nama_proker'];
        $progker->waktu_pelaksanaan = $data['waktu_pelaksanaan'];
        $progker->anggaran = $data['anggaran'];
        $progker->deskripsi_kegiatan = $data['deskripsi_kegiatan'];
        $progker->save();
        return redirect()->route('dashboard');
    }

    public function delete(string $id_proker)
    {
        tbl_proker::where('id_proker',$id_proker)->delete();
        return redirect()->to('dashboard')->with('success');}

    // public function destroy($id)
    // {
    //     $progker = progker::find($id);
    //     $progker->delete();
    //     return redirect()->route('/dashboard');
    // }
}
