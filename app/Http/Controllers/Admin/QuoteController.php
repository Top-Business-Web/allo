<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class QuoteController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $quotes = Quote::latest()->get();
            return Datatables::of($quotes)
                ->addColumn('action', function ($quotes) {
                    return '
                            <button type="button" data-id="' . $quotes->id . '" data-msg="' . $quotes->message . '"
                            data-toggle="modal" data-target="#view_modal" class="btn btn-pill btn-info-light editBtn">
                            <i class="fa fa-eye"></i>
                            </button>
                            <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $quotes->id . '" data-title="' . $quotes->title_ar . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                           ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/quotes/index');
        }
    }

    public function edit(Quote $quote)
    {
        return view('admin/quotes/edit');
    }

    public function destroy(Request $request)
    {
        $quotes = Quote::where('id', $request->id)->first();
        $quotes->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
