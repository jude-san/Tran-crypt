<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationsRequest;
use App\Http\Requests\UpdateApplicationsRequest;
use App\Models\Applications;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function application()
    {     
        return view('application');
        //
    }
      
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreApplicationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function show(Applications $applications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function edit(Applications $applications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplicationsRequest  $request
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicationsRequest $request, Applications $applications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applications $applications)
    {
        //
    }
}
