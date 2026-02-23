<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ressume;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RessumeController extends BaseController
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $ressumes = Ressume::all();
            return DataTables::of($ressumes)
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
                                         action="' . route('ressume.destroy', $row->id) . '" 
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

        return view('admin.pages.ressumes.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'               => 'string|max:255',
            'designation'        => 'string|max:255',
            'currentdesignation' => 'nullable|string|max:255',
            'total_exp'          => 'nullable|integer',
            'cover_letter'       => 'nullable|string|max:255',
            'company_name'       => 'nullable|string|max:255',
            'current_status'     => 'nullable|string|max:255',
        ]);

        Ressume::newRessume($request);

        $this->toastr->success('Resume created successfully!');
        return back();
    }

    public function edit(Ressume $ressume)
    {
        return view('admin.pages.ressumes.edit', compact('ressume'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'               => 'string|max:255',
            'designation'        => 'string|max:255',
            'currentdesignation' => 'nullable|string|max:255',
            'total_exp'          => 'nullable|integer',
            'cover_letter'       => 'nullable|string|max:255',
            'company_name'       => 'nullable|string|max:255',
            'current_status'     => 'nullable|string|max:255',
        ]);

        $ressume = Ressume::findOrFail($id);
        Ressume::updateRessume($request, $ressume);

        $this->toastr->success('Resume updated successfully!');
        return back();
    }

    public function destroy($id)
    {
        $ressume = Ressume::findOrFail($id);
        Ressume::deleteRessume($ressume);

        $this->toastr->success('Resume deleted successfully!');
        return back();
    }
}