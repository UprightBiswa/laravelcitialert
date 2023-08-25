<!-- resources/views/track.blade.php -->
@extends('layouts.app')

@section('main')
    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container mx-auto px-4 sm:px-8 xl:max-w-6xl xl:px-4">
            <h1 class="xl:ml-24">Grievance Details</h1>
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <div class="container mx-auto p-8">
        @if (isset($data))
            <h2 class="text-2xl font-semibold mb-4">{{ $data['token'] }}</h2>

            @if ($data['attachment'])
                <div class="mb-4">
                    <h3 class="text-xl font-semibold">Attachment</h3>
                    <a href="{{ $data['attachment'] }}" target="_blank" rel="noopener noreferrer">
                        <img src="{{ $data['attachment'] }}" alt="Attachment" class="w-full">
                    </a>
                </div>
            @endif


            @if ($data['video'])
                <div class="mb-4">
                    <h3 class="text-xl font-semibold">Video</h3>
                    <video controls class="w-full">
                        <source src="{{ $data['video'] }}" type="video/mp4">
                        <!-- You can add more source elements for different video formats if needed -->
                        Your browser does not support the video tag.
                    </video>
                </div>
            @endif
            <ul>
                <li>ID: {{ $data['id'] }}</li>
                <li>Platform: {{ $data['platform'] }}</li>
                <li>Citizen Mobile: {{ $data['citizen_mobile'] }}</li>
                <li>Status: {{ $data['status'] }}</li>
                <!-- Display other data fields as needed -->
            </ul>
            @if ($data['geo_address'])
                <div class="mb-4">
                    <h3 class="text-xl font-semibold">Geo Address</h3>
                    <p>{{ $data['geo_address'] }}</p>
                </div>
            @endif

            <!-- Add more sections as needed for other data fields -->
        @else
            <p class="text-red-500">No data found.</p>
        @endif
    </div>
@endsection
