@extends('layouts.app')

@section('main')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                @yield('sidebar')
            </div>
            <div class="col-lg-8">
                @yield('content')
            </div>
        </div>
    </div>

@endsection