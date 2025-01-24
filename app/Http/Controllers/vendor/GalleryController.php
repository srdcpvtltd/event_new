<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
     public function gallery(){
         return view('vendor.gallery.gallery');
     }
}
