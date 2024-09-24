@extends('auth.auth')


@section('main')

<div class="w-full max-w-md mx-auto py-6 px-8 rounded-xl shadow bg-white flex flex-col gap-6">

    <div class="text-center">
        <a href="">
            <p class="text-2xl font-medium">BioLinkar</p>
        </a>
    </div>

    {{view('partials.alert')}}

    <h1 class="text-xl font-semibold">Forgot Password</h1>

    <form action="{{route('do_forgot_password')}}" class="flex flex-col gap-6" method="POST">
        @csrf
        <div>
            <div class="relative">
                <label for="email" class="mb-2 block text-gray-500">Enter your Bio Link email to reset your password</label>
                <input type="email" placeholder="Email" name="email" id="email" class="peer rounded bg-gray-100 block w-[calc(100%-2px)] h-10 px-4 text-sm focus:outline-none relative mx-auto mb-[1px] z-[2] focus:bg-white" autocomplete="off">
                <span class="absolute bottom-[-1px] right-0 w-full h-[42px] rounded-[5px] z-[1] from-pink-500 via-amber-500 to-rose-500 peer-focus:bg-gradient-to-br bg-transparent"></span>
            </div>
            @error('email')
                <p class="text-sm text-red-600">{{$message}}</p>
            @enderror
        </div>
    
        <div>
            <button type="submit" class="bg-gradient-to-r from-pink-500 to-rose-500 py-3 px-8 w-full rounded-md text-white">Reset Password</button>
        </div>

    </form>

    <div class="flex flex-col gap-3 justify-between items-center text-sm">
        <p>Back to <a href="{{route('login')}}" class="text-blue-600">Login</a></p>
    </div>

</div>

@endsection