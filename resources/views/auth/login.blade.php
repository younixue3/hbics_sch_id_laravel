@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="">
        {{-- <div class="grid grid-cols-1 justify-center">
            <div> --}}
        <div class="bg-white rounded-3xl flex p-3 w-2/5 h-rd100 my-32 mx-auto">
            @error('email')
            <div class="bg-gradient-to-t from-red-600 to-red-400 rounded-xl p-10 w-96 text-white">
                <div class="text-4xl font-bold">{{ __('Error') }}</div>
                <p class="my-14">{{$message}}</p>
            </div>
            @else
                @error('password')
                <div class="bg-gradient-to-t from-red-600 to-red-400 rounded-xl p-10 w-96 text-white">
                    <div class="text-4xl font-bold">{{ __('Error') }}</div>
                    <p class="my-14">{{$message}}</p>
                </div>
                @else
                    <div class="bg-gradient-to-t from-blue-600 to-blue-400 rounded-xl p-10 w-96 text-white">
                        <div class="text-4xl font-bold">{{ __('Login') }}</div>
                        <p class="my-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio explicabo sed quisquam</p>
                    </div>
                    @enderror
                    @enderror
                    <form class="grid pl-6 text-xl place-items-center w-full" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="grid w-full">
                            <input id="email" class="border-b-2 border-gray-400 mr-10 focus:outline-none text-lg placeholder-opacity-50 pl-1 py-2 @error('email') is-invalid @enderror" type="email"  value="{{ old('email') }}" required autocomplete="email" name="email" placeholder="{{ __('E-Mail Address') }}" autofocus>
                            <input id="password" class="border-b-2 border-gray-400 mr-10 focus:outline-none text-lg placeholder-opacity-50 pl-1 py-2 @error('password') is-invalid @enderror" type="password" required autocomplete="current-password" name="password" placeholder="{{ __('Password') }}">
                            <label class="mt-2">
                                <input class="h-4 w-4 " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span class="text-sm ml-2">{{ __('Remember Me') }}</span>
                            </label>
                        </div>
                        <div class="flex ">
                            <button type="submit" class="text-white bg-gray-700 rounded-xl mx-1 px-3 py-0.5">Login</button>
                            <button class="border-2 border-gray-700 text-gray-700 rounded-xl mx-1 px-3 py-0.5">Cancel</button>
                        </div>
                    </form>
                    {{-- <div class="text-white bg-gray-600">{{ __('Login') }}</div>
                    <div class="">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div> --}}
        </div>
        {{-- </div>
    </div> --}}
    </div>
@endsection
