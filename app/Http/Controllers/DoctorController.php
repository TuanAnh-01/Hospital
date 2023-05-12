<?php

namespace App\Http\Controllers;


use Doctrine\DBAL\Schema\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $doctors = DB::table('doctor')
                    ->orderBy('id', 'desc')                     
                    ->where('name', 'like', '%'.$request->keyword.'%')
                    ->orWhere('faculty', 'like', '%'.$request->keyword.'%')
                    ->orWhere('degree', 'like', '%'.$request->keyword.'%')                     
                    ->paginate(6);
        return view('doctor')->with('doctors', $doctors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = DB::table('doctor')
                    ->orderBy('id', 'desc')                     
                    ->where('name', 'like', '%'.$request->keyword.'%')
                    ->orWhere('faculty', 'like', '%'.$request->keyword.'%')
                    ->orWhere('degree', 'like', '%'.$request->keyword.'%')                     
                    ->paginate(6);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $doctor_detail = DB::table('doctor')->find($id);
        return view('doctor_details')->with('doctor_detail',$doctor_detail);
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
