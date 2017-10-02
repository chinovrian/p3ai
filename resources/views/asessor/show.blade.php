@extends('layouts.index')

@section('content')
<div class="container">
<div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-default">
          <div class="panel-heading"><h4>Asessor Management</h4></div>
          
    <div class="panel-body">
          <div class="panel-body">
            <a class="btn btn-primary" href="{{ route('asessor.edit',$asessor->id) }}">Edit</a>
            <a class="btn btn-primary" href="{{ route('asessor.index') }}"> Back</a>
          </div>
    {!! Form::model($asessor, ['method' => 'patch','route' => ['asessor.show', $asessor->id]]) !!}
    <div class="profile-user-info profile-user-info-striped">
    	   <div class="col-md-3 col-sm-3 col-xs-6" >
                <div class="profile-info-value">
                   
                    <img style="width: 100%" src="{{Storage::url($asessor->foto)}}"/>
                    
                </div>
            </div>

        <div class="col-md-9 col-sm-9 col-xs-9">
            <div class="profile-info-row">
                <div class="profile-info-name">Nip Asessor</div>
                <div class="profile-info-value">{{ $asessor->nip_asessor}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Nama Asessor </div>
                <div class="profile-info-value">{{ $asessor->nama_asessor}}
                    
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Jurusan</div>
               
                <div class="profile-info-value">{{ $asessor->namajur}}
                </div>
               
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Alamat </div>

                <div class="profile-info-value">{{$asessor->alamat_asessor}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> E-Mail</div>

                <div class="profile-info-value">{{ $asessor->email_asessor}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Telepon</div>

                <div class="profile-info-value">{{ $asessor->telepon}}
                </div>
            </div>
        </div>
        
{!! Form::close() !!}
    </div>
     <div class="profile-info-row">
    </div>
    </div>
    </div>
    </div>

        </div>
    </div>
@endsection