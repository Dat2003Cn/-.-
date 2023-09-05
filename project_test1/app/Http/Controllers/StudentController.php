<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Students;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class StudentController extends Controller
{
    public function index(Request $request){
            
            $students = DB::table('students')->get();
            $students = Students::all();
           return view('student.index', compact('students'));

    }
    public function add(StudentRequest $request){
        if($request->isMethod('POST')){
            $params= $request->except('_token');
            $students = Students::create($params);
            if($students->id){
                Session::flash('success','thêm mới thành công sinh viên');
                return redirect()->route('index');
            }
        }
        return view('student.add');
    }
    public function edit(StudentRequest $request, $id) {
        $students = Students::find($id);
        
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            $result = Students::where('id', $id)->update($params);
    
            if ($result) {
                Session::flash('success', 'Cập nhật thành công');
                return redirect()->route('edit', ['id' => $id]);
            } else {
                Session::flash('error', 'Cập nhật thất bại');
            }
        }
    
        return view('student.edit', compact('students'));
    }
    public function delete($id){
        Students::where('id', $id)->delete();
        Session::flash('success', 'xóa  thành công');
        return redirect()->route('index');
    }
}    
