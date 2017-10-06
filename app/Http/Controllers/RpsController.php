<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rps;
use App\Jurusan;
use App\Prodi;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class RpsController extends Controller
{
     public function index(Request $request)
    {

        $rpss=DB::table('rps')
                ->leftjoin('jurusan','jurusan.id','=','rps.nama_jurusan')
                ->leftjoin('prodi','prodi.id','=','rps.prodi')
                ->select('rps.*','jurusan.nama_jurusan as namjur','prodi.nama_prodi as nampro')
                ->orderBy('id','DESC')
                ->paginate(5);

        return view('rps.index',compact('rpss'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

 public function create()
    {
        $jurusan = Jurusan::pluck('nama_jurusan','id')->all();
        $prodi = Prodi::pluck('nama_prodi','id')->all();
        return view('rps.create',['jurusan'=>$jurusan],['prodi'=>$prodi]);
    }

public function store(Request $request)
    {
        $this->validate($request, [
            'matakuliah'=>'required',
            'dosen_pengampu'=>'required',
            'nama_jurusan'=>'required',
            'prodi'=>'required',
            'file_rps'=>'required',
            'tahun'=>'required',
            ]);

        $rps = new Rps();
        $rps->matakuliah = $request->input('matakuliah');
        $rps->dosen_pengampu = $request->input('dosen_pengampu');
        $rps->nama_jurusan = $request->input('nama_jurusan');
        $rps->prodi = $request->input('prodi');
        //$rps->file_rps= $request->input('file_rps'); 
        $rps->tahun = $request->input('tahun');


        $file=$request->file('file_rps');
        $ex= $request ->file_rps->clientExtension();
        $filename=$request['matakuliah'].'-'.$ex;
       
        $rps->file_rps = $filename;
        if($file){
            $request->file_rps->storeAs('public',$filename);
        }

            $rps->save();
        return redirect()->route('rps.index')
                        ->with('success','Rps created successfully');
    }
    public function show($id)
    {

        $rps=Rps::find($id);

        
        return view('rps.show',compact('rps'));
    }
    public function edit($id)
    {
        $rps = Rps::find($id);
        $jurusan = Jurusan::pluck('nama_jurusan','id')->all();
        $prodi = Prodi::pluck('nama_prodi','id')->all();
        return view('rps.edit',compact('rps','jurusan','prodi'));
       
    }
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'matakuliah'=>'required',
            'dosen_pengampu'=>'required',
            'nama_jurusan'=>'required',
            'prodi'=>'required',
            'file_rps'=>'required',
            'tahun'=>'required',
    
        ]);

        
        $rps = Rps::find($id);
        $rps->matakuliah = $request->input('matakuliah');
        $rps->dosen_pengampu = $request->input('dosen_pengampu');
        $rps->nama_jurusan = $request->input('nama_jurusan');
        $rps->prodi = $request->input('prodi');
        
        $rps->tahun = $request->input('tahun');


        $file=$request->file('file_rps');
        $ex= $request ->file_rps->clientExtension();
        $filename=$request['matakuliah'].'-'.$ex;
       
        $rps->file_rps = $filename;
        if($file){
            $request->file_rps->storeAs('public',$filename);
        }

            $rps->save();
        return redirect()->route('rps.index')
                        ->with('success','Rps created successfully');
    }
     public function destroy($id)
    {
        Rps::find($id)->delete();
        return redirect()->route('rps.index');
    }
}
