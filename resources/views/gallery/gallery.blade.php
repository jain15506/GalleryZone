@extends('layouts.app')
@section('content')


      
           
<div class="container-fluid">
  <div class="row" style="background-color:yellow;border:solid white 20px;" >
  <div  class="  col-md-12 "  >
  
      
    
     
   
          
         <div  class="  col-md-2 "  >
        
        <img  src="{{asset('gallery/images/mygallery.jpg')}}"  style="height:430px;width:400px;border-radius:50%;border:solid white 10px;" >
 
 </div>
     
 <div  class=" col-md-offset-2  col-md-6 col-md-offset-2 "  >
  <h3 style="font-family: 'Great Vibes',cursive;color:black;padding:10px;font-size:40px;"> Let's Add Something New to Our Gallery ... :)</h3>
 <form  method="POST" action="{{url('gallery/save')}}">
          
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row" style="background-color:rgb(120,0,0);">
      
        <div class="input-field col-md-9" style="font-size:40px;">
 
           <br>
           <input type="text" class="form-control"   name="gallery_name">

          <label style="color:white;">Add New Gallery Name</label>
           
          <h1>
       <button class="btn  btn-success btn-lg" style="color:black;"><h1><b>Click To Add New Gallery</b></h1></button>
     </h1>
     
     
    
        </div>
       
      

    </form>
  
  

   @if(count($errors)>0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $errors)
          <li>{{ $errors }}</li>
          @endforeach
             </ul>
         </div>
         @endif


    </div>
</div>
</div>
</div>

       
       
     </div>
   
        
   
    <div class="col-md-12" style="color:white;">

@if ($galleries->count() >0)
            
       <center>     <h1 style="padding:20px;background-color:#4d3319;border:solid 5px white;color:white">  GalleryZone  </h1> </center>
                   @foreach($galleries as $gallery)
                    <div class="head_container" style="color:black;">
                    
                    <div class="head"  style="background-color:#e6ccb3;color:black;">
                      <a class="pull-right" href="{{url('gallery/delete/'.$gallery->id)}}">
                        <i style="color:black;font-size:30px;"class="material-icons">&times</i></a>
                        <span class="badge purple pull-left" style="font-size:20px;">
                                {{ $gallery->images()->count()}} </span><center><h1 style="font-family: 'Great Vibes',cursive;font-size:40px;color:black;">{{$gallery->name}}</h1></center>
                        <center><h3 class="head_black"> Gallery Name :{{$gallery->name}}<h3> </center>
                        <center>  <h3 class="head_black"> Created At : {{$gallery->created_at}}</h3></center>
   <center> <h3 class="head_black"> Published By : {{$gallery->published_by}}</h3></center><center><a href="{{url('gallery/view/'.$gallery->id)}}"><button type="button" style="color:white;" class="btn btn-info btn-lg">View</button></a></center>
    
                           </div>
    </div>
   



                  
                    @endforeach
              
            @endif
        </div>
      </div>
<
      </div>  


@endsection