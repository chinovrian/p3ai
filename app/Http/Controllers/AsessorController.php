<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Asessor;
use App\Jurusan;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AsessorController extends Controller
{
     public function index(Request $request)
    {
        
         $asessors=DB::table('asessor')
                ->join('jurusan','jurusan.id','=','asessor.jurusan_id')
                ->select('asessor.*','jurusan.nama_jurusan as namajur')
                ->orderBy('id','DESC')
                ->paginate(5);

         // $asessors= Asessor::orderBy('id','DESC')
         //             ->paginate(5);
        
        return view('asessor.index',compact('asessors'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

 public function create()
    {
        $jurusan = Jurusan::pluck('nama_jurusan','id')->all();
        return view('asessor.create',['jurusan'=>$jurusan]);
    }

public function store(Request $request)
    {
        $this->validate($request, [
            'nip_asessor' => 'required|unique:asessor',
            'nama_asessor' => 'required',
            'jurusan_id' ,
            'alamat_asessor',
            'email_asessor' ,
            'telepon',
            'foto' ,
            'tahun' => 'required',
            ]);

       $asessor = new Asessor();
        $asessor->nip_asessor = $request->input('nip_asessor');
        $asessor->nama_asessor = $request->input('nama_asessor');
        $asessor->jurusan_id = $request->input('jurusan_id');
        $asessor->alamat_asessor = $request->input('alamat_asessor');
        $asessor->email_asessor = $request->input('email_asessor');
        $asessor->telepon = $request->input('telepon');
        $asessor->tahun = $request->input('tahun');

        $file=$request->file('foto');

        $filename=$request['nama_asessor'].'-'.$asessor->nip_asessor.'.jpg';
        
        $asessor->foto = $filename;
        if($file){
            $request->foto->storeAs('public',$filename);
        }
        $asessor->save();
        return redirect()->route('asessor.index')
                        ->with('success','Asessor created successfully');
    }
    public function show($id)
    {

        $asessor=Asessor::find($id);
        $asessors=DB::table('asessor')
                ->leftjoin('jurusan','jurusan.id','=','asessor.jurusan_id')
                ->select('asessor.*','jurusan.nama_jurusan as namajur')
                ->orderBy('id','DESC');

        return view('asessor.show',compact('asessor','asessors'));
    }

    public function getAsessorImage($filename)
    {
        $file=Storage::disk('local')->get($filename);

        return new Response($file,200);
    }
    public function edit($id)
    {
        $jurusan = Jurusan::pluck('nama_jurusan','id')->all();
        $asessor = Asessor::find($id);
        return view('asessor.edit',compact('asessor','jurusan'));
    }
    public function update(Request $request, $id)
    {


         $this->validate($request, [
            'nip_asessor' => 'required',
            'nama_asessor' => 'required',
            'jurusan_id' => 'required',
            'alamat_asessor' => 'required',
            'email_asessor' => 'required',
            'telepon' => 'required',
            'foto' => 'required',
            'tahun' => 'required',
        ]);

        $asessor = Asessor::find($id);
        $asessor->nip_asessor = $request->input('nip_asessor');
        $asessor->nama_asessor = $request->input('nama_asessor');
        $asessor->jurusan_id = $request->input('jurusan_id');
        $asessor->alamat_asessor= $request->input('alamat_asessor');
        $asessor->email_asessor = $request->input('email_asessor');
        $asessor->telepon = $request->input('telepon');
        $asessor->foto = $request->input('foto');
        $asessor->tahun = $request->input('tahun');
        $asessor->save();

        return redirect()->route('asessor.index')
                        ->with('success','Asessor updated successfully');
    }


     public function destroy($id)
    {
        Asessor::find($id)->delete();
        return redirect()->route('asessor.index');
    }
}
