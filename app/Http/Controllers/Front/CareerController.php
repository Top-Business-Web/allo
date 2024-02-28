<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCareer;
use App\Http\Requests\StoreContact;
use App\Models\Career;
use App\Models\Job;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    use PhotoTrait;
    public function careers()
    {
        $jobs = Job::latest()->get();
        return view('site.careers',compact('jobs'));
    } // end careers

    public function index(Request $request)
    {
        $job = Job::query()->findOrFail($request->job_id);
        return view('site.career',compact('job'));
    }

    public function storeCareer(StoreCareer $request)
    {
        $inputs = $request->all();

        if($request->hasFile('file'))
        {
            $inputs['file'] = $this->saveImage($request->file, 'assets/front/images/', 'photo');
        }

        if(Career::create($inputs))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }
}
