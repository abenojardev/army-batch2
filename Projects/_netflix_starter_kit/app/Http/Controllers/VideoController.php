<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Redirect, Storage;

class VideoController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    
    public function index()
    {
        return view('admin.index')->with([
            'data' => Video::all()
        ]);
    }
    
    public function create()
    {
        return view('admin.create');
    }

    public function create_save()
    {   
        $filename = rand(000000,9999999).'_'.strtotime(date('Y-m-d')).'.mp4';

        $this->request->merge([
            'banner' =>  Storage::disk('public')->putFile('banners', $this->request->file1),
            'video' =>  Storage::disk('public')->putFileAs('videos', $this->request->file2, $filename)
        ]);

        Video::create(
            $this->request->except('_token', 'file1', 'file2')
        );

        return Redirect::route('admin');
    }

    public function update($id)
    {
        return view('admin.update')->with([
            'data' => Video::find($id)
        ]);
    }

    public function update_save($id)
    {
        if($this->request->has('file1')){  
            $this->request->merge([
                'banner' =>  Storage::disk('public')->putFile('banners', $this->request->file1)
            ]);
        } 

        if($this->request->has('file2')){ 
            $filename = rand(000000,9999999).'_'.strtotime(date('Y-m-d')).'.mp4';

            $this->request->merge([ 
                'video' =>  Storage::disk('public')->putFileAs('videos', $this->request->file2, $filename)
            ]);  
        }

        Video::find($id)->update(
            $this->request->except("_token")
        );

        return Redirect::route('admin');
    } 
}
