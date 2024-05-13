<div class="mx-auto w-full max-w-screen-xl px-3 py-8">
    <div class="mb-7">
        <h1 class="text-start text-xl font-semibold md:text-2xl">
            Cari Kos Sesuai Budgetmu
        </h1>
    </div>
    <div class="mb-5 text-center text-sm font-medium text-gray-500">
        <!-- Category -->
        <ul class="flex w-fit flex-wrap gap-2">
            <li>
                <a href="#" class="inline-block rounded-lg p-3 hover:bg-gray-100">
                    < 800 Rb </a>
            </li>
            <li>
                <a href="#" class="active inline-block rounded-lg bg-bluePrimary p-3 text-white shadow-md"
                    aria-current="page">800 Rb - 1.500 Rb</a>
            </li>
            <li>
                <a href="#" class="inline-block rounded-lg p-3 hover:bg-gray-100">>1.500 Rb</a>
            </li>
        </ul>
    </div>
    <div class="relative overflow-hidden rounded-lg">
        <div id="card-budget"
            class="flex grid-cols-3 items-center gap-4 overflow-x-scroll scroll-smooth p-2 md:grid lg:grid-cols-4">
            @for ($i = 0; $i < 8; $i++)
                @include('layouts.filter.budget.card')
            @endfor
        </div>
        <div class="flex w-full items-center justify-center lg:justify-end">
            <button
                class="rounded-lg bg-bluePrimary px-5 py-2.5 text-sm font-medium text-white shadow-sm transition-transform hover:bg-blueSecond active:scale-95">
                Lihat Semua
            </button>
        </div>
    </div>
</div>
