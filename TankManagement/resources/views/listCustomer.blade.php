@extends('home')
@section('content')
    <a href="{{route('customer.create')}}">Create</a>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    @foreach($customers as $key => $value)
        <tbody>
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$value->name}}</td>
            <td>{{$value->age}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->address}}</td>
            <td>
                <a href="{{route('customer.delete', $value->id)}}" class="btn btn-outline-success">Delete</a>
                <a href="{{route('customer.edit',$value->id)}}" class="btn btn-outline-success">Edit</a>
            </td>
        </tr>
        </tbody>
    @endforeach
</table>
@endsection
