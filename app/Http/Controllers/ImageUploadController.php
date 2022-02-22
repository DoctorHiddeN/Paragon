<?php
  
namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\artimages;
use Illuminate\Http\Request;
  
class ImageUploadController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload()
    {
        return view('imageUpload');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
            // ensure the request has a file before we attempt anything else.
            if ($request->hasFile('file')) {
    
                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png', // Only allow .jpg, .bmp and .png file types.
                    'alt'=>'required'
                ]);
    
                // Save the file locally in the storage/public/ folder under a new folder named /product
                $request->file->store('product', 'public');
    
                // Store the record, using the new file hashname which will be it's new filename identity.
            $artimages = new artimages([
                "name" => $request->get('name'),
                "alt"=>$request->get('alt'),
                "flag"=>0,
                "address" => $request->file->hashName(),
                // "articles_id"=>$articles->id
            ]);
                $artimages->save(); // Finally, save the record.
            }
    
            return back();
    
        }
}
// $artimages = new artimages([
//     "name" => $request->get('name'),
//     "alt"=>$request->get('alt'),
//     "flag"=>0,
//     "address" => $request->file->hashName(),
//     "articles_id"=>$articles->id
// ]);