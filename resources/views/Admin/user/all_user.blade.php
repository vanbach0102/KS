@extends('admin_layout')
@section('admin_content')
<div class="row" id="basic-table">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><b>DANH SÁCH USER</b></h4>
        </div>
        <div class="table-responsive">
            @php
            $message = Session::get('message');
                if('message'){
                    echo'<span class="text-alert" stylye="color: ">'.$message.'</span>';
                    Session::put('message',null);
                }
        @endphp
          <table class="table">
            <thead>
              <tr>
                <th class="text-center"><b>Tên user</b></th>
                <th class="text-center"><b>Email</b></th>
                <th class="text-center"><b>Password</b></th>
                <th class="text-center"><b>Phone</b></th>
                <th class="text-center"><b>Admin</b></th>
                <th class="text-center"><b>Author</b></th>
                <th class="text-center"><b>User</b></th>
                <th class="text-center"><b>Phân quyền</b></th>
              </tr>
            </thead>
            <tbody>
                    @foreach ($admin as $key => $value )
                <form action="/assign-role" method="post">
                    @csrf
                <tr>
                <td class="text-center">{{ $value->admin_name }}</td>
                <td class="text-center">{{ $value->admin_email }}
                <input type="hidden" name="admin_email" value="{{$value->admin_email}}">
                <input type="hidden" name="admin_id" value="{{$value->admin_id}}">
                </td>
                <td class="text-center">{{ $value->admin_password }}</td>
                <td class="text-center">{{ $value->admin_phone}}</td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" id="customSwitch1" type="checkbox" name="admin_role"{{$value->hasRole('admin')?'checked':' '}}>
                    </div>
                </td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" id="customSwitch1" type="checkbox" name="author_role"{{$value->hasRole('author')?'checked':' '}}>
                    </div>
                </td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" id="customSwitch1" type="checkbox"  name="user_role"{{$value->hasRole('user')?'checked':' '}}>
                    </div>
                </td>
                {{-- <td class="text-center"><input type="checkbox" name="admin_role"{{$value->hasRole('admin')?'checked':' '}}></td>
                <td class="text-center"><input type="checkbox" name="author_role"{{$value->hasRole('author')?'checked':' '}}></td>
                <td class="text-center"><input type="checkbox" name="user_role"{{$value->hasRole('user')?'checked':' '}}></td> --}}
                <td class="text-center">
                    <button type="submit" class="btn btn-primary me-1" name="">Assign</button>
                    <a href="/delete-user/{{$value->admin_id}}" class="btn btn-sm btn-danger me-1" style="margin: 5px">Delete</a>
                </td>
                </tr>
                </form>
              @endforeach

            </tbody>
          </table>
          <form class="form form-horizontal" action="/import-csv" method="post" enctype="mutipart/form-data">
            @csrf
            <input type="file" name="file" accept=".xlsx"><br>
            <input type="submit" value="Import" name="import_csv" class="btn btn-warning">
            </form>
            <input type="submit" value="Export" name="" class="btn btn-warning">
        </div>
      </div>
    </div>
  </div>
@endsection
