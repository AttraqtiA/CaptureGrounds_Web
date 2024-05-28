<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('worker.create_service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'title'=>'required|max:255',
            'price'=> 'required|integer',
            'description'=>'required|string',
            'image'=>'image'
        ]);
        if($request->file('image')){
            $validateData['image'] =$request->file('image')->store('images',['disk' => 'public']);
            Service::create([
                'title'=> $validateData['title'],
                'price'=> $validateData['price'],
                'description'=>  $validateData['description'],
                'image'=>  $validateData['image'],
                'user_id'=> Auth::id()
            ]);
        }else{
            Service::create([
                'name'=> $validateData['title'],
                'price'=> $validateData['price'],
                'description'=>  $validateData['description'],
                'user_id'=> Auth::id()
            ]);
        }
        return redirect()->route('WorkerHomePage');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service){
        $ServiceEdit = Service::where('id',$service->id)->first();
        return view('worker.edit_service',['service' => $service]);
    }
    public function update(Request $request, Service $service){
        $validateData=$request->validate([
            'title'=>'required|max:255',
            'price'=> 'required|integer',
            'description'=>'required|string',
            'image'=>'image'
        ]);
        if($request->file('image')){
            if($service->image){
                Storage::disk('public')->delete($service->image);
            }
            $validateData['image'] =$request->file('image')->store('images',['disk'=>'public']);
            $service->update([
                'title'=> $validateData['title'],
                'price'=> $validateData['price'],
                'description'=>  $validateData['description'],
                'image'=>  $validateData['image'],
                'user_id'=> Auth::id()
            ]);
        }else{
            $service->update([
                'title'=> $validateData['title'],
                'price'=> $validateData['price'],
                'description'=>  $validateData['description'],
                'user_id'=> Auth::id()
           ]);
        }
        return redirect()->route('WorkerHomePage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if($service->image){
            if(Storage::disk('public')->exists($service->image)){
                Storage::disk('public')->delete($service->image);
            }
        }
        $service->delete();

        return redirect()->route('WorkerHomePage');
    }
}
