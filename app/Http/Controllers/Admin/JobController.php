<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJob;
use App\Http\Requests\StoreSlider;
use App\Http\Requests\UpdateSlider;
use App\Models\Job;
use App\Models\Slider;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class JobController extends Controller
{
    use PhotoTrait;
    public function index(request $request)
    {
        if ($request->ajax()) {
            $jobs = Job::latest()->get();
            return Datatables::of($jobs)
                ->addColumn('action', function ($jobs) {
                    return '
                                <button type="button" data-id="' . $jobs->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $jobs->id . '" data-title="' . $jobs->title_ar . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('image', function ($jobs) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset($jobs->image) . '">
                    ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/jobs/index');
        }
    }

    public function create()
    {
        return view('admin/jobs/parts/create');
    }

    public function store(StoreJob $request)
    {
        try {
            $inputs = $request->all();

            if ($request->has('image')) {
                $inputs['image'] = $this->saveImage($request->image, 'assets/admin/jobs/images', 'photo');
            }

            if (Job::create($inputs)) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 405]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit(Job $job)
    {
        return view('admin/jobs/parts/edit', compact('job'));
    }

    public function update(StoreJob $request, $id)
    {
        try {
            $jobs = Job::findOrFail($id);
            $inputs = $request->all();

            if ($request->has('image')) {
                $inputs['image'] = $this->saveImage($request->image, 'assets/admin/jobs/images', 'photo');
            }

            if ($jobs->update($inputs)) {
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
        $jobs = Job::where('id', $request->id)->first();
        $jobs->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    } // end distory

}
