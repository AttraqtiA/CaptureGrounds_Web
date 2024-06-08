<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postingan = Post::all();
        $field = Field::all();
        return view('customer.View_Recruitment',['posts'=>$postingan, 'fields'=>$field]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $field = Field::all();
        return view('customer.Create_Recruitement',['fields'=>$field]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'title'=>'required|max:255',
            'minimumPrice'=> 'required|integer',
            'maximumPrice'=> 'required|integer',
            'description'=>'required|string',
            'location'=>'required|string',
            'field_id'=>'required|integer',
            'image'=>'image'
        ]);
        if($request->file('image')){
            $validateData['image'] =$request->file('image')->store('images',['disk' => 'public']);
            Post::create([
                'title'=> $validateData['title'],
                'minimumPrice'=> $validateData['minimumPrice'],
                'maximumPrice'=> $validateData['maximumPrice'],
                'description'=>  $validateData['description'],
                'location'=>  $validateData['location'],
                'field_id'=>  $validateData['field_id'],
                'image'=>  $validateData['image'],
                'user_id'=> Auth::id()
            ]);
        }
        return redirect()->route('View_Recruitment');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post){
        $ServiceEdit = Post::where('id',$post->id)->first();
        return view('worker.edit_service',['Recruitment' => $post]);
    }
    public function update(Request $request, Post $post){
        $validateData=$request->validate([
            'title'=>'required|max:255',
            'minimumPrice'=> 'required|integer',
            'maximumPrice'=> 'required|integer',
            'description'=>'required|string',
            'location'=>'required|string',
            'field_id'=>'required|integer',
            'image'=>'image'
        ]);
        if($request->file('image')){
            if($post->image){
                Storage::disk('public')->delete($post->image);
            }
            $validateData['image'] =$request->file('image')->store('images',['disk'=>'public']);
            $post->update([
                'title'=> $validateData['title'],
                'minimumPrice'=> $validateData['minimumPrice'],
                'maximumPrice'=> $validateData['maximumPrice'],
                'description'=>  $validateData['description'],
                'location'=>  $validateData['location'],
                'field_id'=>  $validateData['field_id'],
                'image'=>  $validateData['image'],
                'user_id'=> Auth::id()
            ]);
        }
        return redirect()->route('View_Recruitment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if($post->image){
            if(Storage::disk('public')->exists($post->image)){
                Storage::disk('public')->delete($post->image);
            }
        }
        $post->delete();

        return redirect()->route('View_Recruitment');
    }
}
