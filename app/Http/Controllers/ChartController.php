<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index(Setting $setting) {
        $table = $setting->where('name', 'table')->value('current_value');
        $information = DB::connection('pgsql')->table('information_schema.columns')
            ->select('column_name', 'udt_name')->where([
                ['table_catalog', '=', 'lab'],
                ['table_name', '=', $table]
            ])->orderByRaw('ordinal_position')->get();

        return view('pages.charts', compact('table', 'information'));
    }

}
