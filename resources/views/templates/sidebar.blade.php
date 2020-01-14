@extends('layouts.app')

@section('main')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                @yield('sidebar')
            </div>
            <div class="col-lg-10">
                @yield('content')
            </div>
        </div>
    </div>

@endsection