<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Dosen;
use App\Jurusan;
use App\Prodi;
use App\Serdos;
use App\Asessor;
use App\Bkd;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DosenController extends Controller
{
     public function index(Request $request)
    {
        $dosens=DB::table('dosen')
                ->join('jurusan','jurusan.id','=','dosen.jurusan_id')
                ->join('prodi','prodi.id','=','dosen.prodi_id')
                ->select('dosen.*','jurusan.nama_jurusan as namjur','prodi.nama_prodi as nampro')
                ->orderBy('id','DESC')
                ->paginate(6);

        // $dosens = Dosen::orderBy('id','DESC')
        //             ->paginate(5);
        
        return view('dosen.index',compact('dosens'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

 public function create()
    {
        $jurusan = Jurusan::pluck('nama_jurusan','id')->all();
        $prodi = Prodi::pluck('nama_prodi','id')->all();

        return view('dosen.create',['jurusan'=>$jurusan],['prodi'=>$prodi]);
    }

public function store(Request $request)
    {
        $this->validate($request, [
            'no_sertifikat' => 'required',
            'nip_dosen' => 'required|unique:dosen',
            'nama_dosen' => 'required',
            'nama_pt',
            'alamat_pt',
            'jurusan_id' => 'required',
            'prodi_id' => 'required',
            'jab_fungsional' => 'required',
            'gol' => 'required',
            'tempat_lahir',
            'tanggal_lahir',
            'pend_s1',
            'pend_s2',
            'pend_s3',
            'jenis',
            'bdg_ilmu',
            'alamat_dosen',
            'telepon',
            'foto',
            
            ]);
       $bkd=new Bkd();
       $dosen = new Dosen();
       $serdos=new Serdos();

        $dosen->no_sertifikat = $request->input('no_sertifikat');
        $dosen->nip_dosen = $request->input('nip_dosen');
        $dosen->nama_dosen = $request->input('nama_dosen');
        $dosen->nama_pt = $request->input('nama_pt');
        $dosen->alamat_pt = $request->input('alamat_pt');
        $dosen->jurusan_id = $request->input('jurusan_id');
        $dosen->prodi_id= $request->input('prodi_id');
        $dosen->jab_fungsional = $request->input('jab_fungsional');
        $dosen->gol = $request->input('gol');
        $dosen->tempat_lahir = $request->input('tempat_lahir');
        $dosen->tanggal_lahir = $request->input('tanggal_lahir');
        $dosen->pend_s1 = $request->input('pend_s1');
        $dosen->pend_s2 = $request->input('pend_s2');
        $dosen->pend_s3 = $request->input('pend_s3');
        $dosen->jenis = $request->input('jenis');
        $dosen->bdg_ilmu = $request->input('bdg_ilmu');
        $dosen->alamat_dosen = $request->input('alamat_dosen');
        $dosen->email_dosen = $request->input('email_dosen');
        $dosen->telepon = $request->input('telepon');
       // $dosen->save();
        // if ($request->hasFile('foto')) {
        //     echo 'foto ado';
        // } else {
        //     echo 'foto ndk ado';
        // }
        // dd();

        $file=$request->file('foto');
        
        // echo $foto;
        // dd();

        $filename=$request['nama_dosen'].'-'.$dosen->nip_dosen.'.jpg';
        // echo $filename;
        // dd();
        $dosen->foto = $filename;
        if($file){
            $request->foto->storeAs('public',$filename);
        }
        $dosen->save();

        //serdos
        $serdos->nama_dosen=$request->input('nama_dosen');
        $serdos->nip_dosen=$request->input('nip_dosen');
        $serdos->jurusan_id=$request->input('jurusan_id');
        $serdos->save();

        //bkd
        $bkd->nama_dosen=$request->input('nama_dosen');
        $bkd->nip_dosen=$request->input('nip_dosen');
        $bkd->save();
        return redirect()->route('dosen.index')
                        ->with('success','Dosen created successfully');
    }
    public function show($id)
    {

        $dosen=Dosen::find($id);
        $dosens=DB::table('dosen')
                ->join('jurusan','jurusan.id','=','dosen.jurusan_id')
                ->join('prodi','prodi.id','=','dosen.prodi_id')
                ->select('dosen.*','jurusan.nama_jurusan as namjur','prodi.nama_prodi as nampro')
                ->orderBy('id','DESC')
                ->paginate(5);

        return view('dosen.show',compact('dosen','dosens'));
    }

    public function getDosenImage($filename)
    {
        $file=Storage::disk('local')->get($filename);

        return new Response($file,200);
    }
    public function edit($id)
    {
        $jurusan = Jurusan::pluck('nama_jurusan','id')->all();
         $prodi = Prodi::pluck('nama_prodi','id')->all();
        $dosen = Dosen::find($id);
        return view('dosen.edit',compact('dosen','jurusan','prodi'));
    }
    public function update(Request $request, $id)
    {


         $this->validate($request, [
            'no_sertifikat' => 'required',
            'nip_dosen' => 'required|unique:dosen',
            'nama_dosen' => 'required',
            'nama_pt',
            'alamat_pt',
            'jurusan_id' => 'required',
            'prodi_id' => 'required',
            'jab_fungsional' => 'required',
            'gol' => 'required',
            'tempat_lahir',
            'tanggal_lahir',
            'pend_s1',
            'pend_s2',
            'pend_s3',
            'jenis',
            'bdg_ilmu',
            'telepon',
            'foto',
            'tahun',
            'smt_sertifikasi',
        ]);

        $dosen = Dosen::find($id);
      $dosen->no_sertifikat = $request->input('no_sertifikat');
        $dosen->nip_dosen = $request->input('nip_dosen');
        $dosen->nama_dosen = $request->input('nama_dosen');
        $dosen->nama_pt = $request->input('nama_pt');
        $dosen->alamat_pt = $request->input('alamat_pt');
        $dosen->jurusan_id = $request->input('jurusan_id');
        $dosen->prodi_id= $request->input('prodi_id');
        $dosen->jab_fungsional = $request->input('jab_fungsional');
        $dosen->gol = $request->input('gol');
        $dosen->tempat_lahir = $request->input('tempat_lahir');
        $dosen->tanggal_lahir = $request->input('tanggal_lahir');
        $dosen->pend_s1 = $request->input('pend_s1');
        $dosen->pend_s2 = $request->input('pend_s2');
        $dosen->pend_s3 = $request->input('pend_s3');
        $dosen->jenis = $request->input('jenis');
        $dosen->bdg_ilmu = $request->input('bdg_ilmu');
        $dosen->alamat_dosen = $request->input('alamat_dosen');
        $dosen->email_dosen = $request->input('email_dosen');
        $dosen->telepon = $request->input('telepon');
        $dosen->tahun = $request->input('tahun');
        $dosen->smt_sertifikasi = $request->input('smt_sertifikasi');
        // if ($request->hasFile('foto')) {
        //     echo 'foto ado';
        // } else {
        //     echo 'foto ndk ado';
        // }
        // dd();

        $file=$request->file('foto');
        
        // echo $foto;
        // dd();

        $filename=$request['nama_dosen'].'-'.$dosen->nip_dosen.'.jpg';
        // echo $filename;
        // dd();
        $dosen->foto = $filename;
        if($file){
            $request->foto->storeAs('public',$filename);
        }
        $dosen->save();
        return redirect()->route('dosen.index')
                        ->with('success','Dosen created successfully');
    }


     public function destroy($id)
    {
        Dosen::find($id)->delete();
        return redirect()->route('dosen.index');
    }
}
