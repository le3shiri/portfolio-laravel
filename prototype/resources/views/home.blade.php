@extends('layouts.app')

@section('content')
<div class="text-center space-y-4">
    <h1 class="text-4xl font-bold">{{ $developer['name'] }}</h1>
    <h2 class="text-xl text-blue-600">{{ $developer['role'] }}</h2>
    <p class="max-w-xl mx-auto text-gray-600">{{ $developer['bio'] }}</p>
    <a href="mailto:{{ $developer['email'] }}" class="text-blue-500 underline">
        {{ $developer['email'] }}
    </a>
</div>
@endsection
