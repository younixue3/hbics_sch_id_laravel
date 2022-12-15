@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="relative">
{{--        <img class="static h-screen w-full object-cover object-bottom"--}}
{{--             src="{{asset('assets/svg/LANDING_LOGO-01-min.jpg')}}">--}}
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
