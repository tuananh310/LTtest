<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $records = Staff::whereDate('date', '2023-09-12')->get();

        return view('test.index', compact('records'));
    }

    public function getStaff(Request $request)
    {
        $records = Time::where('staff_id', $request->staff_id)->get();
        return response()->json(['data' => $records]);
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
        //
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
    public function detail(Request $request)
    {
        $datas = DB::table('staff')->whereDate('date', $request->date)->get();
        $records = array();
        foreach($datas as $key => $data){
            $records[$key]['staff'] = $data;
            $records[$key]['time'] = Time::where('staff_id', $data->id)->get();
            $records[$key]['total_th1'] = $records[$key]['time']->sum('th1');
            $records[$key]['total_readjust'] = $records[$key]['time']->sum('readjust');
            $records[$key]['total_other'] = $records[$key]['time']->sum('other');
        }
        return view('test.detail', compact('records'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $staff = Staff::find($request->id);
        $staff->update([
            $request->name => $request->value,
        ]);
        $staff->update([
            'ct1' => $staff->nhap1 + $staff->nhap2 + $staff->nhap3 + 1,
            'ct2' => $staff->nhap1 + $staff->nhap2 + $staff->nhap3 + 2,
            'ct3' => $staff->nhap1 + $staff->nhap2 + $staff->nhap3 + 3,
            'ct4' => $staff->nhap1 + $staff->nhap2 + $staff->nhap3 + 4,
            'ct5' => $staff->nhap1 + $staff->nhap2 + $staff->nhap3 + 5,
        ]);

        return response()->json(['data' => $staff]);
    }

    public function updateTime(Request $request)
    {
        $time = Time::find($request->id);
        $time->update([
            $request->name => $request->value,
        ]);

        return response()->json(['data' => $time]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
