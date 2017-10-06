<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serdos;
use App\Asessor;
use App\Dosen;
use App\Cek;
use App\Jurusan;
use DB;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;

class SerdosController extends Controller
{
     public function index(Request $request)
    {

        $serdoss = Serdos::leftjoin('cek','serdos.nip_dosen','=','cek.nip_dosen')
                            ->leftjoin('jurusan','jurusan.id','=','serdos.jurusan_id')
                            ->select('serdos.*','jurusan.nama_jurusan as namjur',
                                DB::raw('(cek.sk_mengajar+cek.rps)+cek.absen+(cek.nilai+cek.bp_penelitian)+cek.bd_penelitian+(cek.bp_pengabdian+cek.bd_pengabdian)+cek.bp_penunjang+cek.bd_penunjang
                                as data'),'cek.nip_dosen as cn')
                            ->get();


       return view('serdos.index',compact('serdoss'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

 public function create()
    {

        $asessor = Asessor::pluck('nama_asessor')->all();
        $serdos = Serdos::get();
        $dosen=Dosen::get();

        return view('serdos.create',['asessor'=>$asessor]);
        
    }

public function store(Request $request)
    {
        $this->validate($request, [
            
            'nip_dosen'=>'required',
            'nama_dosen'=>'required',
            'nama_asessor1',
            'nama_asessor2',
            'jurusan_id'=>'required',
            'tahun_sertifikasi'=>'required',
            'smt_sertifikasi'=>'required',
            ]);
        $serdos = new Serdos();
        
        $serdos->nip_dosen = $request->input('nip_dosen');
        $serdos->nama_dosen = $request->input('nama_dosen');
        $serdos->nama_asessor1 = $request->input('nama_asessor1');
        $serdos->nama_asessor2 = $request->input('nama_asessor2');
        $serdos->jurusan_id = $request->input('jurusan_id');
        $serdos->tahun_sertifikasi= $request->input('tahun_sertifikasi');
        $serdos->smt_sertifikasi= $request->input('smt_sertifikasi');

        return redirect()->route('serdos.index')
                        ->with('success','Serdos created successfully');
    }
    public function show($id)
    {
        $serdos=Serdos::find($id);
        return view('serdos.show',compact('serdos'));
    }
    public function edit($id)
    {
        $jurusan = Jurusan::pluck('nama_jurusan','id')->all();
        $asessor = Asessor::pluck('nama_asessor','id')->all();
        $serdos = Serdos::find($id);
        return view('serdos.edit',compact('serdos','asessor','jurusan'));
    }


    public function update(Request $request, $id)
    {
         
         $this->validate($request, [
            'nip_dosen'=>'required',
            'nama_dosen'=>'required',
            'nama_asessor1'=>'required',
            'nama_asessor2'=>'required',
            'passw',
            'jurusan_id'=>'required',
            'tahun_sertifikasi'=>'required',
            'smt_sertifikasi'=>'required',
            ]);

       
        $serdos = Serdos::find($id);
        $serdos->nip_dosen = $request->input('nip_dosen');
        $serdos->nama_dosen = $request->input('nama_dosen');
        $serdos->nama_asessor1 = $request->input('nama_asessor1');
        $serdos->nama_asessor2 = $request->input('nama_asessor2');
        $serdos->passw = $request->input('passw');
        $serdos->jurusan_id = $request->input('jurusan_id');
        $serdos->tahun_sertifikasi = $request->input('tahun_sertifikasi');
        $serdos->smt_sertifikasi = $request->input('smt_sertifikasi');
        $serdos->save();

        return redirect()->route('serdos.index')
                        ->with('success','Role updated successfully');
    }

    public function asessorpilih($id)
    {

        $jurusan = Jurusan::pluck('nama_jurusan','id')->all();
        $asessor = Asessor::all();
        $asessors = Asessor::all();
        $serdos = Serdos::find($id);
        return view('serdos.pilihAsessor',compact('serdos','asessor','jurusan','asessors'));
    }
    public function updateAsessor(Request $request,$id)
    {
    
        $this->validate($request, [
            'nip_dosen'=>'required',
            'nama_dosen'=>'required',
            'nama_asessor1'=>'required',
            'nama_asessor2'=>'required',
            'passw',
            'jurusan_id'=>'required',
            'tahun_sertifikasi'=>'required',
            'smt_sertifikasi'=>'required',
            ]);

        //$serdos= new Serdos();
         $serdos = Serdos::find($id);
        $serdos->nip_dosen = $request->input('nip_dosen');
        $serdos->nama_dosen = $request->input('nama_dosen');
        $serdos->nama_asessor1 = $request->input('nama_asessor1');
        $serdos->nama_asessor2 = $request->input('nama_asessor2');
        $serdos->passw = $request->input('passw');
        $serdos->jurusan_id = $request->input('jurusan_id');
        $serdos->tahun_sertifikasi = $request->input('tahun_sertifikasi');
        $serdos->smt_sertifikasi = $request->input('smt_sertifikasi');
        $serdos->save();

        return redirect()->route('serdos.index')
                        ->with('success','Role updated successfully');
    }



public function cek($id)
    {
        $asessor = Asessor::pluck('nama_asessor','id')->all();
        $serdos = Serdos::find($id);
        return view('serdos.cek',compact('serdos','asessor'));
    }
    public function updateCek(Request $request,$id)
    {
    
        $this->validate($request, [
            'nip_dosen'=>'required',
            'nama_dosen'=>'required',
            'nama_asessor1'=>'required',
            'nama_asessor2'=>'required',
            ]);


        $serdos = Serdos::find($id);
        $cek=new Cek();
        $cek->nip_dosen=$serdos->nip_dosen;
        $cek->nama_dosen=$serdos->nama_dosen;
        $cek->nama_asessor1=$request->nama_asessor1;
        $cek->nama_asessor2=$request->nama_asessor2;
        $cek->sk_mengajar=$request->input('sk');
        $cek->rps=$request->input('rps');
        $cek->absen=$request->input('absen');
        $cek->nilai=$request->input('nilai');
        $cek->bp_penelitian=$request->input('bp_penelitian');
        $cek->bd_penelitian=$request->input('bd_penelitian');
         $cek->bp_penunjang=$request->input('bp_penunjang');
        $cek->bd_penunjang=$request->input('bd_penunjang');
        $cek->bp_pengabdian=$request->input('bp_pengabdian');
        $cek->bd_pengabdian=$request->input('bd_pengabdian');
        
        $cek->save();


        return redirect()->route('serdos.index')
                        ->with('success','Role updated successfully');
    }


    public function cekLagi($id)
    {
        $asessor = Asessor::pluck('nama_asessor','id')->all();
        $serdos = Serdos::where('nip_dosen',$id)->first();
        return view('serdos.updateCeklagi',compact('serdos','asessor','id'));
        
    }

     public function updateCeknya(Request $request,$id)
    {
        $this->validate($request, [
            //'nip_dosen'=>'required',
            'nama_dosen'=>'required',
            'nama_asessor1'=>'required',
            'nama_asessor2'=>'required',
            ]);


        $cek = Cek::where('nip_dosen',$id)->first();
        
        // $cek->nip_dosen=$request->nip_dosen;
        $cek->nama_dosen=$request->input('nama_dosen');
        $cek->nama_asessor1 = $request->input('nama_asessor1');
        $cek->nama_asessor2 = $request->input('nama_asessor2');
        $cek->sk_mengajar=$request->input('sk');
        $cek->rps=$request->input('rps');
         $cek->absen=$request->input('absen');
        $cek->nilai=$request->input('nilai');
        $cek->bp_penelitian=$request->input('bp_penelitian');
         $cek->bd_penelitian=$request->input('bd_penelitian');
         $cek->bp_penunjang=$request->input('bp_penunjang');
        $cek->bd_penunjang=$request->input('bd_penunjang');
        $cek->bp_pengabdian=$request->input('bp_pengabdian');
        $cek->bd_pengabdian=$request->input('bd_pengabdian');
            $cek->save();


        return redirect()->route('serdos.index')
                        ->with('success','Role updated successfully');
    }


   

     public function destroy($id)
    {
        Serdos::find($id)->delete();
        return redirect()->route('serdos.index');
    }


    //report peserta serdos
    public function selectpeserta()
    {
        $serdos=DB::table('serdos')->groupBy('tahun_sertifikasi')->value('tahun_sertifikasi');
        $serdoss=DB::table('serdos')->groupBy('smt_sertifikasi')->value('smt_sertifikasi');
        return view('rekappeserta.selectpeserta',['th'=>$serdos,'smt'=>$serdoss]);

    }
     public function filterpeserta(Request $request)
     {
        $serdosth=$request->input('th');
        $serdossmt=$request->input('smt');
    

        $serdos=Serdos::select('serdos.nama_dosen', 'serdos.nama_asessor1 as asessor1', 'serdos.nama_asessor2 as asessor2')
                ->where('serdos.tahun_sertifikasi',$serdosth)
                ->where('serdos.smt_sertifikasi',$serdossmt)
                ->get();
              
        return view('rekappeserta.filepeserta',compact('serdos','serdosth','serdossmt'));

     }

     public function setpdfpeserta($t,$sm)
     {
        $th=Serdos::where('tahun_sertifikasi',$t)->first();
        $smtt=Serdos::where('smt_sertifikasi',$sm)->first();

         $serdos=Serdos::select('serdos.nama_dosen', 'serdos.nama_asessor1 as asessor1', 'serdos.nama_asessor2 as asessor2')
                ->where('serdos.tahun_sertifikasi',$t)
                ->where('serdos.smt_sertifikasi',$sm)
                ->get();
                
            $pdf=PDF::loadView('rekappeserta.pdfpeserta',compact('serdos','th','sm'))->setPaper('a4','potrait');

            return $pdf->download('rekappeserta.pdf');
     }

     //reportasessordosen
     public function selectasessordosen()
    {
        $asessors=DB::table('asessor')->get();
        $serdos=DB::table('serdos')->groupBy('tahun_sertifikasi')->value('tahun_sertifikasi');
        $serdoss=DB::table('serdos')->groupBy('smt_sertifikasi')->value('smt_sertifikasi');

        return view('rekapasessordosen.selectasessordosen',['nm'=>$asessors,'th'=>$serdos,'smt'=>$serdoss]);



    }
     public function filterassdos(Request $request)
     {
      
        $serdosth=$request->input('th');
        $serdossmt=$request->input('smt');
         $asessornm=$request->input('nm');

        $serdos=Serdos::leftjoin('asessor','serdos.nama_asessor1','=','asessor.nama_asessor')
                ->select('serdos.nama_dosen', 'serdos.passw as Password')
                ->where('serdos.tahun_sertifikasi',$serdosth)
                ->where('serdos.smt_sertifikasi',$serdossmt)
                ->where('asessor.id',$asessornm)
                ->get();


              
      return view('rekapasessordosen.fileasessordosen',compact('serdos','serdosth','serdossmt','asessornm','asessor'));


     }

     


}
