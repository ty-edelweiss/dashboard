<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SourceController extends Controller
{
    public function index(Setting $setting) {
        $display = $setting->where('name', 'display')->value('current_value');
        $table = $setting->where('name', 'table')->value('current_value');
        $information = DB::connection('pgsql')->table('information_schema.columns')
            ->select('column_name', 'udt_name')->where([
                ['table_catalog', '=', 'lab'],
                ['table_name', '=', $table]
            ])->orderByRaw('ordinal_position')->get();
        $sources = DB::connection('pgsql')->table($table)->simplePaginate($display);

        return view('pages.sources', compact('display', 'table', 'information', 'sources'));
    }

    public function update(Request $request, Setting $setting, $id)
    {
        $input = $request->all();
        $table = $setting->find($id);
        $table->current_value = $input['display'];
        $table->save();
        return back();
    }

}
