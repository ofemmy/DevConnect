@extends('layouts.app')

@section('content')
<div class="flex items-center">
    <div class="md:w-1/2 md:mx-auto">

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
            role="alert">
            {{ session('status') }}
        </div>
        @endif

        <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

            <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0 text-center">
                Welcome {{'@'. Auth::user()->username}}
            </div>

            <div class="flex flex-col justify-center items-center w-full p-6">

                <p class="text-gray-700 mb-4">
                    You are logged in!
                </p>



                <a href="/profile" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create
                    Your
                    Profile</a>

            </div>
        </div>
    </div>
</div>
@endsection
