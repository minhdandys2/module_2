@extends('layouts.app')

@section('content')
    <h1 class="text-center text-warning">Student manager</h1>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="p-3 mb-2 bg-secondary text-white" style="color: red">Student</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @yield('index')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
