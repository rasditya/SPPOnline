<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Confirm;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WalisiswaController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')->get();

        $title = 'Peringatan !';
        $text = "Apakah anda yakin ingin menghapusnya";
        $icon = "Question";
        confirmDelete($title, $text);

        return view('walisiswa.indexwalisiswa', compact('siswa'));
    }

    public function tambahwalisiswa()
    {
        return view('walisiswa.tambahwalisiswa');
    }

    public function walisiswa(Request $request){

        $request->validate([
            'nama'=>'required|',
            'noabs'=>'required|',
            'alamat'=>'required|',
        ]);

        DB::table('siswa')-> insert([
            'nama_siswa' => $request->nama,
            'no_absen' => $request->noabs,
            'Alamat' => $request->alamat,
        ]);
        
        Alert::success('Success', 'Data Berhasil');

        return redirect('/walisiswa');}

        public function show($id){
            $siswa = DB::table('siswa')->find($id);
            return view('walisiswa.detailwalisiswa', compact('siswa'));
        }

        public function edit($id) {
            $siswa = DB::table('siswa')->find($id);
            return view('walisiswa.editwalisiswa', compact('siswa'));
        }
        

        public function update(Request $request, $id)
        {
            $request->validate([
                'nama' => 'required',
                'noabs' => 'required|',
                'alamat' => 'required|',
            ]);
        
            $request = DB::table('siswa')
                ->where('id', $id)
                ->update([
                    'nama_siswa' => $request->nama,
                    'no_absen' => $request->noabs,
                    'Alamat' => $request->alamat,
                ]);
        
            Alert::success('Success', 'Data Berhasil di Update');
            return redirect('/walisiswa');
        }
        
        public function destroy($id) {
            $siswa = DB::table('siswa')->where('id', $id)->delete();
            Alert::success('Success', 'Data Berhasil di Hapus');
            return redirect('/walisiswa');
        }
}
