<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurikulum;
use App\Jurusan;
use App\Prodi;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class KurikulumController extends Controller
{
     public function index(Request $request)
    {
        $jurusan = Jurusan::pluck('nama_jurusan','id')->all();
        $kurikulums=DB::table('kurikulum')
                ->leftjoin('jurusan','jurusan.id','=','kurikulum.nama_jurusan')
                ->leftjoin('prodi','prodi.id','=','kurikulum.prodi')
                ->select('kurikulum.*','jurusan.nama_jurusan as namjur','prodi.nama_prodi as nampro')
                ->where(function($query)use ($request)
                {
                    if(($term=$request->get('nama_jurusan')))
                    {
                        $query->orWhere('nama_jurusan',$request->input('nama_jurusan')
                            ,'like','%'.$term.'%');
                    }
                })
                ->orderBy('id','DESC')
                ->paginate(5);

        return view('kurikulum.index',compact('kurikulums','jurusan','prodi'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

 public function create()
    {
        $jurusan = Jurusan::pluck('nama_jurusan','id')->all();
        $prodi = Prodi::pluck('nama_prodi','id')->all();
        return view('kurikulum.create',['jurusan'=>$jurusan],['prodi'=>$prodi]);
    }

public function store(Request $request)
    {
        $this->validate($request, [
            'smt',
            'matakuliah',
            'judul_kurikulum'=>'required',
            'sks',
            'nama_jurusan'=>'required',
            'prodi'=>'required',
            'file_kurikulum'=>'required',
            'tahun'=>'required',
            ]);

        $kurikulum = new Kurikulum();
        $kurikulum->smt = $request->input('smt');
        $kurikulum->matakuliah = $request->input('matakuliah');
        $kurikulum->judul_kurikulum = $request->input('judul_kurikulum');
        $kurikulum->sks = $request->input('sks');
        $kurikulum->nama_jurusan = $request->input('nama_jurusan');
        $kurikulum->prodi = $request->input('prodi');
        $kurikulum->tahun = $request->input('tahun');

        $file=$request->file('file_kurikulum');
        $ex= $request ->file_kurikulum->clientExtension();
        $filename=$request['judul_kurikulum'].'.'.$ex;
       
        $kurikulum->file_kurikulum = $filename;
        if($file){
            $request->file_kurikulum->storeAs('public',$filename);
        }


        $file=$request->file('rps');
        $ex= $request ->rps->clientExtension();
        $filename=$request['judul_kurikulum'].'.'.$ex;
       
        $kurikulum->rps = $filename;
        if($file){
            $request->rps->storeAs('public',$filename);
        }

            $kurikulum->save();
        return redirect()->route('kurikulum.index')
                        ->with('success','Kurikulum created successfully');
    }

    public function getkuri($filename)
    {
        $file=Storage::disk('local')->get($filename);

        return $file->download($filename);
    }

    public function edit($id)
    {
        $kurikulum = Kurikulum::find($id);
        $jurusan = Jurusan::pluck('nama_jurusan','id')->all();
        $prodi = Prodi::pluck('nama_prodi','id')->all();
        return view('kurikulum.edit',compact('kurikulum','jurusan','prodi'));
       
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

        
        $kurikulum = Kurikulum::find($id);
        $kurikulum->matakuliah = $request->input('matakuliah');
        $kurikulum->nama_jurusan = $request->input('nama_jurusan');
        $kurikulum->prodi = $request->input('prodi');
        $kurikulum->tahun = $request->input('tahun');


        $file=$request->file('file_kurikulum');
        $ex= $request ->file_kurikulum->clientExtension();
        $filename=$request['matakuliah'].'-'.$ex;
       
        $kurikulum->file_kurikulum = $filename;
        if($file){
            $request->file_kurikulum->storeAs('public',$filename);
        }

            $kurikulum->save();
        return redirect()->route('kurikulum.index')
                        ->with('success','Rps created successfully');
    }
     public function destroy($id)
    {
        Kurikulum::find($id)->delete();
        return redirect()->route('kurikulum.index');
    }
}
