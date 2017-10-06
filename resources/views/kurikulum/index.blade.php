@extends('layouts.indexx')
 
@section('content')
<div class="page-content">
  <div class="row">
    <div class="page-header">
        <h1>Tables
            <small><i class="ace-icon fa fa-angle-double-right"></i>
                Kurikulum
            </small>
        </h1>
    </div><!-- /.page-header -->
    <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kurikulum.create') }}"> Add Kurikulum</a>
        </div>


    <form class="form" method="GET" action="{{route('kurikulum.index')}}">
        <div style="margin-left: 10px; width:30%;" class="input-group">
            <div class="pull-left">
                <div class="pos-rel">
                    {!! Form::select('prodi', $prodi, array('class' => 'form-control')) !!}
                </div>
            </div>

        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i>
            </button>
        </span>
        <span style="margin-left: 20px;" class="input-group-btn">
            <a style="margin-left: 10px;" type="submit" name="search" id="search-btn" class="btn-default" 
            href="{{route('kurikulum.index')}}"><i class="glyphicon glyphicon-refresh"></i></a>
        </span>
    </div>
    </form>

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
                        <th>Kode</th>
                        <th>Matakuliah</th>
                        <th>Judul</th>
                        <th>SKS</th>
                        <th>Jam/Minggu</th>
                        <th>Jurusan</th>
                        <th>Prodi</th>
                        <th>Semester</th>
                        <th>Tahun</th>
                      
                        <th>Rps</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($kurikulums as $key => $kurikulum)
                    <tr>             
                        <td>{{ $kurikulum->kd }}</td>
                        <td>{{ $kurikulum->matakuliah}}</td>
                        <td>{{ $kurikulum->judul_kurikulum }}</td>
                        <td>{{ $kurikulum->sks }}</td>
                        <td>{{ $kurikulum->jam }}</td>
                        <td>{{ $kurikulum->namjur}}</td>
                        <td>{{ $kurikulum->nampro }}</td>
                        <td>{{ $kurikulum->smt }}</td>
                        <td>{{ $kurikulum->th }}</td>
                        <td><a href="storage/{{$kurikulum->rps}}"> {{ $kurikulum->rps }}</a></td>

                        <td>
                            
        
                            <a class="btn btn-minier btn-purple" href="{{ route('kurikulum.edit',$kurikulum->id) }}">Edit</a>


                            {!! Form::open(['method' => 'DELETE','route' => ['kurikulum.destroy', $kurikulum->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-minier btn-purple']) !!}
                            {!! Form::close() !!}
                            
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
