@extends('layouts.index')
 
@section('content')
<div class="page-content">
  <div class="row">
    <div class="page-header">
        <h1>Tables
            <small><i class="ace-icon fa fa-angle-double-right"></i>
                RPS
            </small>
        </h1>
        <div class="pull-right">
                <a class="btn btn-success" href="{{ route('rps.create') }}"> Create New RPS</a>
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
                        <th>Matakuliah</th>
                        <th>Dosen Pengampu</th>
                        <th>Jurusan</th>
                        <th>Prodi</th>
                        <th>Tahun</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($rpss as $key => $rps)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $rps->matakuliah }}</td>
                        <td>{{ $rps->dosen_pengampu }}</td>
                        <td>{{ $rps->namjur}}</td>
                        <td>{{ $rps->nampro }}</td>
                        <td>{{ $rps->tahun }}</td>
                        <td>
                            
        
                            <a class="btn btn-minier btn-purple" href="{{ route('rps.edit',$rps->id) }}">Edit</a>


                            {!! Form::open(['method' => 'DELETE','route' => ['rps.destroy', $rps->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-minier btn-purple']) !!}
                            {!! Form::close() !!}
                            
                            <a class="btn btn-minier btn-purple" href="storage/{{$rps->file_rps}}" download="{{$rps->file_rps }}">Download </a>
                        </td>


                    </tr>
                  @endforeach
                </table>
              </div>
    {!! $rpss->render() !!}
            </div>
          </div>
         </div>
        </div>
      </div>
     </div>
@endsection
