<?php

namespace App\Http\Controllers;

use App\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    //
    public function show()
    {
        $socials = Social::all();
        return view('admin.socials', ['socials' => $socials]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'max:30'],
            'link' => ['required', 'max:255']
        ]);

        $social = new Social();
        $social->name = $request->name;
        $social->link = $request->link;
        $social->user_id = Auth::user()->id;
        $social->save();

        return redirect()->route('socials')->with('success', 'New social media has been added !');
    }

    public function update(Request $request, Social $social)
    {
        $attributes = $request->validate([
            'name' => ['required', 'max:30'],
            'link' => ['required', 'max:255']
        ]);

        $social->update([
            'name' => $request->name, 
            'link' => $request->link
        ]);
        return redirect()->route('socials')->with('success', 'The Social Media has been updated !');
    }

    public function destroy(Request $request, Social $social)
    {
        $social->delete();
        return redirect()->route('socials')->with('success-social', 'The Social Media has been deleted !');
    }
}
