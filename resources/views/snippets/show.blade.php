@extends('layouts.default')

@section('page_title')
    {{ $snippet->title }}
@endsection

@push('header_styles')

@endpush

@push('header_scripts')

@endpush

@section('content')
<div class="w-full py-16 lg:py-32 px-4 max-w-5xl mx-auto">
    <div class="container mx-auto text-white flex flex-wrap justify-center">
        <h1 class="text-2xl text-gray-300 pb-8">{{ $snippet->title }}</h1>
        <br>
        <p class="w-full">
{{--            We just released version 2.0 of Tinkerwell bringing Windows and Linux support as well as generic framework support.--}}
        </p>
    </div>


    <div class="container mx-auto text-white flex flex-wrap justify-center">
        {{ $snippet->description }}
        <snippet-show-editor-window snippetcode="{{ $snippet->snippet }}"></snippet-show-editor-window>
    </div>
</div>
@endsection

@push('footer_scripts')

@endpush
