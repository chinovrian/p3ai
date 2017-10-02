<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Jurusan;
use DB;
use App\Http\Controllers\Controller;

class JurusanController extends Controller
{
    public function index(Request $request)
    {
        $jurusans = Jurusan::orderBy('id','DESC')
        ->paginate(5);
        
        return view('jurusan.index',compact('jurusans'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

 public function create()
    {
        return view('jurusan.create');

    }

public function store(Request $request)
    {
        $this->validate($request, [
            'nama_jurusan' => 'required',

            ]);
        Jurusan::create($request->all());

        return redirect()->route('jurusan.index')
                        ->with('success','Item created successfully');
    }
    public function show($id)
    {
        $jurusan=Jurusan::find($id);

        return view('jurusan.show',compact('jurusan'));
    }
    public function edit($id)
    {
        $jurusan = Jurusan::find($id);
        return view('jurusan.edit',compact('jurusan'));

    }
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'nama_jurusan' => 'required',

            ]);
       Jurusan::find($id)->update($request->all());
        

        return redirect()->route('jurusan.index')
                        ->with('success','Jurusan updated successfully');
    }
     public function destroy($id)
    {
        Jurusan::find($id)->delete();
        return redirect()->route('jurusan.index');
    }
}
