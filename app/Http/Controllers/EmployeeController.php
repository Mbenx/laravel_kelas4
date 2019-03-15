<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Employee;
use App\Position;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Query Builder
        //$karyawan = DB::table('karyawan')->get();

        // Eloquent
        $karyawan = Employee::all();
        return view('employee/home',['data'=>$karyawan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Position::all();
        return view('employee/create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DB::table('karyawan')->insert(
        //     [
        //     'name' => $request->name, 
        //     'address' => $request->address,
        //     'email' => $request->email,
        //     'phone' => $request->phone]
        // );
        //dd($request);
        Employee::create([
            'name' => $request->name, 
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'position_id' => $request->position_id]);
        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $karyawan = DB::table('karyawan')
        // ->where('id','=',$id)
        // ->get();

        $karyawan = Employee::where('id','=',$id)->first();
        return view('/employee/show',['data'=>$karyawan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Query Builder
        // $karyawan = DB::table('karyawan')
        // ->where('id','=',$id)
        // ->get();
        $position = Position::all();
        $karyawan = Employee::where('id','=',$id)->first();
        return view('employee/edit',['data'=>$karyawan,'pos'=>$position]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request);
        // DB::table('karyawan')
        //     ->where('id', $request->id)
        //     ->update([
        //         'name' => $request->name,
        //         'address' => $request->address,
        //         'email' => $request->email,
        //         'phone' => $request->phone,
        //         ]);

        Employee::where('id','=',$request->id)
          ->update([
                'name' => $request->name,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone,
                'position_id' => $request->position_id
              ]);
        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DB::table('karyawan')->where('id', '=', $id)->delete();
        
        Employee::where('id','=',$id)->delete();
        return redirect('/employee');
    }
}
