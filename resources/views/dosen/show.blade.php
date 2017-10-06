@extends('layouts.indexx')

@section('content')
<div class="container">
<div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-default">
          <div class="panel-heading"><h4>Detail</h4></div>
        
    <div class="panel-body">
          <div class="panel-body">
             
            <a class="btn btn-primary" href="{{ route('dosen.edit',[$dosen->id]) }}">Edit</a>
            <br/>

   
            <div class="col-xs-3 col-sm-3 center">
                <div class="profile-info-value">
                    <img style="width: 100%" src="{{Storage::url($dosen->foto)}}"/>
                </div>
            </div>

          </div>
   
    <div class="col-xs-12 col-sm-9">
    <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                <div class="profile-info-name">No Sertifikat</div>
                <div class="profile-info-value">{{ $dosen->no_sertifikat}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name">Nip Dosen</div>
                <div class="profile-info-value">{{ $dosen->nip_dosen}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Nama Dosen </div>
                <div class="profile-info-value">{{ $dosen->nama_dosen}}</div>
            </div>


            <div class="profile-info-row">
                <div class="profile-info-name"> Nama Perguruan Tinggi </div>
                <div class="profile-info-value">{{ $dosen->nama_pt}}</div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Alamat Perguruan Tinggi </div>
                <div class="profile-info-value">{{ $dosen->alamat_pt}}</div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Jurusan</div>
                <div class="profile-info-value">{{ $dosen->namjur}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Program Studi</div>
                <div class="profile-info-value">{{ $dosen->nampro}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Jabatan Fungsional</div>
                <div class="profile-info-value">{{ $dosen->jab_fungsional}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Golongan</div>
                <div class="profile-info-value">{{ $dosen->gol}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Tempat,Tanggal Lahir</div>
                <div class="profile-info-value">{{ $dosen->tempat_lahir}}/{{$dosen->tanggal_lahir}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Pendidikan S1</div>
                <div class="profile-info-value">{{ $dosen->pend_s1}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Pendidikan S2</div>
                <div class="profile-info-value">{{ $dosen->pend_s2}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Pendidikan S3</div>
                <div class="profile-info-value">{{ $dosen->pend_s3}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Jenis</div>
                <div class="profile-info-value">{{ $dosen->jenis}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Bidang Ilmu</div>
                <div class="profile-info-value">{{ $dosen->bdg_ilmu}}
                </div>
            </div>


            <div class="profile-info-row">
                <div class="profile-info-name"> Alamat </div>

                <div class="profile-info-value">{{$dosen->alamat_dosen}}
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> E-Mail</div>

                <div class="profile-info-value">{{ $dosen->email}}</div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Telepon</div>

                <div class="profile-info-value">{{ $dosen->telepon}}
                </div>
            </div>

        </div>

       
        

    </div>
     <div class="profile-info-row">
    </div>
    </div>
    </div>
    </div>

        </div>
    </div>
@endsection