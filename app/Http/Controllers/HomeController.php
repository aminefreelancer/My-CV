<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {   
        return view('admin.dashboard', ['user' => User::find(1)]);
    }

    public function update(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required', 'max:30'],
            'secondary_title' => ['required', 'max:30'],
            'name' => ['required', 'max:50'],
            'email' => ['required', 'max:191'],
            'phone' => ['max:20'],
            'address' => ['required', 'max:255'],
            'city' => ['required', 'max:50'],
            'zipcode' => ['required', 'max:5'],
            'province' => ['required', 'max:50'],
            'country' => ['required', 'max:50'],
            'summary' => ['required']
        ]);

        $user = User::find(1);
        $user->update($attributes);
        
        return redirect('dashboard')->with('success', 'Your information has been updated!');
    }
}
