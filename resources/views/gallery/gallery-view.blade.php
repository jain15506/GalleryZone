@extends('layouts.app')
@section('content')
<style type="text/css">
#gallery-images img{
	width:140px;
	height:140px;
	border:2px solid black;
    margin-bottom:10 px;
    
}
#gallery-images ul{
	margin:0;
	padding:0;
}
#gallery-images li{
	margin:0;
	padding:10px;
	list-style:none;
	float:left;
	
}
</style>
<div class="row">
	<div class="col-md-12">
		<h1 style="font-family: 'Great Vibes', cursive;color:white">{{$gallery->name}}</h1>
		
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div id="gallery-images" >
			<ul >
				@foreach ($gallery->images as $image)

				<li >
					<a href="{{ url($image->file_path)}}" data-lightbox="mygallery">
						<img src="{{ url('/gallery/images/thumbs/'.$image->file_name)}}">
					</a>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
						

	<div class="col-md-12">
		<a href="{{url('gallery/list')}}" class="" style="color:orange;">Back</a>
	</div>
	<!-- Trigger the modal with a butsston -->
<button type="button" class="btn btn-primary btn-lg"  style="color:black;font-size:30px;" data-toggle="modal" data-target="#myModal">Click to add New Image</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content black">
      <div class="modal-header " style="font-size:40px;color:white;">
        <button type="button" class="close" data-dismiss="modal" style="font-size:40px;color:white;" onClick="window.location.reload();" >&times;</button>
        <h4 class="modal-title black" style="background-color:black;font-size:60px;">Upload Image</h4>
      </div>
      <div class="modal-body red" >
        <div class="row" >
	<div class="col-md-12">
<form  action="{{ url('image/do-upload')}}"
class="dropzone" id="addImages" >
{{  csrf_field()  }}
<input type="hidden" name="gallery_id" value="{{ $gallery->id}}">
</form>


	</div>

</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default"  onClick="window.location.reload();" data-dismiss="modal">Done</button>
      </div>
    </div>

  </div>
</div>
</div>
@endsection