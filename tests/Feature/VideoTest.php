<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VideoTest extends TestCase
{
	public function setUp() {
		parent::setUp();
		//$user = User::where('email', 'leo@wwe-test.dev');
	}
	
	public function test_video_upload() {
	    
	    Storage::fake('videos');
	    
	    $response = $this->json('POST', '/video/upload', [
            'video' => UploadedFile::fake()->create('video.mp4', '1024')
        ]);
	   
	   // Assert the file was stored...
        Storage::disk('videos')->assertExists('video.mp4');
        		    
    }
    
    public function test_missing_video() {
    
    	  $response = $this->json('POST', '/video/upload', [
            'video' => UploadedFile::fake()->create('video.mp4', '1024')
        ]);
        
	  Storage::disk('videos')->assertMissing('video.mp4');    
    }
}
