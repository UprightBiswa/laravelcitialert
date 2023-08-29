@extends('layouts.app')

@section('main')
    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container mx-auto px-4 sm:px-8 xl:max-w-6xl xl:px-4">
            <h1 class="text-red-500 xl:ml-24">Invalid Token</h1>
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <div class="container mx-auto p-8">
        <p class="text-red-500">Error occurred while retrieving data.</p>
        <div class="max-w-full mx-auto mt-4">
            <div class="relative h-0" style="padding-top: 56.25%;"> <!-- 16:9 aspect ratio -->
                <img src="{{ asset('images/nodatatoken.webp') }}" alt="Invalid Image" class="absolute inset-0 w-full h-full object-cover">
            </div>
        </div>
    </div>
@endsection
