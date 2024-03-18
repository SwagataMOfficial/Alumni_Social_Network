@extends('layouts.main')
@push('title')
    <title>Profile-Name | Alumni Junction</title>
@endpush
@section('main-section')
    {{-- background (main container of everything) --}}
    <div class="container bg-gray-200">
        {{-- sub container that holds the profile section and the suggested people section --}}
        <div class="w-10/12 mx-auto pt-3 flex justify-center gap-10">
            {{-- profile section container --}}
            <div class="w-3/4">
                {{-- profile section/block --}}
                <div class="rounded-xl overflow-hidden relative mb-3">
                    <img class="w-full h-40 object-cover" src="/storage/cover.jpg" alt="background image" id="profile-cover">
                    <img class="absolute top-16 left-8 z-10 w-32 aspect-square rounded-[50%] object-cover outline outline-slate-500"
                        src="/storage/profile.jpg" alt="profile picture" id="profile-picture">
                    {{-- user's profile highlights block (cover image, profile photo, name, etc...) --}}
                    <x-profilesection />
                </div>
                {{-- sctivity block below the user details block --}}
                <div class="rounded-xl overflow-hidden relative bg-white pb-4">
                    <h3 class="text-black font-bold text-2xl pl-8 pt-3">Activity</h3>
                    {{-- navigation of posts, images, jobs --}}
                    <nav class="pl-12 mt-4 flex gap-4">
                        @if (Request::is('profile/posts/*'))
                            <a href="{{ url('/') }}/profile/posts/1"
                                class="bg-sky-200 border-2 border-cyan-500 px-6 py-1 rounded-3xl hover:bg-lime-200 hover:border-green-500 font-semibold"
                                data-active="true">Posts</a>
                        @else
                            <a href="{{ url('/') }}/profile/posts/1"
                                class="bg-lime-200 border-2 border-green-500 px-6 py-1 rounded-3xl hover:bg-sky-200 hover:border-cyan-500 font-semibold">Posts</a>
                        @endif

                        @if (Request::is('profile/images/*'))
                            <a href="{{ url('/') }}/profile/images/{{ 1 }}"
                                class="bg-sky-200 border-2 border-cyan-500 px-6 py-1 rounded-3xl hover:bg-lime-200 hover:border-green-500 font-semibold"
                                data-active="true">Images</a>
                        @else
                            <a href="{{ url('/') }}/profile/images/{{ 1 }}"
                                class="bg-lime-200 border-2 border-green-500 px-6 py-1 rounded-3xl hover:bg-sky-200 hover:border-cyan-500 font-semibold">Images</a>
                        @endif

                        @if (Request::is('profile/jobs/*'))
                            <a href="{{ url('/') }}/profile/jobs/{{ 1 }}"
                                class="bg-sky-200 border-2 border-cyan-500 px-6 py-1 rounded-3xl hover:bg-lime-200 hover:border-green-500 font-semibold"
                                data-active="true">Jobs</a>
                        @else
                            <a href="{{ url('/') }}/profile/jobs/{{ 1 }}"
                                class="bg-lime-200 border-2 border-green-500 px-6 py-1 rounded-3xl hover:bg-sky-200 hover:border-cyan-500 font-semibold">Jobs</a>
                        @endif
                    </nav>
                    @if ($profileStatus)
                        {{-- 
                        * TODO: add posts/photos/jobs
                    --}}
                        <div class="mx-16 mt-4 gap-6 grid grid-cols-4">
                            @for ($i = 1; $i <= 7; $i++)
                                <a href="{{ url('/') }}/post/1" class="hover:opacity-90">
                                    <img class="w-auto aspect-square rounded-2xl" src="/storage/cover.jpg"
                                        alt="posted image">
                                </a>
                            @endfor
                        </div>
                    @else
                        <x-privacy />
                    @endif
                </div>
            </div>
            {{-- suggested people block --}}
            <div class="w-1/4 rounded-xl h-fit bg-white px-4 py-3 sticky top-3">
                <h3 class="font-bold text-stone-700">More Peoples for You</h3>
                <div class="flex flex-col gap-3 items-center justify-center mt-2">
                    @for ($i = 1; $i <= 4; $i++)
                        <x-people username="Swagata Mukherjee" about="Student at Techno India Hooghly"
                            imageLink="profile.jpg" />
                    @endfor
                </div>
                <div class="pt-3 px-4">
                    <a class="flex text-stone-600 hover:text-stone-900 text-sm" href="#">
                        <span class="font-semibold">View all</span>
                        {{-- <span class="material-symbols-outlined">arrow_drop_down</span> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M9.47 15.28a.75.75 0 0 0 1.06 0l4.25-4.25a.75.75 0 1 0-1.06-1.06L10 13.69 6.28 9.97a.75.75 0 0 0-1.06 1.06l4.25 4.25ZM5.22 6.03l4.25 4.25a.75.75 0 0 0 1.06 0l4.25-4.25a.75.75 0 0 0-1.06-1.06L10 8.69 6.28 4.97a.75.75 0 0 0-1.06 1.06Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
