@extends('admin.layout')

@section('title','Edit students')

@section('contents')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Students
                    <small>Edit Students</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-5" style="padding-bottom:120px">
                @if(session()->has('errors'))
                    <div class="alert alert-danger">
                        {{"Thêm thất bại !"}}
                    </div>
                @endif

                <form method="post" action="{{ route('students.update',['student'=>$student->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">Student Name</label>
                        <input type="text" name="student_name" class="form-control" value="{{$student->student_name}}" id="name">
                        @error('student_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image1" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image1" id="image1">
                        <img src="{{ $student->avatar }}" alt=""  width="200px;">
                        @error('image1')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" value="{{$student->address}}" id="address">
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="avatar" class="form-label">Avatar</label>
                        {{-- <input type="file" class="form-control" name="avatar" id="avatar"> --}}
                        <input value="{{ $student->avatar }}" disabled name="avatar"  class="form-control">
                        @error('avatar')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea  class="form-control ckeditor" rows="1" id="description" name="description">{{ $student->description }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-default">Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
<!-- /.row -->
    </div>
<!-- /.container-fluid -->
</div>


@endsection
