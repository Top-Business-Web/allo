<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use App\Models\PartnerSuccess;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class PartnerSuccessController extends Controller
{
    use PhotoTrait;
    public function index(request $request)
    {
        if ($request->ajax()) {
            $partners_success = PartnerSuccess::latest()->get();
            return Datatables::of($partners_success)
                ->addColumn('action', function ($partners_success) {
                    return '
                                <button type="button" data-id="' . $partners_success->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $partners_success->id . '">
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
            return view('admin/partners_success/index');
        }
    }

    public function create()
    {
        return view('admin/partners_success/parts/create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        if($request->has('image')){
            $inputs['image'] = $this->saveImage($request->image,'assets/uploads/partners_success', 'photo');
        }

        if (PartnerSuccess::create($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    public function edit(PartnerSuccess $partners_success)
    {
        return view('admin/partners_success/parts/edit', compact('partners_success'));
    }

    public function update(Request $request, $id)
    {
        try {
            $partners_success = PartnerSuccess::findOrFail($id);
            $inputs = $request->all();

            if($request->has('image')){
                $inputs['image'] = $this->saveImage($request->image,'assets/uploads/partners_success', 'photo');
            }

            if ($partners_success->update($inputs)) {
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
        $partners_success = PartnerSuccess::where('id', $request->id)->first();
        $partners_success->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}