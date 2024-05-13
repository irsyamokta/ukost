<div class="py-7">
    <div class="mb-5">
        <h1 class="text-start text-xl font-semibold">Mungkin Kamu Suka</h1>
    </div>
    <div class="relative overflow-hidden rounded-lg">
        <div id="card-recomendation" class="flex items-center gap-4 overflow-x-scroll scroll-smooth p-2">
            @for ($i = 0; $i < 5; $i++)
                @include('layouts.product.recomendation.card')
            @endfor
            <button id="scrollLeftBtn"
                class="group absolute bottom-0 left-0 z-10 flex h-full cursor-pointer items-center justify-center px-4 py-2 text-gray-600 focus:outline-none">
                <span
                    class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/60 backdrop-blur-sm transition-transform group-hover:bg-white/80 group-focus:outline-none group-active:scale-95">
                    <svg class="h-4 w-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <!-- Tombol Scroll Kanan -->
            <button id="scrollRightBtn"
                class="group absolute bottom-0 right-0 z-10 flex h-full cursor-pointer items-center justify-center px-4 py-2 text-gray-600 focus:outline-none">
                <span
                    class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/60 backdrop-blur-sm transition-transform group-hover:bg-white/80 group-focus:outline-none group-active:scale-95">
                    <svg class="h-4 w-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1l4 4-4 4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
</div>
