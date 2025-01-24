<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VendorsType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('vendor.dashboard');
    }
    public function vendors()
    {
        $vendorstype = VendorsType::all();
        return view('vendor.vender-type.vendor_type', compact('vendorstype'));
    }
    public function vendorType(Request $request)
    {
        $request->validate([
            'vendor_type' =>'required',
        ]);
        $user = User::find(Auth::user()->id);
            $user->vendor_type = $request->vendor_type;
            $user->save();
            return redirect()->route('vendor.dashboard')->with('success', 'Vendor type updated successfully.');
    }
}
