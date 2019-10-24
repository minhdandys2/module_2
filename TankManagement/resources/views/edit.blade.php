@extends('home')
<h1>Edit</h1>
<form method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$customer->name}}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$customer->email}}">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{$customer->address}}">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>
