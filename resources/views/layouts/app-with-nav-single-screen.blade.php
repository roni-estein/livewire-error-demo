@extends('layouts.app')

@section('page-stuff')
    <div class="h-screen flex flex-col w-full overflow-hidden">
        @include('layouts.app._nav')

        @yield('content')
    </div>

@endsection
