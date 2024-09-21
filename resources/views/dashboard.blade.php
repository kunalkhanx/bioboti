@extends('app')

@section('main')

<div class="w-screen h-screen flex items-center">
    <div class="flex flex-col gap-12 section mx-auto">
        {{-- SECTION HEADER --}}
        <div>
            <h1 class="text-2xl font-medium text-gray-400 text-center w-full">Pages you manage</h1>
        </div>
        {{-- SECTION HEADER --}}

        {{-- SECTION CONTENT --}}
        <div class="grid grid-cols-3 gap-8">

            {{-- PAGE ITEM --}}
            <a href="#" class="rounded-xl shadow overflow-hidden col-start-2 relative">
                <div class="h-20 bg-amber-500 flex flex-col justify-end">
                    {{-- <p class="text-gray-500">biolinkar.com/<span class="font-semibold text-gray-700">kunal</span></p> --}}
                </div>
                <img src="https://www.svgrepo.com/show/452030/avatar-default.svg" class="w-14 h-14 rounded-full absolute bg-white border-2 top-8 left-6" alt="">
                <div class="py-4 px-6 bg-white text-sm">
                    <p class="text-gray-500 mb-3">biolinkar.com/<span class="font-semibold text-gray-700">kunal</span></p>

                    <div class="flex justify-between items-center text-gray-500">
                        <div title="Views">
                            <i class="fa-regular fa-eye"></i> 121
                        </div>

                        <div title="Notifications">
                            <i class="fa-regular fa-bell"></i> 7
                        </div>

                        <div title="Messages">
                            <i class="fa-regular fa-message"></i> 23
                        </div>
                    </div>
                </div>
            </a>
            {{-- PAGE ITEM --}}

        </div>
        {{-- SECTION CONTENT --}}
    </div>
</div>

@endsection