<?php

namespace App\Http\Controllers\Admin;

use App\Models\Portfolio;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PortController extends BaseController
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $portfolios = Portfolio::all();
            return DataTables::of($portfolios)
                ->addIndexColumn()
                 ->addColumn('image', function ($row) {
                    if ($row->image) {
                        return '<img src="' . asset($row->image) . '" width="100" height="auto" alt="Image">';
                    } else {
                        return 'No image uploaded';
                    }
                })
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
                                         action="' . route('portfolio.destroy', $row->id) . '"
                                         method="POST"
                                         style="display: none;">
                                        ' . csrf_field() . '
                                        ' . method_field('DELETE') . '
                                   </form>';

                    return $actionBtn;
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        }

        return view('admin.pages.portfolio.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'pro_link'  => 'nullable|url',
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        Portfolio::newPortfolio($request);

        $this->toastr->success('Portfolio created successfully!');
        return back();
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.pages.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'pro_link'  => 'nullable|url',
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $portfolio = Portfolio::findOrFail($id);
        Portfolio::updatePortfolio($request, $portfolio);

        $this->toastr->success('Portfolio updated successfully!');
        return back();
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        Portfolio::deletePortfolio($portfolio);

        $this->toastr->success('Portfolio deleted successfully!');
        return back();
    }
}