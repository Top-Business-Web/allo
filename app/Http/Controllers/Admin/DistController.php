<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use App\Models\PartnerSuccess;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class DistController extends Controller
{
    use PhotoTrait;
    public function index(request $request)
    {
        if ($request->ajax()) {
            $dists = PartnerSuccess::query()->where('type','dist')->latest()->get();
            return Datatables::of($dists)
                ->addColumn('action', function ($dists) {
                    return '
                                <button type="button" data-id="' . $dists->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $dists->id . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('image', function ($services) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset($services->image) . '">
                    ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/dists/index');
        }
    }

    public function create()
    {
        return view('admin/dists/parts/create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        if($request->has('image')){
            $inputs['image'] = $this->saveImage($request->image,'assets/uploads/dists', 'photo');
        }

        if (PartnerSuccess::create($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    public function edit(PartnerSuccess $dists)
    {
        return view('admin/dists/parts/edit', compact('dists'));
    }

    public function update(Request $request, $id)
    {
        try {
            $dists = PartnerSuccess::findOrFail($id);
            $inputs = $request->all();

            if($request->has('image')){
                $inputs['image'] = $this->saveImage($request->image,'assets/uploads/dists', 'photo');
            }

            if ($dists->update($inputs)) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 405]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {
        $dists = PartnerSuccess::where('id', $request->id)->first();
        $dists->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
