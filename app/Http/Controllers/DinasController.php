<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DinasController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $dinas_luar = Dinas::latest()->paginate(5);

        //render view with posts
        return view('dashboard.index', compact('dinas_luar'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nip'     => 'required|min:5',
            'nama'     => 'required|min:5',
            'kota_asal'   => 'required|min:2',
            'st_asal'     => 'required|min:2',
            'ket_asal'   => 'required|min:2',
            'kota_tujuan'     => 'required|min:2',
            'st_pulang'   => 'required|min:2',
            'ket_pulang'     => 'required|min:2',
        ]);


        //create post
        Dinas::create([
            'nip'     =>  $request->nip,
            'nama'     => $request->nama,
            'kota_asal'   => $request->kota_asal,
            'st_asal'     => $request->st_asal,
            'ket_asal'   => $request->ket_asal,
            'kota_tujuan'     => $request->kota_tujuan,
            'st_pulang'   => $request->st_pulang,
            'ket_pulang'     => $request->ket_pulang,
        ]);

        //redirect to index
        return redirect()->route('dashboard.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    /**
     * edit
     *
     * @param  mixed $dinas_luar
     * @return void
     */
    public function edit($dashboard)
    {
        return view('dashboard.edit', ['dinas'=> Dinas::where('kd_dl', $dashboard)->first()]);
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $dinas_luar
     * @return void
     */
    public function update(Request $request, $dashboard)
    {
        //validate form
        

        //create post
        Dinas::where('kd_dl', $dashboard)->update([
            'nip'     =>  $request->nip,
            'nama'     => $request->nama,
            'kota_asal'   => $request->kota_asal,
            'st_asal'     => $request->st_asal,
            'ket_asal'   => $request->ket_asal,
            'kota_tujuan'     => $request->kota_tujuan,
            'st_pulang'   => $request->st_pulang,
            'ket_pulang'     => $request->ket_pulang,
        ]);

        //redirect to index
        return redirect()->route('dashboard.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    
    /**
     * destroy
     *
     * @param  mixed $dinas_luar
     * @return void
     */
    public function destroy($dashboard)
    {


        //delete post
        Dinas::where('kd_dl',$dashboard)->delete();

        //redirect to index
        return redirect()->route('dashboard.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}