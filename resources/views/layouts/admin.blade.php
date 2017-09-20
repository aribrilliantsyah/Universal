<!DOCTYPE html>
<html>
<head>
<title>Menu Admin</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{{ asset('favicon.png') }}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/font.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/li-scroller.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/jquery.fancybox.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/sweetalert.css')}}">

<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="/home"><span class="fa fa-user desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <li><a href="/home">dashboard</a></li>
          @role('admin')
          <li><a href="{{route('konten.index')}}">Konten</a></li>
          @endrole
          <li><a href="{{route('tentang.index')}}">Tentang Kami</a>
          </li>
          <li><a href="/berita">Berita</a></li>
          <li><a href="/acara">Acara</a></li>
          <li><a href="{{ url('/logout') }}" class="btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          </li>
        </ul>
        
      </div>
    </nav>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
        @yield('content')
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>{{ Auth::user()->name }}</span></h2>
            <ul class="business_catgnav">
                <li>
                  <figure class="bsbig_fig  wow fadeInDown">
                    <figcaption>
                    <center>
                    <p><i class="fa fa-send"></i> : {{ Auth::user()->email }}</p>
                    </center>
                    </figcaption>
                  </figure>
                </li>
              </ul>
          </div>                   
        </aside>
      </div>
    </div>
  </section>
</div>
<script src="{{asset('/js/jquery.min.js')}}"></script> 
<script src="{{asset('/js/wow.min.js')}}"></script> 
<script src="{{asset('/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('/js/slick.min.js')}}"></script> 
<script src="{{asset('/js/jquery.li-scroller.1.0.js')}}"></script> 
<script src="{{asset('/js/jquery.newsTicker.min.js')}}"></script> 
<script src="{{asset('/js/jquery.fancybox.pack.js')}}"></script> 
<script src="{{asset('/js/custom.js')}}"></script>
<script src="{{asset('/js/sweetalert.min.js')}}"></script>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
    @yield('js')
CKEDITOR.editorConfig = function( config ) {
  config.toolbar = [
    { name: 'document', items: [ 'Source', '-', 'Save', 'Preview', 'Print'] },
    { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
    { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
    '/',
    { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript' ] },
    { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
    { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
    { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak' ] },
    '/',
    { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
    { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
    { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
    { name: 'about', items: [ 'About' ] }
  ];
};
</script>
@include('sweet::alert')
@include('plugin.delete')

</body>
</html>