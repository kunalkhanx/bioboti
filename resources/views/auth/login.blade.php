@extends('auth.auth')


@section('main')

<div class="w-full max-w-md mx-auto py-6 px-8 rounded-xl shadow bg-white flex flex-col gap-6">

    <div class="text-center">
        <a href="">
            <p class="text-2xl font-medium">BioLinkar</p>
        </a>
    </div>

    <h1 class="text-xl font-semibold">Login</h1>

    {{view('partials.alert')}}

    <form action="{{route('do_login')}}" class="flex flex-col gap-6" method="POST">
        @csrf
        <div>
            <div class="relative">
                <input type="text" placeholder="Username" name="username" class="peer rounded bg-gray-100 block w-[calc(100%-2px)] h-10 px-4 text-sm focus:outline-none relative mx-auto mb-[1px] z-[2] focus:bg-white" autocomplete="off">
                <span class="absolute bottom-[-1px] right-0 w-full h-[42px] rounded-[5px] z-[1] from-pink-500 via-amber-500 to-rose-500 peer-focus:bg-gradient-to-br bg-transparent"></span>
            </div>
            @error('username')
                <p class="text-sm text-red-600">{{$message}}</p>
            @enderror
        </div>
    
        <div>
            <div class="relative">
                <input type="password" placeholder="Password" name="password" class="peer rounded bg-gray-100 block w-[calc(100%-2px)] h-10 px-4 text-sm focus:outline-none relative mx-auto mb-[1px] z-[2] focus:bg-white">
                <span class="absolute bottom-[-1px] right-0 w-full h-[42px] rounded-[5px] z-[1] from-pink-500 via-amber-500 to-rose-500 peer-focus:bg-gradient-to-br bg-transparent"></span>
            </div>
            @error('password')
                <p class="text-sm text-red-600">{{$message}}</p>
            @enderror
        </div>
    
        <div>
            <button type="submit" class="bg-gradient-to-r from-pink-500 to-rose-500 py-3 px-8 w-full rounded-md text-white">Login</button>
        </div>

    </form>

    <div class="flex flex-col gap-3 justify-between items-center text-sm">
        <a href="" class="text-blue-600">Forgot password?</a>

        <p>Don't have an account? <a href="{{route('signup')}}" class="text-blue-600">Sign up</a></p>
    </div>

</div>

@endsection