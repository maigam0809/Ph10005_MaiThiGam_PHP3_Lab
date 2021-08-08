@extends('admin.layout')

@section('title','List users')
@section('contents')
@if(!empty($users))

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">users
                    <small>List</small>
                </h1>
            </div>
            <div class="col-lg-12">

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

            </div>
               <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $item)
                    <tr class="odd gradeX text-capitalize" align="center">
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            {{$item->name}}
                        </td>
                        <td>
                            {{$item->email}}
                        </td>
                        <td>
                            {{$item->gender == config('common.users.gender.male') ? 'Nam' : 'Nữ'}}
                        </td>
                        <td>
                            {{$item->address}}
                        </td>
                        <td>
                            <img src="{{ $item->image }}" alt="" width="100px;">
                        </td>
                        <td>
                            {{$item->role == config('common.users.role.users') ? 'Users' : 'Admin'}}
                        </td>
                        <td class="center" style="display:flex;">
                            <a class="btn btn-warning" href=" {{route('users.edit',['user'=>$item->id])}}">
                                <i class="fa fa-pencil fa-fw"></i>
                            </a>
                            <a class="btn btn-danger" style="margin-left: 5px;"  data-toggle="modal" data-target="#confirm_delete_{{$item->id}}">
                                <i class="fa fa-trash-o  fa-fw"></i>
                            </a>

                            <div class="modal fade"  id="confirm_delete_{{$item->id}}" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Bạn có muốn xoá hay không ?</h4>
                                    </div>
                                    <div class="modal-body">
                                    <p>Xác nhận ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{route('users.delete',['user'=> $item->id])}}" method="post">
                                            @csrf
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <button type="submit" class="btn btn-primary">Yes</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </td>
                    @endforeach

                </tbody>
            </table>
            @else
                <h2>Không có dữ liệu</h2>
            @endif
        </div>
    </div>
</div>

@endsection
