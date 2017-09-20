@extends('layouts.admin')
@section('content')  
@foreach($tentang as $data)
         <div class="single_post_content">
            <h2><span>Tentang Kami</span></h2>
            <div class="single_post">
            <a class="btn btn-theme" href="{{route('tentang.edit',$data->id)}}"><i class="fa fa-pencil-square"></i> Ubah Data</a></br></br>
            <h4>Tentang Organisasi <a data-toggle="collapse" href="#collapse1"><i class="fa fa-caret-down"></i></a></h4>
            <div id="collapse1" class="panel-collapse collapse">
            <div class="single_page_content">
            <p>{!! $data->tentang !!}</p>
            </div>
            </div>
            <hr></br>
            <h4>Sejarah <a data-toggle="collapse" href="#collapse2"><i class="fa fa-caret-down"></i></a></h4>
            <div id="collapse2" class="panel-collapse collapse">
            <div class="single_page_content"> 
              <p>{!! $data->sejarah !!}</p>
            </div>
            </div>
            <hr></br>
            <h4>Visi&Misi <a data-toggle="collapse" href="#collapse3"><i class="fa fa-caret-down"></i></a></h4>
            <div id="collapse3" class="panel-collapse collapse">
            <div class="single_page_content">
            <h4>Visi</h4>
              <p>{!! $data->visi !!}</p>
            <h4>Misi</h4>
             <p>{!! $data->misi !!}</p>
            </div>
            </div>
            <hr></br>
            <h4>Tujuan <a data-toggle="collapse" href="#collapse4"><i class="fa fa-caret-down"></i></a></h4>
            <div id="collapse4" class="panel-collapse collapse">
            <div class="single_page_content">
              <p>{!! $data->tujuan !!}</p>
            </div>
            </div>
            </div>
          </div>
@endforeach          
@endsection