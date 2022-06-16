<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function save(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:20'],
            'middlename' => ['required', 'string', 'max:20'],
            'surname' => ['required', 'string', 'max:20'],
            'index_number' => ['required', 'string', 'max:20', 'unique:profiles'],
        ]);


        Profile::create([
            'user_id' => Auth::user()->id,
            'first_name' => $request->firstname,
            'middle_name' => $request->middlename,
            'surname' => $request->surname,
            'index_number' => $request->index_number,
            'gender' => $request->gender,
        ]);

        return redirect()->route('dashboard');
    }
}
