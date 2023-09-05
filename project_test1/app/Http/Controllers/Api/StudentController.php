<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Students::all();
        return StudentResource::collection($students);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $students = Students::create($request->all());
        return new StudentResource($students);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $students = Students::find($id);
        if(!$students){
            return response()->json([
                'status' => 404,
                'message' => 'Product Not Found!!!'
            ]);

        }
        return new StudentResource($students);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $students = Students::find($id);
        if(!$students){
            return response()->json([
                'status' => 404,
                'message' => 'Product Not Found!!!'
            ]);
        }
        $students->update($request->all());
        return new StudentResource($students);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $students = Students::find($id);
        if($students){
            $students->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Xoa ok',
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'k thay product',
            ]);
        }
    }
}
