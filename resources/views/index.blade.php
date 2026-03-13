@if(session('success'))
    <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif
@extends('layouts.app')

@section('content')
    @include('partials.hero')
    @include('partials.trip-cards')
    @include('partials.trip-of-the-month')
    @include('partials.footer')
@endsection
