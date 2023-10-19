<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\deviceInfo;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $datas = deviceInfo::all();

        return view('dashboard' ,compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('log-complaint');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // deviceInfo::create($request->all());
        $data = new deviceInfo();

        $data -> job_card_number = $request -> input('job_card_number');
        // $data -> job_card_date = $request -> input('job_card_date');
        $data -> equipment_model = $request -> input('equipment_model');
        $data -> serial_number = $request -> input('serial_number');
        $data -> dvd_cd_rom = $request -> input('dvd_cd_rom');
        $data -> memory_type = $request -> input('memory_type');
        $data -> memory_size = $request -> input('memory_size');
        $data -> hdd_type = $request -> input('hdd_type');
        $data -> hdd_size = $request -> input('hdd_size');
        $data -> printer_model = $request -> input('printer_model');
        $data -> catridge_present = $request -> input('catridge_present');
        $data -> catridge_type = $request -> input('catridge_type');
        $data -> complainant_service_number = $request -> input('complainant_service_number');
        $data -> complainant_rank = $request -> input('complainant_rank');
        $data -> complainant_name = $request -> input('complainant_name');
        $data -> complaint = $request -> input('complaint');
        $data -> complainant_unit = $request -> input('complainant_unit');
        $data -> complainant_contact = $request -> input('complainant_contact');

        $data -> save();

        return redirect(route('dashboard'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
