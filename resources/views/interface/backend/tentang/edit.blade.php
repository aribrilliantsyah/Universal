@extends('layouts.admin')
@section('content')  


         <div class="single_post_content">
            <h2><span>Tentang Kami</span></h2>
            <div class="single_post">
            
            {!! Form::model($tentang, ['url' => route('tentang.update', $tentang->id),
            'method'=>'put', 'class'=>'form-horizontal','files'=>'true']) !!}
            {{ Form::button('<i class="fa fa-save"></i> Simpan', ['type' => 'submit', 'class' => 'btn btn-theme btn-xm'] )  }}
            {{ Form::button('<i class="fa fa-refresh"></i> Reset', ['type' => 'reset', 'class' => 'btn btn-warning btn-xm'] )  }}</br></br>
            <h4>Tentang Organisasi <a data-toggle="collapse" href="#collapse1"><i class="fa fa-caret-down"></i></a></h4>
            <div id="collapse1" class="panel-collapse collapse">
            <div class="single_page_content">
            <p>{!! Form::textarea('tentang',null,['class'=>'form-control']) !!}
               {!! $errors->first('tentang', '<p class="help-block">:message</p>') !!}</p>
            </div>
            </div>
            <hr></br>
            <h4>Sejarah <a data-toggle="collapse" href="#collapse2"><i class="fa fa-caret-down"></i></a></h4>
            <div id="collapse2" class="panel-collapse collapse">
            <div class="single_page_content"> 
              <p>{!! Form::textarea('sejarah',null,['class'=>'form-control']) !!}
                 {!! $errors->first('sejarah', '<p class="help-block">:message</p>') !!}</p>
            </div>
            </div>
            <hr></br>
            <h4>Visi&Misi <a data-toggle="collapse" href="#collapse3"><i class="fa fa-caret-down"></i></a></h4>
            <div id="collapse3" class="panel-collapse collapse">
            <div class="single_page_content">
            <h4>Visi</h4>
              <p>{!! Form::textarea('visi',null,['class'=>'form-control']) !!}
                 {!! $errors->first('visi', '<p class="help-block">:message</p>') !!}
              </p>
            <h4>Misi</h4>
             <p>{!! Form::textarea('misi',null,['class'=>'form-control']) !!}
                {!! $errors->first('misi', '<p class="help-block">:message</p>') !!}
            </p>
            </div>
            </div>
            <hr></br>
            <h4>Tujuan <a data-toggle="collapse" href="#collapse4"><i class="fa fa-caret-down"></i></a></h4>
            <div id="collapse4" class="panel-collapse collapse">
            <div class="single_page_content">
              <p>{!! Form::textarea('tujuan',null,['class'=>'form-control']) !!}
                {!! $errors->first('tujuan', '<p class="help-block">:message</p>') !!}
            </p>
            </div>
            </div>
            </div>
            {!! Form::close() !!}
          </div>
      
@endsection
@section('js')
CKEDITOR.replace('tentang', options);
CKEDITOR.replace('sejarah', options);
CKEDITOR.replace('visi', options);
CKEDITOR.replace('misi', options);
CKEDITOR.replace('tujuan', options);

@endsection