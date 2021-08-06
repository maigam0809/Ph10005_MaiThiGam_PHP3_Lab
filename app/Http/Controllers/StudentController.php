<?php

namespace App\Http\Controllers;
use App\Http\Requests\Admin\Students\StoreRequest;
use App\Http\Requests\Admin\Students\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Student;
class StudentController extends Controller {

    public function index(){
        $listStudent = Student::orderBy('id','DESC')->limit(5)->get();
        return view('admin/students/index',[
            'students'=>$listStudent,
        ]);
    }

    public function create(){
        return view('/admin/students/create');
    }

    public function store(StoreRequest $request){

        // $path = $request->file('avatar')->store('avatars');
        // $imageName = time().'.'.$request->avatar->extension();
        // $request->avatar->move(public_path('/images'), $imageName);
        // $path = $request->file('avatar')->store('avatars');

        // return $path;


        // c1 Lưu vào storage
        // chỗ này sửa là public chứ anh đúng chư ban uk
        $path = $request->file('avatar')->store('public/avatars');
        // cho nay dung thu thuat ty. them storage vao link
        $path = str_replace('public','storage',$path);

        // dd($path);
        // return $path;

        // cho a xem lỗi gì

        // dd($path);
        // dd($imageName);
        // dd($a);
        // if($request->hasFile('avatar')){
        //     $file = $request->file('avatar');
        //     $duoi = $file->getClientOriginalExtension();
        //     $name = $file->getClientOriginalName();
        //     $avatar = Str::random(4)."_". $name;
        //     while(file_exists("images/".$avatar)){
        //         $avatar = Str::random(4)."_". $name;
        //     }
        //     $file->move("images/",$avatar);
        //     $request->avatar = $avatar;
        //     // dd($Hinh);
        // }


        $data = $request->except('_token');

        // change avatar =$path
        $data['avatar'] = $path;
        $result = Student::create($data);
        return redirect('')->with('message',"Thêm Thành công");
    }

    public function edit(Student $student){
        return view('admin/students/edit',[
            'student' =>$student
        ]);
    }

    public function update(UpdateRequest $request,Student $student){
        $data = request()->except('_token');
        $student->update($data);
        return redirect('')->with('message','Sửa thành công');
    }

    public function delete(Student $student){
        $student->delete();
        return redirect('')->with('message',"Xoá Thành công");
    }

}
