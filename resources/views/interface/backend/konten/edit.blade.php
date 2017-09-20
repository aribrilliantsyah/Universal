@extends('layouts.admin')
@section('content')
<div class="single_post_content">
            <h2><span>Ubah Konten</span></h2>
            <div class="single_post_content">
            <div class="panel panel-default" style="border-radius: 5px;">
            <div class="panel panel-body" style="border-radius: 5px;">
            <div class="col-md-12">
            {!! Form::model($konten, ['url' => route('konten.update', $konten->id),
            'method'=>'put', 'class'=>'form-horizontal','files'=>'true']) !!}
              <div class="form-group">
                <label for="">Logo </label>
                  @if(isset($konten) && $konten->logo)
                  <p>
                  {!! Html::image(asset('img/'.$konten->logo),null,['style'=>'width: 40px;height: 45px;']) !!}
                  </p>
                  @endif
                  {!! Form::file('logo',['class'=>'btn-md-2 btn-theme']) !!}
                  {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}              
              </div>
              <div class="form-group">
                <label for="">Nama Intansi </label>
                {!! Form::text('name',null,['class'=>'form-control']) !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
              </div>
              <div class="form-group">
                <label for="">Alamat </label>
                {!! Form::textarea('alamat',null,['class'=>'form-control']) !!}
                {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
              </div>
              <div class="form-group">
                <label for="">Email </label>
                {!! Form::email('email',null,['class'=>'form-control']) !!}
                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
              </div>
              <div class="form-group">
                <label for="">No.Tlp </label>
                {!! Form::text('no_tlp',null,['class'=>'form-control']) !!}
                {!! $errors->first('no_tlp', '<p class="help-block">:message</p>') !!}
              </div>
              <div class="form-group">
                {{ Form::button('<i class="fa fa-save"></i> Simpan', ['type' => 'submit', 'class' => 'btn btn-theme btn-xm'] )  }}
                {{ Form::button('<i class="fa fa-refresh"></i> Reset', ['type' => 'reset', 'class' => 'btn btn-warning btn-xm'] )  }}
              </div>
            {!! Form::close() !!}
            </div>
            </div>
            </div>
            </div>
</div>
@endsection