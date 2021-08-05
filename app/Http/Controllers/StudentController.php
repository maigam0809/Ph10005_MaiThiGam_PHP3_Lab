<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function index(){
        $listStudent = Student::orderBy('id','ASC')->limit(50)->get();
        return view('admin/students/index',[
            'students'=>$listStudent,
        ]);
    }

    public function delete($id){
        $result = Student::find($id);
        $result->delete();
        return redirect('')->with('message',"Xoá Thành công");
    }
}
