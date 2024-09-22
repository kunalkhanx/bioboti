@extends('auth.auth')


@section('main')

<div class="w-full max-w-md mx-auto py-6 px-8 rounded-xl shadow bg-white flex flex-col gap-6">

    <div class="text-center">
        <a href="">
            <p class="text-2xl font-medium">BioLinkar</p>
        </a>
    </div>

    <h1 class="text-xl font-semibold">Verify OTP</h1>

    {{view('partials.alert')}}

    <form action="{{route('signup_verify_otp')}}" class="flex flex-col gap-6" method="POST">
        <input type="hidden" name="otp_token" value="{{request()->token}}">
        @csrf
        <div>
            <div class="relative">
                <input type="number" placeholder="6 Digits OTP" name="otp" class="peer rounded bg-gray-100 block w-[calc(100%-2px)] h-10 px-4 text-lg focus:outline-none relative mx-auto mb-[1px] z-[2] focus:bg-white text-center py-4" autocomplete="off">
                <span class="absolute bottom-[-1px] right-0 w-full h-[42px] rounded-[5px] z-[1] from-pink-500 via-amber-500 to-rose-500 peer-focus:bg-gradient-to-br bg-transparent"></span>
            </div>
            @error('otp')
                <p class="text-sm text-red-600">{{$message}}</p>
            @enderror
        </div>

        <div>
            <button type="submit" class="bg-gradient-to-r from-pink-500 to-rose-500 py-3 px-8 w-full rounded-md text-white">Verify</button>
        </div>

    </form>

    <div class="flex flex-col gap-3 justify-between items-center text-sm">
        <p>Back to <a href="{{route('login')}}" class="text-blue-600">Login</a></p>
    </div>

</div>

@endsection