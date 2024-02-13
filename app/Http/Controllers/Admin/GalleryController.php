<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    use PhotoTrait;
    public function index(request $request)
    {
        if ($request->ajax()) {
             $gallery = Gallery::latest()->get();
            return Datatables::of( $gallery)
                ->addColumn('action', function ( $gallery) {
                    return '
                                <button type="button" data-id="' .  $gallery->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' .  $gallery->id . '">
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
            return view('admin/gallery/index');
        }
    }

    public function create()
    {
        return view('admin/gallery/parts/create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'image' => 'required'
        ],[
            'name.required' => 'الاسم مطلوب' ,
            'image.required' => 'الصورة مطلوبة'
        ]);

        $inputs = $request->all();
        if($request->has('image')){
            $inputs['image'] = $this->saveImage($request->image,'assets/uploads/gallery', 'photo');
        }

        if (Gallery::create($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    public function edit(Gallery  $gallery)
    {
        return view('admin/gallery/parts/edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ],[
            'name.required' => 'الاسم مطلوب' ,
        ]);

        try {
             $gallery = Gallery::findOrFail($id);
            $inputs = $request->all();

            if($request->has('image')){
                $inputs['image'] = $this->saveImage($request->image,'assets/uploads/gallery', 'photo');
            }

            if ( $gallery->update($inputs)) {
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
         $gallery = Gallery::where('id', $request->id)->first();
         $gallery->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
