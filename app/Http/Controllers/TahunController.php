<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tahun;
use DB;

class TahunController extends Controller
{
     public function index(Request $request)
    {
        $tahuns = Tahun::orderBy('id','DESC')
        ->paginate(5);
        
        return view('tahun.index',compact('tahuns'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

 public function create()
    {
        return view('tahun.create');

    }

public function store(Request $request)
    {
        $this->validate($request, [
            'tahun',

            ]);
        Tahun::create($request->all());

        return redirect()->route('tahun.index')
                        ->with('success','Item created successfully');
    }
    public function show($id)
    {
        $tahun=Tahun::find($id);

        return view('tahun.show',compact('tahun'));
    }
    public function edit($id)
    {
        $tahun = Tahun::find($id);
        return view('tahun.edit',compact('tahun'));

    }
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'tahun' => 'required',

            ]);
       Tahun::find($id)->update($request->all());
        

        return redirect()->route('tahun.index')
                        ->with('success','Tahun updated successfully');
    }
     public function destroy($id)
    {
        Tahun::find($id)->delete();
        return redirect()->route('tahun.index');
    }
}


