<?php

namespace App\Http\Controllers;

use App\Models\Ward;
use App\Models\County;
use App\Models\Subcounty;
use Illuminate\Http\Request;

class DropdownController extends Controller
{
    public function index()
    {
        $counties = County::all();
        // dd($counties);
        return view('dropdown', compact('counties'));
    }

    public function getSubcounties($county_id)
    {
        $subcounties = Subcounty::where('county_id', $county_id)->pluck('name', 'id');
        return response()->json($subcounties);
    }

    public function getWards($subcounty_id)
    {
        $wards = Ward::where('subcounty_id', $subcounty_id)->pluck('ward_name', 'id');
        return response()->json($wards);
    }
}
