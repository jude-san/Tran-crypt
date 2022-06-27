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

    public function save(Request $request)
    {
        $request->validate([
            'address' => ['required', 'string', 'max:20'],
            'programme' => ['required', 'string', 'max:50'],
            'major' => ['required', 'string', 'max:30'],
            'phone' => ['required', 'numeric'],
            'application_type' => ['required', 'string', 'max:20'],
            'doa' => ['required', 'string',],
            'doc' => ['required', 'string',],
        ]);

        Apply::create([
            'user_id' => Auth::user()->id,
            'address' => $request->address,
            'programme' => $request->programme,
            'major' => $request->major,
            'cellphone' => $request->phone,
            'application_type' => $request->application_type,
            'doa' => $request->doa,
            'doc' => $request->doc,
        ]);

        return redirect()->route('payment');
    }
}
