@extends('app')

@section('main')

    {{-- COVER --}}
    <div class="section mx-auto px-4 grid grid-cols-2 gap-6 h-screen">

        {{-- LEFT --}}
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
        {{-- LEFT --}}

        {{-- RIGHT --}}
        <div class="flex items-end">
            <img src="/images/cover-girl.png" class="w-full object-contain" alt="">
        </div>
        {{-- RIGHT --}}

    </div>
    {{-- COVER --}}



    {{-- FEATURES --}}
    <div class="section mx-auto px-4 py-24 flex flex-col gap-12">

        {{-- SECTION HEADER --}}
        <h2 class="text-6xl font-semibold text-center leading-[5rem]">
            Unmatchable features. <br> 
            <span class="bg-gradient-to-r from-amber-500 to-pink-500 inline-block text-transparent bg-clip-text">Free, forever.</span>
        </h2>
        {{-- SECTION HEADER --}}


        {{-- SECTION CONTENT --}}
        <div class="grid grid-cols-2 gap-6 w-full max-w-4xl mx-auto">

            {{-- FEATURE ITEM --}}
            <div class="bg-white shadow rounded-xl p-6 h-96 relative overflow-hidden">

                <div class="w-full max-w-64 h-full mx-auto rounded-t-xl overflow-hidden">
                    <img src="/images/demo-theme.webp" class="w-full max-w-64 mx-auto" alt="">
                </div>

                <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-white via-white px-8 pb-8 pt-20">
                    <h3 class="text-center text-2xl font-semibold">Pick a theme or <br> design your own</h3>
                </div>

            </div>
            {{-- FEATURE ITEM --}}


            {{-- FEATURE ITEM --}}
            <div class="bg-white shadow rounded-xl p-6 h-96 relative overflow-hidden">

                <div class="w-full max-w-64 h-full mx-auto rounded-t-xl overflow-hidden">
                    <img src="/images/demo-apps.jpg" class="w-full max-w-64 mx-auto" alt="">
                </div>

                <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-white via-white px-8 pb-8 pt-20">
                    <h3 class="text-center text-2xl font-semibold">Embed your favorite <br> apps and content</h3>
                </div>

            </div>
            {{-- FEATURE ITEM --}}

            {{-- FEATURE ITEM --}}
            <div class="bg-white shadow rounded-xl p-6 h-96 relative overflow-hidden">

                <div class="w-full max-w-64 h-full mx-auto rounded-t-xl overflow-hidden">
                    <img src="/images/demo-chart.jpg" class="w-full max-w-64 mx-auto" alt="">
                </div>

                <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-white via-white px-8 pb-8 pt-20">
                    <h3 class="text-center text-2xl font-semibold">Keep track of everything, <br> only for your eyes</h3>
                </div>

            </div>
            {{-- FEATURE ITEM --}}


            {{-- FEATURE ITEM --}}
            <div class="bg-white shadow rounded-xl p-6 h-96 relative overflow-hidden">

                <div class="w-full max-w-64 h-full mx-auto rounded-t-xl overflow-hidden">
                    <img src="/images/demo-qr.jpg" class="w-full max-w-64 mx-auto" alt="">
                </div>

                <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-white via-white px-8 pb-8 pt-20">
                    <h3 class="text-center text-2xl font-semibold">Keep track of everything, <br> only for your eyes</h3>
                </div>

            </div>
            {{-- FEATURE ITEM --}}

        </div>
        {{-- SECTION CONTENT --}}

    </div>
    {{-- FEATURES --}}



    {{-- ALL FEATURES --}}
    <div class="section py-24 px-4 mx-auto flex flex-col gap-12">

        {{-- SECTION HEADER --}}
        <h2 class="text-6xl font-semibold text-center leading-[5rem]">
            For creators who <br> 
            <span class="bg-gradient-to-r from-amber-500 to-pink-500 inline-block text-transparent bg-clip-text">want more.</span>
        </h2>
        {{-- SECTION HEADER --}}


        {{-- SECTION CONTENT --}}
        <div class="grid grid-cols-3 gap-8">

            {{-- FEATURE ITEM --}}
            <div class="p-8 bg-white rounded-xl shadow flex flex-col gap-6">

                <div class="p-4 flex items-center bg-amber-300 rounded-lg">
                    <h3 class="text-xl font-semibold">Create Unlimited Pages</h3>
                </div>

                <p class="text-gray-500 leading-6">Create unlimited unique & highly customizable bio link page with ease.</p>

            </div>
            {{-- FEATURE ITEM --}}


            {{-- FEATURE ITEM --}}
            <div class="p-8 bg-white rounded-xl shadow flex flex-col gap-6">

                <div class="p-4 flex items-center bg-purple-300 rounded-lg">
                    <h3 class="text-xl font-semibold">Build an email list</h3>
                </div>

                <p class="text-gray-500 leading-6">Grow your email list effortlessly with integrated signup forms and tracking.</p>

            </div>
            {{-- FEATURE ITEM --}}

            {{-- FEATURE ITEM --}}
            <div class="p-8 bg-white rounded-xl shadow flex flex-col gap-6">

                <div class="p-4 flex items-center bg-rose-300 rounded-lg">
                    <h3 class="text-xl font-semibold">Publish posts and alert</h3>
                </div>

                <p class="text-gray-500 leading-6">Share updates instantly and notify your audience with real-time alerts.</p>

            </div>
            {{-- FEATURE ITEM --}}


        </div>
        {{-- SECTION CONTENT --}}

    </div>
    {{-- ALL FEATURES --}}



    {{-- CTA SECTION --}}
    <div class="py-24 px-4">
        <div class="section p-16 mx-auto bg-gradient-to-r from-pink-500 to-rose-500 rounded-2xl shadow flex justify-between items-center text-white">
            <div>
                <h2 class="text-6xl font-semibold mb-6">Get started</h2>
                <h3 class="text-lg w-full max-w-sm">Start using the swiss army knife for the marketers.</h3>
            </div>
            
            <a href="" class="flex items-center gap-3 bg-gray-700 py-4 px-10 rounded-md text-lg">
                <span>Sign up</span> <i class="fa-solid fa-arrow-right-long"></i>
            </a>
        </div>
    </div>
    {{-- CTA SECTION --}}


    {{-- FOOTER --}}

    <div class="bg-white py-12">
        <div class="section mx-auto px-4 flex items-center justify-between">
            <div class="flex flex-col gap-6">
                <a href="" class="w-fit">
                    <p class="text-2xl font-medium">BioLinkar</p>
                </a>
                <p class="text-gray-400">&copy; 2024 | Biolinkar</p>
            </div>
            <div class="flex flex-col gap-6">
                <ul class="flex items-center gap-3">
                    <li><a href="" class="hover:text-gray-500">Home</a></li>
                    <li><a href="" class="hover:text-gray-500">Terms of use</a></li>
                    <li><a href="" class="hover:text-gray-500">Privacy Policy</a></li>
                    <li><a href="" class="hover:text-gray-500">Report</a></li>
                </ul>

                <ul class="flex items-center justify-end gap-3">
                    <li><a href="" class="hover:text-gray-500 text-xl"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="" class="hover:text-gray-500 text-xl"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="" class="hover:text-gray-500 text-xl"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- FOOTER --}}
@endsection