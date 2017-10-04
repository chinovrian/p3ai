<?php

namespace App\Http\Controllers;
use DB;
use App\Kelengkapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class KelengkapanController extends Controller
{
   public function index(Request $request)
    {
        $kelengkapans = Kelengkapan::orderBy('id','DESC')
        ->paginate(5);
        
        return view('kelengkapan.index',compact('kelengkapans'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

 public function create()
    {
        return view('kelengkapan.create');

    }

public function store(Request $request)
    {
        $this->validate($request, [
            'nip_dosen',
            'nama_dosen',
            'ijas1',
            'ijas2',
            'ijas3',
            'ser_pen',

            ]);
      $kelengkapan = new Kelengkapan();
        $kelengkapan->nip_dosen = $request->input('nip_dosen');
        $kelengkapan->nama_dosen = $request->input('nama_dosen');

        $file=$request->file('ijas1');
        $ex= $request ->ijas1->clientExtension();
        $filename=$request['nama_dosen'].'.'.$ex;
       
        $kelengkapan->ijas1 = $filename;
        if($file){
            $request->ijas1->storeAs('public',$filename);
        }


        $file=$request->file('ijas2');
        $ex= $request ->ijas2->clientExtension();
        $filename=$request['nama_dosen'].'.'.$ex;
       
        $kelengkapan->ijas2 = $filename;
        if($file){
            $request->ijas2->storeAs('public',$filename);
        }

        $file=$request->file('ijas3');
        $ex= $request ->ijas3->clientExtension();
        $filename=$request['nama_dosen'].'.'.$ex;
       
        $kelengkapan->ijas3 = $filename;
        if($file){
            $request->ijas3->storeAs('public',$filename);
        }

        $file=$request->file('ser_pen');
        $ex= $request ->ser_pen->clientExtension();
        $filename=$request['nama_dosen'].'.'.$ex;
       
        $kelengkapan->ser_pen = $filename;
        if($file){
            $request->ser_pen->storeAs('public',$filename);
        }

        $kelengkapan->save();

        return redirect()->route('kelengkapan.index')
                        ->with('success','Item created successfully');
    }

    public function getkeleng($filename)
    {
        $file=Storage::disk('local')->get($filename);

        return $file->download($filename);
    }

    public function edit($id)
    {
        $kelengkapan = Kelengkapan::find($id);
        return view('kelengkapan.edit',compact('kelengkapan'));

    }
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'nip_dosen',
            'nama_dosen',
            'ijas1',
            'ijas2',
            'ijas3',
            'ser_pen',

            ]);
       Kelengkapan::find($id)->update($request->all());
        return redirect()->route('kelengkapan.index')
                        ->with('success','Jurusan updated successfully');
    }
     public function destroy($id)
    {
        Kelengkapan::find($id)->delete();
        return redirect()->route('kelengkapan.index');
    }
}

