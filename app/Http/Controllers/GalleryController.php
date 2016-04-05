<?php
namespace App\Http\Controllers;
use App\Gallery;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image ;
class GalleryController extends Controller
{
	
public function viewAllGalleryList()
	{
		$galleries=Gallery::orderBy('created_at','desc')->get();
		
		 
      return view('gallery.gallery_all')
      ->with('galleries',$galleries);
      
	}

	public function viewGalleryList()
	{
		$galleries=Gallery::where('created_by',Auth::user()->id)->orderBy('created_at','desc')->get();
      return view('gallery.gallery')
      ->with('galleries',$galleries);
     
	}
	public function saveGallery(Request $request)
	{
		//validate request
		$validator=Validator::make($request->all(),[
         'gallery_name' => 'required|min:3',
			]);
		//take actions when validation fail
		if($validator->fails()){
			return redirect('gallery/list')
			->withErrors($validator)
			->withInput();
		}
      $gallery = new Gallery;
      //save a gallery
      $gallery->name = $request->input('gallery_name');
      $gallery->created_by =Auth::user()->id;
      $gallery->published_by = Auth::user()->name;
      $gallery->save();
      return redirect()->back();
	}
	public function viewGalleryPics($id)
	{
		$gallery = Gallery::findOrFail($id);
		return view('gallery.gallery-view')
		->with('gallery',$gallery);

	}
	public function doImageUpload(Request $request)
	{
    //get file from post request
		$file =$request->file('file');
		//set file name
		$filename = uniqid().$file->getClientOriginalName();
		//move file to correct location
		//thumb creation
		//firstly check whether folder made
		if(!file_exists('gallery/images')){
			mkdir('gallery/images',0777,true);
		}
		$file->move('gallery/images',$filename);


		if(!file_exists('gallery/images/thumbs')){
			mkdir('gallery/images/thumbs',0777,true);
		}

		$thumb = Image::make('gallery/images/'.$filename)->resize(160,160)->save('gallery/images/thumbs/'.$filename,60);
		//save the image detail into database
		$gallery= Gallery::find($request->input('gallery_id'));
		$image = $gallery->images()->create([
			'gallery_id' => $request->input('gallery_id'),
			'file_name' => $filename,
			'file_size' => $file->getClientSize(),
			'file_mime' => $file->getClientMimeType(),
			'file_path' => 'gallery/images/'.$filename,
			'created_by' => Auth::user()->id,



			]);
		return $image;


  	}
  	public function deleteGallery($id)
  	{
  		//load gallery
  		$currentGallery = Gallery::findOrFail($id);
  		//check ownership
  		if($currentGallery->created_by!=Auth::user()->id)
       {
       
       	return redirect()->back();
       }
       $images = $currentGallery->images();
       //delete the images
       foreach($currentGallery->images as $image){
       	unlink(public_path($image->file_path));
       	unlink(public_path('gallery/images/thumbs/'.$image->file_name));
       }
       //delete the db records
       $currentGallery->images()->delete();
       $currentGallery->delete();
       return redirect()->back();
  	}

}