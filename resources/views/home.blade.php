@extends('layouts.default')

@section('page_title')
    Dashboard
@endsection

@push('header_styles')

@endpush

@push('header_scripts')

@endpush

@section('content')
    <div class="flex items-center py-10">
        <div class="md:w-1/2 d md:mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    Create new Client-Credentials
                </div>

                <div class="w-full p-6">
                    <create-new-client-form></create-new-client-form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footer_scripts')

@endpush
