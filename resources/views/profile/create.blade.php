@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    {{ __('Profile') }}
                </div>
                <div id="app">
                    <app-form :language_list={{$languages}}></app-form>
                </div>

                {{-- <form class="w-full p-6" method="POST" action="{{ route('profile.store') }}">
                @csrf

                <div class="flex flex-wrap mb-6">
                    <label for="bio" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('bio') }}:
                    </label>

                    <input id="bio" type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('bio') ? ' border-red-500' : '' }}"
                        name="bio" value="{{ old('bio') }}" required autofocus>

                    @if ($errors->has('bio'))
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $errors->first('bio') }}
                    </p>
                    @endif
                </div>





                <div class="flex flex-wrap mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('Username') }}:
                    </label>

                    <input id="email" type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('username') ? ' border-red-500' : '' }}"
                        name="username" value="{{ old('username') }}" required>

                    @if ($errors->has('username'))
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $errors->first('username') }}
                    </p>
                    @endif
                </div>
                <div class="w-full flex flex-col mb-6">
                    <label for="language" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('Programming Languages') }}:
                    </label>
                    <div id="app">
                        <app-select :languages="{{$languages}}"></app-select>
                    </div> --}}
                    {{-- <div class="relative">
                            <select name="language[]" multiple size="9" id=""
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option value="" disabled selected>Select Programming Languages
                                </option>
                                @foreach ($languages as $language)
                                <option value="{{$language->language}}">{{$language->language}}</option>
                    @endforeach
                    {{-- <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option> --}}
                    {{-- </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div> --}}

                    {{-- <input id="language" type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('language') ? ' border-red-500' : '' }}"
                    name="language" value="{{ old('language') }}" required autofocus> --}}

                    {{-- @if ($errors->has('language'))
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $errors->first('language') }}
                    </p>
                    @endif
                </div> --}}
                {{-- <div class="flex flex-wrap">
                        <button type="submit"
                            class="inline-block align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700">
                            {{ __('Submit') }}
                </button>
            </div> --}}
            {{-- </form> --}}

        </div>
    </div>
</div>
</div>
@endsection
