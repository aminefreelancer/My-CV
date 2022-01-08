<?php

namespace App\Http\Controllers;

use App\Category;
use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //

    public function show()
    {
        $skills = Skill::all();
        return view('admin.skills.index', ['skills' => $skills]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.skills.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'max:50'],
            'category_id' => ['required', 'exists:categories,id']
        ]);

        $skill = new Skill();
        $skill->name = $request->name;
        $skill->category_id = $request->category_id;
        $skill->save();

        return redirect('skills')->with('success', 'New skill has been added !');
    }

    public function edit(Skill $skill)
    {
        $categories = Category::all();
        return view('admin.skills.edit', ['skill' => $skill, 'categories' => $categories]);
    }

    public function update(Request $request, Skill $skill)
    {
        $attributes = $request->validate([
            'name' => ['required', 'max:50'],
            'category_id' => ['required', 'exists:categories,id']
        ]);
        $skill->update($attributes);
        return redirect('skills')->with('success-skill', 'The skill has been updated !');
    }

    public function destroy(Request $request, Skill $skill)
    {
        $skill->delete();
        return redirect('skills')->with('success-skill', 'The skill has been deleted !');
    }

}
