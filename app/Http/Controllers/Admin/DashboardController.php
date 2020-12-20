<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Models\Material;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard', [
            'pages' => page::LastPages(5),
            'materials' => material::LastMaterials(5),
            'count_pages' => page::count(),
            'count_materials' => material::count(),
        ]);
    }
}
