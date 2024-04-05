<div class="flex justify-between pt-10 pb-8 px-8 bg-white" id="user-details">
    {{-- main user details --}}
    <div class="flex flex-col items-start gap-3" id="highlights">
        <p class="text-4xl font-bold text-stone-600">Swagata Mukherjee</p>
        <p class="text-xl font-semibold text-stone-500">Student at Techno India Hooghly</p>
        <div>
            <a href="#" class="text-blue-700 font-bold hover:underline hover:underline-offset-2">1500
                followers</a>
        </div>
        @if ($friend)
            <div class="flex gap-4">
                <button
                    class="rounded-3xl px-6 py-2 font-bold tracking-wide bg-blue-600 text-white hover:bg-blue-700 flex items-center gap-2">
                    <span>Message</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M10 3c-4.31 0-8 3.033-8 7 0 2.024.978 3.825 2.499 5.085a3.478 3.478 0 0 1-.522 1.756.75.75 0 0 0 .584 1.143 5.976 5.976 0 0 0 3.936-1.108c.487.082.99.124 1.503.124 4.31 0 8-3.033 8-7s-3.69-7-8-7Zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm-2-1a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm5 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
                <button
                    class="rounded-3xl px-6 py-2 font-bold tracking-wide bg-red-600 text-white hover:bg-red-700 flex items-center gap-2">
                    <span>Unfriend</span>
                    <span>
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path
                                d="M10 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM1.615 16.428a1.224 1.224 0 0 1-.569-1.175 6.002 6.002 0 0 1 11.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 0 1 7 18a9.953 9.953 0 0 1-5.385-1.572ZM16.25 5.75a.75.75 0 0 0-1.5 0v2h-2a.75.75 0 0 0 0 1.5h2v2a.75.75 0 0 0 1.5 0v-2h2a.75.75 0 0 0 0-1.5h-2v-2Z" />
                        </svg> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path
                                d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM2.046 15.253c-.058.468.172.92.57 1.175A9.953 9.953 0 0 0 8 18c1.982 0 3.83-.578 5.384-1.573.398-.254.628-.707.57-1.175a6.001 6.001 0 0 0-11.908 0ZM12.75 7.75a.75.75 0 0 0 0 1.5h5.5a.75.75 0 0 0 0-1.5h-5.5Z" />
                        </svg>
                    </span>
                </button>
            </div>
        @else
            <button
                class="rounded-3xl px-6 py-2 font-bold tracking-wide bg-blue-600 text-white hover:bg-blue-700 flex items-center gap-2">
                <span>Add Friend</span>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path
                            d="M10 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM1.615 16.428a1.224 1.224 0 0 1-.569-1.175 6.002 6.002 0 0 1 11.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 0 1 7 18a9.953 9.953 0 0 1-5.385-1.572ZM16.25 5.75a.75.75 0 0 0-1.5 0v2h-2a.75.75 0 0 0 0 1.5h2v2a.75.75 0 0 0 1.5 0v-2h2a.75.75 0 0 0 0-1.5h-2v-2Z" />
                    </svg>
                </span>
            </button>
        @endif
    </div>
    {{-- contact details --}}
    <div class="pr-4" id="contact">
        <p class="text-center text-stone-700 font-bold">Contact Information</p>
        <div class="flex flex-col gap-4 mt-2 text-stone-600">
            {{-- card-1 --}}
            <div>
                <div class="flex items-center justify-start">
                    {{-- <span class="material-symbols-outlined text-xl">
                        call
                    </span> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-5 h-5 text-xl">
                        <path fill-rule="evenodd"
                            d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z"
                            clip-rule="evenodd" />
                    </svg>

                    <span class="ml-3 text-sm font-semibold">9874963681</span>
                </div>
            </div>
            {{-- card-2 --}}
            <div>
                <div class="flex items-center justify-start">
                    {{-- <span class="material-symbols-outlined text-xl">
                        mail
                    </span> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-5 h-5 text-xl">
                        <path
                            d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z" />
                        <path
                            d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z" />
                    </svg>

                    <span class="ml-3 text-sm font-semibold">swagata@mukherjee</span>
                </div>
            </div>
            {{-- card-3 --}}
            <div>
                <div class="flex items-center justify-start">
                    {{-- <span class="material-symbols-outlined text-xl">
                        home
                    </span> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-5 h-5 text-xl">
                        <path fill-rule="evenodd"
                            d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z"
                            clip-rule="evenodd" />
                    </svg>

                    <span class="ml-3 text-sm font-semibold">Hooghly, West Bengal, India</span>
                </div>
            </div>
        </div>
    </div>
</div>
