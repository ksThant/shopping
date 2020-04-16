@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$pagetitle}}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="text-right mb-2">
                        <a href="userinfo/create" class="btn btn-success">Add New Data</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>User Address</th>
                                <th>User Phone</th>
                                <th>User City</th>
                                <th>User Township</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                   @foreach ($data as $item)
                       <tr>
                            <td>{{$item->user_id}}</td>
                            <td>{{$item->user_address}}</td>
                            <td>{{$item->user_phone}}</td>
                            <td>{{$item->user_city}}</td>
                            <td>{{$item->user_township}}</td>
                            <td>
                                <a href="#" class="btn btn-info">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                       </tr>
                   @endforeach
                </table>
                {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection