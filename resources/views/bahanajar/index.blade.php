@extends('layouts.index')
 
@section('content')
<div class="page-content">
  <div class="row">
    <div class="page-header">
        <h1>Tables
            <small><i class="ace-icon fa fa-angle-double-right"></i>
                Bahan Ajar Dan Jobshet
            </small>
        </h1>
        <div class="pull-right">
                <a class="btn btn-success" href="{{ route('bahanajar.create') }}"> New Bahan Ajar</a>
            </div>
    </div><!-- /.page-header -->
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="col-xs-12">
              <div class="well clearfix">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                    <table id="simple-table" class="table  table-bordered table-hover">
                        <tr>
                        <th>No</th>
                        <th>Judul Bahan Ajar</th>
                        <th>Dosen Ketua</th>
                        <th colspan="9">Dosen Anggota</th>
                        <th>Jurusan</th>
                        <th>Prodi</th>
                        <th>Tahun</th>
                        <th width="280px">Action</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     @foreach ($bahanajars as $bahanajar)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $bahanajar->judul_bahanajar }}</td>
                        <td>{{ $bahanajar->dosen_ketua }}</td>
                        <td>{{ $bahanajar->dosen_anggota1 }}</td>
                        <td>{{ $bahanajar->dosen_anggota2 }}</td>
                        <td>{{ $bahanajar->dosen_anggota3 }}</td>
                        <td>{{ $bahanajar->dosen_anggota4 }}</td>
                        <td>{{ $bahanajar->dosen_anggota5 }}</td>
                        <td>{{ $bahanajar->dosen_anggota6 }}</td>
                        <td>{{ $bahanajar->dosen_anggota7 }}</td>
                        <td>{{ $bahanajar->dosen_anggota8 }}</td>
                        <td>{{ $bahanajar->dosen_anggota9 }}</td>
                        <td>{{ $bahanajar->namjur }}</td>
                        <td>{{ $bahanajar->nampro }}</td>
                        <td>{{ $bahanajar->tahun }}</td>
                        <td>
                            
        
                            <a class="btn btn-minier btn-purple" href="{{ route('bahanajar.edit',$bahanajar->id) }}">Edit</a>


                            {!! Form::open(['method' => 'DELETE','route' => ['bahanajar.destroy', $bahanajar->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-minier btn-purple']) !!}
                            {!! Form::close() !!}
                            
                        </td>


                    </tr>
                  @endforeach
                
                </table>
              </div>
            </div>
          </div>
         </div>
        </div>
      </div>
     </div>
@endsection
