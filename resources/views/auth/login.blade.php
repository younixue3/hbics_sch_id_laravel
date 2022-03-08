@extends('layouts.app')
@section('title', 'Login')
@section('content')
    {{--    <div class="">--}}
    {{--        <div class="bg-white rounded-3xl flex p-3 w-2/5 h-rd100 my-32 mx-auto">--}}
    {{--            @error('email')--}}
    {{--            <div class="bg-gradient-to-t from-red-600 to-red-400 rounded-xl p-10 w-96 text-white">--}}
    {{--                <div class="text-4xl font-bold">{{ __('Error') }}</div>--}}
    {{--                <div class="h-52">--}}
    {{--                    <p class="my-14">{{$message}}</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            @else--}}
    {{--                @error('password')--}}
    {{--                <div class="bg-gradient-to-t from-red-600 to-red-400 rounded-xl p-10 w-96 h-52 text-white">--}}
    {{--                    <div class="text-4xl font-bold">{{ __('Error') }}</div>--}}
    {{--                    <div class="h-52">--}}
    {{--                        <p class="my-14">{{$message}}</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                @else--}}
    {{--                    <div class="bg-gradient-to-t from-blue-600 to-blue-400 rounded-xl p-10 w-96 text-white">--}}
    {{--                        <div class="text-4xl font-bold">{{ __('Login') }}</div>--}}
    {{--                        <div class="h-52">--}}
    {{--                            <p class="my-14">Welcome to HBICS Blog</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    @enderro@csrfr--}}
    {{--                    @enderror--}}
    {{--                    <form class="grid pl-6 text-xl place-items-center w-full" method="POST"--}}
    {{--                          action="{{ route('login') }}">--}}
    {{--                        --}}
    {{--                        <div class="grid w-full">--}}
    {{--                            <input id="email"--}}
    {{--                                   class="border-b-2 border-gray-400 mr-10 focus:outline-none text-lg placeholder-opacity-50 pl-1 py-2 @error('email') is-invalid @enderror"--}}
    {{--                                   type="email" value="{{ old('email') }}" required autocomplete="email" name="email"--}}
    {{--                                   placeholder="{{ __('E-Mail Address') }}" autofocus>--}}
    {{--                            <input id="password"--}}
    {{--                                   class="border-b-2 border-gray-400 mr-10 focus:outline-none text-lg placeholder-opacity-50 pl-1 py-2 @error('password') is-invalid @enderror"--}}
    {{--                                   type="password" required autocomplete="current-password" name="password"--}}
    {{--                                   placeholder="{{ __('Password') }}">--}}
    {{--                            <label class="mt-2">--}}
    {{--                                <input class="h-4 w-4 " type="checkbox" name="remember"--}}
    {{--                                       id="remember" {{ old('remember') ? 'checked' : '' }}><span--}}
    {{--                                    class="text-sm ml-2">{{ __('Remember Me') }}</span>--}}
    {{--                            </label>--}}
    {{--                        </div>--}}
    {{--                        <div class="flex ">--}}
    {{--                            <button type="submit" class="text-white bg-gray-700 rounded-xl mx-1 px-3 py-0.5">Login--}}
    {{--                            </button>--}}
    {{--                            <button class="border-2 border-gray-700 text-gray-700 rounded-xl mx-1 px-3 py-0.5">Cancel--}}
    {{--                            </button>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="relative">
        <img class="static h-screen w-full object-cover"
             src="{{asset('assets/stock_photo_rdev/IMG_8419.jpg')}}">
        <div class="absolute top-1/4 md:top-0 right-0 w-full md:h-screen md:w-96 p-4">
            <div class="text-center bg-white shadow-lg h-auto md:h-full w-full top-0 rounded-xl shadow-xl py-5">
                <form class="static transform md:translate-y-1/2" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-4 md:mb-10">
                        <div class="text-xl md:text-5xl font-bold">Welcome</div>
                        <div class="text-sm md:text-lg font-light leading-3">Sign in to your account</div>
                    </div>
                    <div class="mx-10 my-2 md:my-10">
                        <input type="email" name="email" required
                               class="flex-1 text-xs md:text-lg block w-full focus:outline-none px-3 py-1.5 rounded-t-xl border border border-b-0 border-gray-300"
                               placeholder="Email">
                        <input type="password" name="password" required
                               class="flex-1 text-xs md:text-lg block w-full focus:outline-none px-3 py-1.5 rounded-b-xl border border border-gray-300"
                               placeholder="Password">
                        <div class="flex items-start pl-1 mt-2 mx-1">
                            <div class="flex items-center h-5">
                                <input class="m-auto h-2 w-2 md:h-4 md:w-4 rounded" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                            </div>
                            <div class="ml-2 text-sm">
                                <label class="font-medium text-xs md:text-lg text-gray-700">Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="mx-10 mt-2 md:mt-10">
                        <div class="m-auto flex space-x-5">
                            <input type="submit"
                                   class="bg-indigo-500 text-sm md:text-xl text-white text-center rounded-md shadow-md w-full px-5 py-1"
                                   value="Sign in">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
