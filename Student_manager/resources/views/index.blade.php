@extends('home')

@section('index')
    <form class="form-inline" action="{{route('student.search')}}" method="get">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" name="search" placeholder="Name/phone/address">
        </div>
        <input type="submit" class="btn btn-primary mb-2" value="Search">
    </form>
    <hr>
    <button type="button" class="btn btn-primary"><a href="{{route('student.create')}}" style="color: white">Create</a>
    </button>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $key => $student)
            <tr>
                <td scope="row">{{++$key}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->address}}</td>
                <td><img src="{{asset('storage/'.$student->image)}}" width="60px" height="50"></td>
                <td>
                    <button type="button" class="btn btn-outline-success"><a
                            href="{{route('student.delete',$student->id)}}"><img src="https://img.icons8.com/flat_round/25/000000/delete-sign.png"></a></button>
                    <button type="button" class="btn btn-outline-success"><a
                            href="{{route('student.edit',$student->id)}}"><img src="https://img.icons8.com/cute-clipart/25/000000/edit.png"></a></button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$students->links()}}
@endsection
