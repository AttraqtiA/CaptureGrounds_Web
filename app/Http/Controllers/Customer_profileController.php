<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreFieldRequest;
use App\Http\Requests\UpdateFieldRequest;

class Customer_profileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.CustomerHomePage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFieldRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */

}
