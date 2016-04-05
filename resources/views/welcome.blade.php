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
            
            background-image:url("/gallery/images/register.jpg");

-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
           font-size:30px;
           font-family: 'Great Vibes',cursive;
        }
        #panel, #title{
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 40px;
    display: none;
}
  .container{
    margin-top:600px;

  }
  
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>

<body>
 

  




    <!-- Main body -->

 @if (Auth::guest())
     
    <ul>
      <li class="fix_nav"><a href="{{ url('/login') }}">   <button >Login</button></a></li>
        
     

                        
                          <li class="fix_nav">  <a href="{{ url('/register') }}"> <button>      <i class="fa fa-btn fa-user"></i>Register
                                </button></a></li>
                 </ul>           
        
        @else
        <div class="top" style="list-style: none;">
                        <li class="dropdown"  >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" style="font-size:30px;background-color:black;color:white;" >
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                <li><a href="{{ url('/gallery/list') }}">My Gallery</a></li>
                                <li><a href="{{ url('/gallery/list_all') }}">Friends Gallery</a></li>
                            </ul>
                        </li>
                      </div>
                    @endif
         <div id="title" style="font-size:80px;">Welcome to Galleryzone</div>




    <script type="text/javascript" src="{{url(elixir('js/all.js'))}}"></script>
    <div class="row">
      <div calss="col-md-12">
        <div class="col-md-offset-4 col-md-4 col-md-offset-4">
 <img style="border:solid black 8px;border-radius:50%;margin-top:50px;"class="css" src="{{asset('gallery/images/mygallery_left1.jpg')}}"/> 
</div>
</div>
</div>
</body>
</html>