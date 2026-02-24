<?php

namespace App\Http\Controllers\Admin;

use App\Models\Skill;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SkillController extends BaseController
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $skills = Skill::all();
            return DataTables::of($skills)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '';

                    $actionBtn .= '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" 
                                        data-id="' . $row->id . '" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#editModal">
                                        <i class="fa fa-edit"></i>
                                    </a>';

                    $actionBtn .= '<button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                        <i class="fa fa-trash"></i>
                                   </button>
                                   <form id="delete-form-' . $row->id . '" 
                                         action="' . route('skill.destroy', $row->id) . '" 
                                         method="POST" 
                                         style="display: none;">
                                        ' . csrf_field() . '
                                        ' . method_field('DELETE') . '
                                   </form>';

                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.skills.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'skill_name' => 'required|string|max:255',
        ]);

        Skill::newSkill($request);

        $this->toastr->success('Skill created successfully!');
        return back();
    }

    public function edit(Skill $skill)
    {
        return view('admin.pages.skills.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'skill_name' => 'required|string|max:255',
        ]);

        $skill = Skill::findOrFail($id);
        Skill::updateSkill($request, $skill);

        $this->toastr->success('Skill updated successfully!');
        return back();
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        Skill::deleteSkill($skill);

        $this->toastr->success('Skill deleted successfully!');
        return back();
    }
}