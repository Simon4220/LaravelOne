<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Material;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function page($slug) {
        $page = page::where('slug', $slug)->firstOrFail();
        return view('user.page', [
            'page' => $page,
            'materials' => $page->materials()->where('active', 1)->paginate(10)
        ]);
    }
    public function material($slug) {
        return view('user.material', [
            'material' => material::where('slug', $slug)->firstOrFail()
        ]);
    }
}
