@extends('layouts.admin')
@section('content')
@foreach($konten as $data)
<div class="single_post_content">
            <h2><span>Konten</span></h2>
            <div class="single_post_content">
            <a class="btn btn-theme" href="{{route('konten.edit',$data->id)}}"><i class="fa fa-pencil-square"></i> Ubah Data</a>
            <div class="panel panel-default" style="border-radius: 5px;">
            <div class="panel panel-body" style="border-radius: 5px;">
              <table class="table">
                <tr>
                	<th>Konten</th>
                	<th>Isi</th>
                </tr>
              	<tr>
              		<td>Logo</td>
              		<td><img src="{{asset('/img/'.$data->logo)}}" style="width: 40px;height: 45px;"></td>
              	</tr>
              	<tr>
              		<td>Nama Intansi</td>
              		<td>{!! $data->name !!}</td>
              	</tr>
              	<tr>
              		<td>Alamat</td>
              		<td>{!! $data->alamat !!}</td>
              	</tr>
              	<tr>
              		<td>Email</td>
              		<td>{!! $data->email !!}</td>
              	</tr>
              	<tr>
              		<td>No.Tlp</td>
              		<td>{!! $data->no_tlp !!}</td>
              	</tr>
              </table>
            </div>
            </div>
            </div>
</div>
@endforeach
@endsection