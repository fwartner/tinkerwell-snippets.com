@extends('layouts.default')

@section('page_title')
    Create Snippet
@endsection

@push('header_styles')

@endpush

@push('header_scripts')

@endpush

@section('content')
    <div class="flex items-center py-10">
        <div class="md:w-1/2 d md:mx-auto">
            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    Create New Snippet
                </div>

                <div class="w-full p-6">
                    <p class="text-gray-700">
                        <snippet-create-form></snippet-create-form>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footer_scripts')

@endpush
