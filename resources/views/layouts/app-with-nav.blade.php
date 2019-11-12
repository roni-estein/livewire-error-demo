@extends('layouts.app')

@section('page-stuff')
    @include('layouts.app._nav')

    <main class="py-4">
        @yield('content')
    </main>

@endsection
