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
            <h2 class="text-2xl font-semibold mb-4">{{ strtolower($data['token']) }}</h2>

            @if ($data['attachment'])
            <!-- Attachment Section -->
            <div class="mb-4">
                <h3 class="text-xl font-semibold">Attachment</h3>
                <div class="max-w-full mx-auto">
                    <div class="relative h-0" style="padding-top: 56.25%;"> <!-- 16:9 aspect ratio -->
                        <a href="{{ $data['attachment'] }}" target="_blank" rel="noopener noreferrer">
                            <img src="{{ $data['attachment'] }}" alt="Attachment" class="absolute inset-0 w-full h-full object-cover">
                        </a>
                    </div>
                </div>
            </div>
        @endif

        @if ($data['video'])
            <!-- Video Section -->
            <div class="mb-4">
                <h3 class="text-xl font-semibold">Video</h3>
                <div class="max-w-full mx-auto">
                    <div class="relative h-0" style="padding-top: 56.25%;"> <!-- 16:9 aspect ratio -->
                        <video controls class="absolute inset-0 w-full h-full object-cover">
                            <source src="{{ $data['video'] }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        @endif



            <!-- Other Data Fields Section -->
            <div class="mb-4 bg-blue-100 p-4 rounded-lg">
                <ul>
                    <li>ID: {{ $data['id'] }}</li>
                    <li>Platform: {{ $data['platform'] }}</li>
                    <li>Citizen Mobile: {{ $data['citizen_mobile'] }}</li>
                    <li>Status:
                        <span class="{{ $data['status'] === 'open' ? 'text-green-500' : 'text-red-500' }}">
                            {{ $data['status'] }}
                        </span>
                    </li>
                    <!-- Display other data fields as needed -->
                </ul>
            </div>

            @if ($data['geo_address'])
                <!-- Location Section -->
                <div class="mb-4 bg-green-100 p-4 rounded-lg">
                    <h3 class="text-xl font-semibold">Location</h3>
                    <p>Location: {{ $data['geo_address'] }}</p>
                    <p>
                        <a href="https://maps.google.com/?q={{ $data['latitude'] }},{{ $data['longitude'] }}"
                            target="_blank" rel="noopener noreferrer">
                            Open in Google Maps
                        </a>
                    </p>

                </div>
            @endif
            @if ($data['latitude'] && $data['longitude'])
                <!-- Map View Section -->
                <div class="mb-4">
                    <h3 class="text-xl font-semibold">Location on Map</h3>
                    <div class="mt-4">
                        <iframe
                            src="https://maps.google.com/maps?q={{ $data['latitude'] }},{{ $data['longitude'] }}&output=embed"
                            width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            @endif
        @else
            <p class="text-red-500">No data found.</p>
        @endif
    </div>
@endsection
