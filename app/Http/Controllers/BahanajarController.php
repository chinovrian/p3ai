<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BahanAjar;
use DB;
use App\Jurusan;
use App\Prodi;
use App\Http\Controllers\Controller;

class BahanajarController extends Controller
{
     public function index(Request $request)
    {
        $bahanajars=Bahanajar::leftjoin('jurusan','jurusan.id','=','bahanajar.nama_jurusan')
                                ->leftjoin('prodi','prodi.id','=','bahanajar.prodi')
                                ->select('bahanajar.*','jurusan.nama_jurusan as namjur', 'prodi.nama_prodi as nampro')
                                ->get();

        return view('bahanajar.index',compact('bahanajars'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

 public function create()
    {

        $jurusan = Jurusan::pluck('nama_jurusan','id')->all();
        $prodi = Prodi::pluck('nama_prodi','id')->all();
        $bahanajar = Bahanajar::get();
        return view('bahanajar.create',compact('bahanajar','jurusan','prodi'));
    }

public function store(Request $request)
    {
        $this->validate($request, [
            'judul_bahanajar'=>'required',
            'dosen_ketua'=>'required',
            'dosen_anggota1',
            'dosen_anggota2',
            'dosen_anggota3',
            'dosen_anggota4',
            'dosen_anggota5',
            'dosen_anggota6',
            'dosen_anggota7',
            'dosen_anggota8',
            'dosen_anggota9',
            'nama_jurusan',
            'prodi',
            'tahun',
            'file_bahanajar',
            ]);
        $bahanajar = new Bahanajar();
        $bahanajar->judul_bahanajar = $request->input('judul_bahanajar');
        $bahanajar->dosen_ketua = $request->input('dosen_ketua');
        $bahanajar->dosen_anggota1 = $request->input('dosen_anggota1');
        $bahanajar->dosen_anggota2 = $request->input('dosen_anggota2');
        $bahanajar->dosen_anggota3 = $request->input('dosen_anggota3');
        $bahanajar->dosen_anggota3 = $request->input('dosen_anggota3');
        $bahanajar->dosen_anggota4 = $request->input('dosen_anggota4');
        $bahanajar->dosen_anggota5 = $request->input('dosen_anggota5');
        $bahanajar->dosen_anggota6 = $request->input('dosen_anggota6');
        $bahanajar->dosen_anggota7 = $request->input('dosen_anggota7');
        $bahanajar->dosen_anggota8 = $request->input('dosen_anggota8');
        $bahanajar->dosen_anggota9 = $request->input('dosen_anggota9');
        $bahanajar->nama_jurusan = $request->input('nama_jurusan');
        $bahanajar->prodi = $request->input('prodi');
        $bahanajar->tahun = $request->input('tahun');
        $bahanajar->save();

        
        return redirect()->route('bahanajar.index')
                        ->with('success','BahanAjar created successfully');
    }
    public function show($id)
    {
        $bahanajar=BahanAjar::find($id);
        return view('bahanajar.show',compact('bahanajar'));
    }
    public function edit($id)
    {
        $jurusan = Jurusan::pluck('nama_jurusan','id')->all();
        $prodi = Prodi::pluck('nama_prodi','id')->all();
        $bahanajar = Bahanajar::find($id);
        return view('bahanajar.create',compact('bahanajar','jurusan','prodi'));
    }
    public function update(Request $request, $id)
    {
         $this->validate($request, [
           'judul_bahanajar'=>'required',
            'dosen_ketua'=>'required',
            'dosen_anggota1',
            'dosen_anggota2',
            'dosen_anggota3',
            'dosen_anggota4',
            'dosen_anggota5',
            'dosen_anggota6',
            'dosen_anggota7',
            'dosen_anggota8',
            'dosen_anggota9',
            'nama_jurusan',
            'prodi',
            'tahun',
            'file_bahanajar',
            ]);
        $bahanajar = Bahanajar::find($id);
        $bahanajar->judul_bahanajar = $request->input('judul_bahanajar');
        $bahanajar->dosen_ketua = $request->input('dosen_ketua');
        $bahanajar->dosen_anggota1 = $request->input('dosen_anggota1');
        $bahanajar->dosen_anggota2 = $request->input('dosen_anggota2');
        $bahanajar->dosen_anggota3 = $request->input('dosen_anggota3');
        $bahanajar->dosen_anggota3 = $request->input('dosen_anggota3');
        $bahanajar->dosen_anggota4 = $request->input('dosen_anggota4');
        $bahanajar->dosen_anggota5 = $request->input('dosen_anggota5');
        $bahanajar->dosen_anggota6 = $request->input('dosen_anggota6');
        $bahanajar->dosen_anggota7 = $request->input('dosen_anggota7');
        $bahanajar->dosen_anggota8 = $request->input('dosen_anggota8');
        $bahanajar->dosen_anggota9 = $request->input('dosen_anggota9');
        $bahanajar->nama_jurusan = $request->input('nama_jurusan');
        $bahanajar->prodi = $request->input('prodi');
        $bahanajar->tahun = $request->input('tahun');
        $bahanajar->save();

        
        return redirect()->route('bahanajar.index')
                        ->with('success','Role updated successfully');
    }
     public function destroy($id)
    {
        Bahanajar::find($id)->delete();
        return redirect()->route('bahanajar.index');
    }
}
