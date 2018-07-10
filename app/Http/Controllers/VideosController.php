<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Videos;
use Storage, Validator;
use Illuminate\Http\Request;

class VideosController extends Controller
{
	
    protected $user;
    
    public function __construct() {
	    
    }
   
    public function store( Request $request ) {

    	if( $request->file('video')->isValid() && Validator::make($request->all(), [ 'video' => 'required|mime:mp4' ] ) ) {

    		//$request->file('video')->getClientOriginalExtension();
    		//var_dump( $request->file('video')->contents());
    		var_dump( $this->getUserDir() );

    		Storage::putFileAs('/public/uploads' . $this->getUserDir() . '/' . $this->getType( $request->file('video')->getClientOriginalExtension() ), $request->file('video'), $request->input('filename'), $request->file('video')->getClientOriginalExtension() );
    		//Storage::disk('public')->put( $request->file( 'video' ), $request->file('video')->getClientOriginalName() );

	    	/*Videos::create([
	    		'user_id' => $user_id,
	    		'file_size' => 
	    	]);*/

	    } else {

	    	//file is not supported
	    
	    }

    }
}
