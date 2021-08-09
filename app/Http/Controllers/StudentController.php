<?php

namespace App\Http\Controllers;
use App\Http\Requests\Admin\Students\StoreRequest;
use App\Http\Requests\Admin\Students\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Student;
use App\Models\Subject;
class StudentController extends Controller {

    public function index(){
        $listStudent = Student::orderBy('id','DESC')->limit(20)->get();
        // dd($listStudent);
        return view('admin/students/index',[
            'students'=>$listStudent,
        ]);
    }

    public function create(){
        $listSubject = Subject::all();
        return view('/admin/students/create',[
            'subjects' => $listSubject
        ]);
    }

    public function store(StoreRequest $request){

        // $path = $request->file('avatar')->store('avatars');
        // $imageName = time().'.'.$request->avatar->extension();
        // $request->avatar->move(public_path('/images'), $imageName);
        // $path = $request->file('avatar')->store('avatars');

        // c1 Lưu vào storage
        $path = $request->file('avatar')->store('public/avatars');
        $path = str_replace('public','storage',$path);

        $data = $request->except('_token');
        $data['avatar'] = $path;
        $result = Student::create($data);
        return redirect('')->with('message',"Thêm Thành công");
    }

    public function edit(Student $student){
        $listSubject = Subject::all();
        return view('admin/students/edit',[
            'student' =>$student,
            'subjects' => $listSubject
        ]);
    }

    public function update(UpdateRequest $request,Student $student){
        
        $data = request()->except('_token');
        if($request->hasFile('image1')) { 
            $path = $request->file('image1')->store('public/avatars');
            $path = str_replace('public','storage',$path);
            $data['avatar'] = $path;
        }

        $student->update($data);
        return redirect('')->with('message','Sửa thành công');
    }

    public function delete(Student $student){
        $student->delete();
        return redirect('')->with('message',"Xoá Thành công");
    }

}
