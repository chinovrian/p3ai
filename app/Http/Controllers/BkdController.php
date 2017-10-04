<?php

namespace App\Http\Controllers;

use App\Dosen;
use App\Bkd;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class BkdController extends Controller
{
    public function index(Request $request)
    {


    	$bkds = Bkd::orderBy('id','DESC')
        ->paginate(5);
        return view('bkd.index',compact('bkds'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

     public function edit($id)
    {
        $bkd = Bkd::find($id);
        return view('bkd.edit',compact('bkd'));
    }
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'nip_dosen',
            'nama_dosen',
            'keterangan',
            'tahun',

            ]);
        Bkd::find($id)->update($request->all());
    

        return redirect()->route('bkd.index')
                        ->with('success','Bkd updated successfully');
    }
     public function destroy($id)
    {
        Bkd::find($id)->delete();
        return redirect()->route('bkd.index');
    }

    //reportbkd

    public function selectbkd()
    {
        $bkd=DB::table('bkddosen')->groupBy('tahun')->value('tahun');
        $bkds=DB::table('bkddosen')->groupBy('smt')->value('smt');
        $bkdk=DB::table('bkddosen')->groupBy('keterangan')->value('keterangan');

        return view ('rekapbkd.selectbkd',['th'=>$bkd,'sm'=>$bkds,'kt'=>$bkdk]);
    }

    public function filterbkd(Request $request)
    {
        $bkdth=$request->input('th');
        $bkdsm=$request->input('sm');
        $bkdket=$request->input('kt');

        $bkddosen=DB::table('bkddosen')
        ->select('bkddosen.nama_dosen','bkddosen.keterangan')
        ->where('bkddosen.tahun',$bkdth)
        ->where('bkddosen.smt',$bkdsm)
        ->where('bkddosen.keterangan',$bkdket)
        ->get();

        return view('rekapbkd.filebkd',compact('bkddosen','bkdth','bkdsm','bkdket'));
       
    }

    public function setpdfbkd($t,$s,$k)
    {
        $th = Bkd::where('tahun',$t)->first();
        $smtt = Bkd::where('smt',$s)->first();
        $ket= Bkd::where('keterangan',$k)->first();

        $bkddosen=Bkd::select('bkddosen.nama_dosen','bkddosen.keterangan')
        ->where('bkddosen.tahun',$t)
        ->where('bkddosen.smt',$s)
        ->where('bkddosen.keterangan',$k)
        ->get();

        $pdf=PDF::loadView('rekapbkd.pdfbkd',compact('bkddosen','th','smtt','ket'))->setPaper('a4','potrait');

        return $pdf->download('rekapbkd.pdf');
    }
}
