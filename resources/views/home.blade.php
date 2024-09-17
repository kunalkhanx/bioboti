@extends('app')

@section('main')
    <div class="section mx-auto px-4 grid grid-cols-2 gap-6 h-screen">

        <div class="flex flex-col justify-center gap-6">
            <p class="text-lg"><i class="fa-solid fa-heart text-red-500"></i> Loved by creators</p>

            <h1 class="text-8xl font-semibold">Launch your site in seconds</h1>


            <form class="p-1 bg-gradient-to-r from-amber-500 to-pink-500 rounded-lg w-full max-w-[26rem] flex">
                <div class="py-2 px-4 bg-white rounded-l w-full flex items-center">
                    <p>biolinkar.com/</p>
                    <input type="text" class="py-3 w-full focus:outline-none" placeholder="yourname">
                </div>
                <button class="bg-transparent w-32 text-white py-2 px-4 flex-shrink-0">
                    Claim Link
                </button>
            </form>

            <p>It's free, and takes less than a minute</p>
        </div>

        <div class="flex items-end">
            <img src="/images/cover-girl.png" class="w-full object-contain" alt="">
        </div>

    </div>
@endsection