<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
<link rel="stylesheet" type="text/css" href="{{ url(elixir('css/all.css'))}}">
<script type="text/javascript">
var baseUrl = "{{url('/')}}";
</script>

    <style>

        body {
            font-family: 'Lato';
            background-color:orange;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

</head>
<body id="app-layout" style="font-family: 'Droid Serif', serif;" >

 <div class="menu">
      
      <!-- Menu icon -->
      <p class="icon-close" style="color:white;">
        &times
      </p>

      <!-- Menu -->
      <ul>
        <li><a href="{{url('gallery/list')}}">My Gallery</a></li>
        <li><a href="#">Friends Gallery</a></li>
        <li><a href="#">Recent Uploads</a></li>
        <li><a href="#">Help</a></li>
      </ul>
    </div>

    <!-- Main body -->


      <div class="icon-menu">
        <i class="fa fa-bars"></i>
        Menu
      </div>
      <!-- Carousel -->
        <div id="carousel1" class="carousel slide carousel-fade hoverable" class="col-md-3" class="pull-right">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active">
                </li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner z-depth-2" role="listbox">

                <!-- First slide -->
                <div class="item active">
                    <div class="view overlay hm-blue-slight">
                        <a><img src="http://mdbootstrap.com/images/slides/slide%20(7).jpg" class="img-responsive" alt="slide1">
                            <div class="mask waves-effect waves-light"></div>
                        </a>
                        <div class="carousel-caption hidden-xs">
                            <div class="animated fadeInDown">
                                <h5> Welcome {{ Auth::user()->name}} in your GalleryZone</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.item -->

                <!-- Second slide -->
                <div class="item">
                    <div class="view overlay hm-blue-slight">
                        <a><img src="http://mdbootstrap.com/images/slides/slide%20(23).jpg" class="img-responsive" alt="slide2">
                            <div class="mask waves-effect waves-light"></div>
                        </a>
                        <div class="carousel-caption hidden-xs">
                            <div class="animated fadeInDown">
                                <h5> Welcome {{ Auth::user()->name}} in your GalleryZone</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.item -->

                <!-- Third slide -->
                <div class="item">
                    <div class="view overlay hm-blue-slight">
                        <a><img src="http://mdbootstrap.com/images/slides/slide%20(2).jpg" class="img-responsive" alt="slide3">
                            <div class="mask waves-effect waves-light"></div>
                        </a>
                        <div class="carousel-caption hidden-xs">
                            <div class="animated fadeInDown">
                                <h5> Welcome {{ Auth::user()->name}} in your GalleryZone</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.item -->

            </div>
            <!-- /.carousel-inner -->

            <!-- Controls -->
            <a class="left carousel-control new-control" href="#carousel1" role="button" data-slide="prev">
                <span class="fa fa fa-angle-left waves-effect waves-light"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control new-control" href="#carousel1" role="button" data-slide="next">
                <span class="fa fa fa-angle-right waves-effect waves-light"></span>
                <span class="sr-only">Previous</span>
            </a>

        </div>
        <!-- /.carousel -->
      <script type="text/javascript" src="{{url(elixir('js/all.js'))}}"></script>
    
</body>
</html>