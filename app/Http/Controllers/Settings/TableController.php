<?php

namespace App\Http\Controllers\Settings;

use App\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function index(Setting $setting)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function create(Setting $setting)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting, $id)
    {
        $input = $request->all();
        $table = $setting->find($id);
        $table->current_value = $input['table'];
        $table->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting, $id)
    {
        //
    }
}
