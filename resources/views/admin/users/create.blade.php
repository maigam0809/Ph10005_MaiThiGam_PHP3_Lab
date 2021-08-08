@extends('admin.layout')

@section('title','Create users')

@section('contents')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">users
                    <small>Add users</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-5" style="padding-bottom:120px">
                @if(session()->has('errors'))
                    <div class="alert alert-danger">
                        {{"Thêm thất bại !"}}
                    </div>
                @endif

                <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">Họ và tên</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" id="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="{{old('email')}}" id="Email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="Email" class="form-label">Password</label>
                        <input type="text" name="password" class="form-control" value="{{old('password')}}" id="name">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="gioitinh" class="form-label">Giới tính</label>
                        <select name="gender" id="gioitinh" class="form-control" >
                            <option value="{{ config('common.users.gender.male') }}"  {{ old('gender',config('common.users.gender.male')) == config('common.users.gender.male') ? 'selected' : ''}}  class="form-control" name="gender">Nam</option>
                            <option value="{{ config('common.users.gender.female') }}"  {{ old('gender',config('common.users.gender.female')) == config('common.users.gender.female') ? 'selected' : ''}}  class="form-control" name="gender">Nữ</option>
                        </select>
                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" value="{{old('address')}}" id="address">
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image" class="form-label">image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                   
                    <div class="form-group">
                        <label for="role" class="form-label">Role</label>
                        <select name="role"  class="form-control">
                            <option class="form-control" value="{{ config('common.users.role.users') }}"  {{ old('role', config('common.users.role.users')) == config('common.users.role.users') ? 'selected' : ''}}   name="role">Users</option>
                            <option class="form-control" value="{{ config('common.users.role.admin') }}"  {{ old('role', config('common.users.role.admin')) == config('common.users.role.admin') ? 'selected' : ''}}  name="role">Admin</option>
                        </select>
                        @error('role')
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
