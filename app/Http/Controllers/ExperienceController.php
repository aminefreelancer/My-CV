<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    //

    public function show($type)
    {
        $experience_type = ($type=='work') ? 0 : 1;
        $experiences = Experience::where('type', $experience_type)->get();
        
        return view('admin.experiences.index', ['experiences' => $experiences, 'type' => $type]);

    }

    public function create($type)
    {
        return view('admin.experiences.create', ['type' => $type]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'type' => ['required', 'in:0,1'],
            'title' => ['required', 'max:100'],
            'establishement' => ['required', 'max:50'],
            'location' => ['required', 'max:100'],
            'from_month' => ['required'],
            'from_year' => ['required']
        ]);

        $experience = new Experience([
            'title' => $request->title,
            'type' => $request->type,
            'establishement' => $request->establishement,
            'location' => $request->location,
            'from' => $request->from_year.'-'.$request->from_month,
            'description' => $request->description,
            'user_id' => Auth::user()->id
        ]);

        if($request->present) {
            $experience->to = 'Present';
        } else {
            $experience->to = $request->to_year.'-'.$request->to_month;
        }

        $experience->save();

        $redirect = $request->type == 0 ? 'work' : 'education';
        return redirect()->route('experiences', ['type' => $redirect])->with('success', 'New Experience has been added !');
    }

    public function edit(Experience $experience)
    {
        return view('admin.experiences.edit', ['experience' => $experience]);
    }

    public function update(Request $request, Experience $experience)
    {
        $attributes = $request->validate([
            'title' => ['required', 'max:100'],
            'establishement' => ['required', 'max:50'],
            'location' => ['required', 'max:100'],
            'from_month' => ['required'],
            'from_year' => ['required']
        ]);

        if($request->present) {
            $experience->to = 'Present';
        } else {
            $experience->to = $request->to_year.'-'.$request->to_month;
        }

        $experience->update([
            'title' => $request->title,
            'establishement' => $request->establishement,
            'location' => $request->location,
            'from' => $request->from_year.'-'.$request->from_month,
            'description' => $request->description,
            'user_id' => Auth::user()->id
        ]);

        $redirect = $experience->type == 0 ? 'work' : 'education';
        return redirect()->route('experiences', ['type' => $redirect])->with('success', 'The experience has been updated !');
    }

    public function destroy(Request $request, Experience $experience)
    {
        $experience->delete();
        $redirect = $request->type;
        return redirect()->route('experiences', ['type' => $redirect])->with('success', 'The experience has been deleted !');
    }
}
