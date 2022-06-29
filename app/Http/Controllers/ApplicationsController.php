<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Apply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationsController extends Controller
{

    public function index()
    {
        return view('application');
    }

    public function create()
    {
        return view('application.create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'address' => ['required', 'string',],
            'index_number' => ['required', 'string', 'max:20'],
            'programme' => ['required', 'string', 'max:50'],
            'major' => ['required', 'string', 'max:30'],
            'phone' => ['required', 'numeric'],
            'application_type' => ['required', 'string', 'max:20'],
            'doa' => ['required', 'string',],
            'doc' => ['required', 'string',],
        ]);

        $apply = Apply::create([
            'user_id' => Auth::user()->id,
            'index_number' => $request->index_number,
            'address' => $request->address,
            'programme' => $request->programme,
            'major' => $request->major,
            'cellphone' => $request->phone,
            'application_type' => $request->application_type,
            'doa' => $request->doa,
            'doc' => $request->doc,
        ]);

        session()->put('apply', [
            'id' => $apply->id
        ]);

        return redirect()->route('payment');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function show(Apply $apply)
    {
        return view('application.view', compact('apply'));
    }
}