@extends('layouts.index')
 
@section('content')
<div class="page-content">
  <div class="row">
    <div class="page-header">
        <h1>Tables
            <small><i class="ace-icon fa fa-angle-double-right"></i>
                Kurikulum
            </small>
        </h1>
        <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kurikulum.create') }}"> Add Kurikulum</a>
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
                        <th>Judul Kurikulum</th>
                        <th>Jurusan</th>
                        <th>Prodi</th>
                        <th>Tahun</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($kurikulums as $key => $kurikulum)
                    <trkurikulum                        <td>{{ ++$i }}</td>
                        <td>{{ $kurikulum->judul_kurikulum }}</td>
                        <td>{{ $kurikulum->namjur}}</td>
                        <td>{{ $kurikulum->nampro }}</td>
                        <td>{{ $kurikulum->tahun }}</td>
                        <td>
                            
        
                            <a class="btn btn-minier btn-purple" href="{{ route('kurikulum.edit',$kurikulum->id) }}">Edit</a>


                            {!! Form::open(['method' => 'DELETE','route' => ['kurikulum.destroy', $kurikulum->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-minier btn-purple']) !!}
                            {!! Form::close() !!}
                            
                            <a class="btn btn-minier btn-purple" href="storage/{{$kurikulum->file_kurikulum}}" download="{{$kurikulum->file_kurikulum }}">Download </a>
                        </td>


                    </tr>
                  @endforeach
                </table>
              </div>
    {!! $kurikulums->render() !!}
            </div>
          </div>
         </div>
        </div>
      </div>
     </div>
@endsection
