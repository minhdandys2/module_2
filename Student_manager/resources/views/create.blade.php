@extends('home')

@section('index')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control
                @if ($errors->has('name'))
                border-danger
                @endif
                " id="name" name="name" placeholder="name">
            @if ($errors->has('name'))
                <p class="text-danger">
                    <img src="https://img.icons8.com/color/50/000000/high-importance.png"
                         style="width: 20px ;height: 20px">
                    {{$errors->first('name')}}
                </p>
            @endif
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control
                @if ($errors->has('phone'))
                border-danger
                @endif
                " id="phone" name="phone" placeholder="phone">
            @if ($errors->has('phone'))
                <p class="text-danger">
                    <img src="https://img.icons8.com/color/50/000000/high-importance.png"
                         style="width: 20px ;height: 20px">
                    {{$errors->first('phone')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control
                @if ($errors->has('address'))
                border-danger
                @endif
                " id="address" name="address" placeholder="address">
            @if ($errors->has('address'))
                <p class="text-danger">
                    <img src="https://img.icons8.com/color/50/000000/high-importance.png"
                         style="width: 20px ;height: 20px">
                    {{$errors->first('address')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="image">image</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="image">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
        <button type="button" class="btn btn-primary"><a href="{{route('student.index')}}" style="color: white">Back</a>
        </button>
    </form>
@endsection

