@extends('home')

@section('index')
    <button type="button" class="btn btn-primary"><a href="{{route('student.index')}}" style="color: white">Home</a>
    </button>
    <hr>
    <form class="form-inline" action="{{route('student.search')}}" method="get">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" id="search" name="search" placeholder="Name/phone/address">
        </div>
        <button type="submit" class="btn btn-outline-success mb-2" value="Search"><img
                src="https://img.icons8.com/cute-clipart/25/000000/search.png"></button> &nbsp;
        <button type="button" class="btn btn-outline-success mb-2" ><a
                href="{{route('student.create')}}" style="color: white"><img
                    src="https://img.icons8.com/cute-clipart/25/000000/add-property.png"></a>
        </button>
    </form>
    </button>
    <table class="table">
        <thead>
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
        @foreach($dataSearch as $key => $student)
            <tr>
                <td scope="row">{{++$key}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->address}}</td>
                <td><img src="{{asset('storage/'.$student->image)}}" width="60" height="50"></td>
                <td>
                    <button type="button" class="btn btn-outline-success"><a
                            href="{{route('student.delete',$student->id)}}"><img
                                src="https://img.icons8.com/bubbles/25/000000/trash.png"></a></button>
                    <button type="button" class="btn btn-outline-success"><a
                            href="{{route('student.edit',$student->id)}}"><img
                                src="https://img.icons8.com/cute-clipart/25/000000/edit.png"></a></button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$dataSearch->links()}}
@endsection
