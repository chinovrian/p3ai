<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Prodi;
use DB;
use App\Http\Controllers\Controller;

class ProdiController extends Controller
{
    public function index(Request $request) 
    {
        $prodis = Prodi::orderBy('id','DESC')
        ->paginate(5);
        return view('prodi.index',compact('prodis'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

 public function create()
    {
        return view('prodi.create',compact('prodi'));
    }

public function store(Request $request)
    {
        $this->validate($request, [
        'nama_prodi' => 'required',

            ]);
        $prodi = new Prodi();
        $prodi->nama_prodi = $request->input('nama_prodi');

        Prodi::create($request->all());

        return redirect()->route('prodi.index')
                        ->with('success','Prodi created successfully');
    }
    public function show($id)
    {
        $prodi=Prodi::find($id);

        return view('prodi.show',compact('prodi'));
    }
       public function edit($id)
    {
        $prodi = Prodi::find($id);
        return view('prodi.edit',compact('prodi'));
    }
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'nama_prodi' => 'required',

            ]);
        Prodi::find($id)->update($request->all());
    

        return redirect()->route('prodi.index')
                        ->with('success','Prodi updated successfully');
    }
     public function destroy($id)
    {
        Prodi::find($id)->delete();
        return redirect()->route('prodi.index');
    }
}
