@extends('layouts.default')

@section('page_title')
    Home
@endsection

@push('header_styles')

@endpush

@push('header_scripts')

@endpush

@section('content')
    <div id="hero" class="bg-gray-800 py-32 px-8 lg:px-16 flex flex-wrap justify-center">
        <div class="w-full lg:w-1/2 pt-8 lg:pt-0 max-w-3xl pr-16">
            <img src="{{ asset('/images/snippets.gif') }}" alt="Tinkerwell Code Example">
            <div class="w-full flex items-center mt-4 justify-center">
                <span class="text-white text-xs mr-2">Tinkerwell is made by </span><a href="https://beyondco.de?ref=tinkerwell-snippets.com" target="_blank">
                    <img class="h-8" src="https://tinkerwell.app/images/beyond-code.png" alt="Beyond Code">
                </a>
            </div>
        </div>

        <div class="w-full lg:w-1/2 max-w-3xl flex flex-col align-middle justify-center">
            <div class="flex flex-col text-white lg:pr-4">
                <h1 class="text-3xl md:text-6xl text-center lg:text-left pb-4">Tinkerwell {snippets}</h1>
                <p class="text-xl pt-2">
                    Use snippets made by the community right in <a href="https://tinkerwell.app?ref=tinkerwell-snippets.com" target="_blank" class="border-b border-dashed border-gray-600 hover:text-gray-400">Tinkerwell</a>. Or create & share your own.
                </p>

                <p class="text-xl pt-2">
                    Or you just use it for your team.
                </p>

                <div class="w-full pt-8 flex flex-col justify-center items-center pt-16">
                    <a href="#latest-snippets" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded mx-2 text-center">
                        See Latest Snippets
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="latest-snippets" class="container mx-auto text-white py-32 px-4 bg-gray-900">
        <h2 class="text-4xl text-gray-300 py-8 text-center">Get Tinkerwell</h2>

        <div class="w-full flex flex-col justify-center items-center">
            Please not that you need a valid Tinkerwell-License which you can get from the official Tinkerwell-Website.
        </div>
        <br>
        <div class="container mx-auto flex flex-wrap">
            <div class="w-full flex flex-col justify-center items-center">
                <a href="https://tinkerwell.app?ref=tinkerwell-snippets.com" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded mx-2 text-center">
                    Get Tinkerwell
                </a>

                <br>
                <small>(This website is a community-project and is <strong>NOT</strong> affiliated with Tinkerwell at all)</small>
            </div>
        </div>
    </div>

    <div id="latest-snippets" class="container mx-auto text-white py-32 px-4">
        <h2 class="text-4xl text-gray-300 py-8 text-center">Latest Snippets</h2>

        <div class="container mx-auto flex flex-wrap">
            @foreach(\App\Models\Snippet::all()->take(9) as $snippet)
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 py-8 md:py-12">
                    <a href="{{ route('snippets.show', $snippet->id) }}">
                        <h3 class="text-2xl py-2 border-b border-dashed border-gray-600 hover:text-gray-400">{{ $snippet->title  }}</h3>
                    </a>
                    <p class="pt-2">
                        {{ $snippet->description }}
                    </p>
                    <p class="pt-2">
                        <small>By {{ $snippet->user->name }}</small>
                    </p>
                </div>
            @endforeach

                <div class="w-full flex flex-col justify-center items-center">
                    <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded mx-2 text-center">
                        See All Snippets
                    </a>
                </div>
        </div>
    </div>

    @include('_includes.footer')
@endsection

@push('footer_scripts')

@endpush
