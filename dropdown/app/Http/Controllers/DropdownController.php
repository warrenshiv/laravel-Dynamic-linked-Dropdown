<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\County;
use App\Models\Constituency;
use App\Models\Ward;

class DropdownController extends Controller
{
    public function index()
    {
        $data['counties'] = County::get(["name", "id"]);
        return view('dropdown', $data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetchConstituency(Request $request)
    {
        $data['constituencies'] = Constituency::where("county_id", $request->county_id)
                                ->get(["name", "id"]);
  
        return response()->json($data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetchWard(Request $request)
    {
        $data['wards'] = Ward::where("constituency_id", $request->ward_id)
                                    ->get(["name", "id"]);
                                      
        return response()->json($data);
    }
}
