@extends('home')

@section('content')

<form action="{{route('check')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email">
        <button type="submit">Check</button>
    </div>
</form>

@endsection
