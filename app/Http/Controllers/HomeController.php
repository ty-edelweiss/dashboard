<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Setting $setting) {
        $id = $setting->where('name', 'table')->value('id');

        $vendor = 'postgresql';
        $host = $setting->where('name', 'host')->value('current_value');
        $port = $setting->where('name', 'port')->value('current_value');
        $database = $setting->where('name', 'database')->value('current_value');
        $table = $setting->where('name', 'table')->value('current_value');
        return view('pages.home', compact('id', 'vendor', 'host', 'port', 'database', 'table'));
    }

}
