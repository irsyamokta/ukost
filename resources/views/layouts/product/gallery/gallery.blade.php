@include('layouts.product.gallery.drawergallery')
<div class="swiper-container relative h-64 w-full overflow-hidden md:hidden">
    <div class="swiper-wrapper">
        <div class="swiper-slide flex items-center justify-center">
            <div class="relative h-64 w-full overflow-hidden">
                <img loading="lazy" class="h-full w-full cursor-pointer object-cover" src="/assets/product-1.png"
                    alt="Gambar 1" />
            </div>
        </div>
        <div class="swiper-slide flex items-center justify-center">
            <div class="relative h-64 w-full overflow-hidden">
                <img loading="lazy" class="h-full w-full cursor-pointer object-cover" src="/assets/product-2.png"
                    alt="Gambar 1" />
            </div>
        </div>
        <div class="swiper-slide flex items-center justify-center">
            <div class="relative h-64 w-full overflow-hidden">
                <img loading="lazy" class="h-full w-full cursor-pointer object-cover" src="/assets/product-3.webp"
                    alt="Gambar 1" />
            </div>
        </div>
        <div class="swiper-slide flex items-center justify-center">
            <div class="relative h-64 w-full overflow-hidden">
                <img loading="lazy" class="h-full w-full cursor-pointer object-cover" src="/assets/product-4.jpg"
                    alt="Gambar 1" />
            </div>
        </div>
        <div class="swiper-slide flex items-center justify-center">
            <div class="relative h-64 w-full overflow-hidden">
                <img loading="lazy" class="h-full w-full cursor-pointer object-cover" src="/assets/product-5.webp"
                    alt="Gambar 1" />
            </div>
        </div>
        <div class="swiper-slide flex items-center justify-center">
            <div class="relative h-64 w-full overflow-hidden">
                <img loading="lazy" class="h-full w-full object-cover" src="/assets/product-6.jpg" alt="Gambar 1" />
            </div>
        </div>
    </div>
    <div class="swiper-pagination z-10"></div>
</div>
<!-- Medium -->
<div class="mx-auto hidden w-full max-w-screen-xl px-4 py-5 md:block">
    <div class="relative grid grid-cols-4 grid-rows-2 gap-2 overflow-hidden rounded-lg">
        <!-- Child Main -->
        <div class="col-span-2 row-span-2 bg-gray-200 hover:bg-blend-multiply">
            <a href="">
                <img class="h-full w-full bg-cover bg-center transition duration-300 hover:opacity-80"
                    src="/assets/product-1.png" alt="" />
            </a>
        </div>
        <!-- Child Support -->
        <div class="bg-gray-300 hover:bg-blend-multiply">
            <a href="">
                <img class="h-full w-full transition duration-300 hover:opacity-80" src="/assets/product-2.png"
                    alt="" />
            </a>
        </div>
        <div class="bg-gray-400 hover:bg-blend-multiply">
            <a href="">
                <img class="h-full w-full transition duration-300 hover:opacity-80" src="/assets/product-3.webp"
                    alt="" />
            </a>
        </div>
        <div class="bg-gray-500 hover:bg-blend-multiply">
            <a href="">
                <img class="h-full w-full transition duration-300 hover:opacity-80" src="/assets/product-4.jpg"
                    alt="" />
            </a>
        </div>
        <div class="bg-gray-500 hover:bg-blend-multiply">
            <a href="">
                <img class="h-full w-full transition duration-300 hover:opacity-80" src="/assets/product-5.webp"
                    alt="" />
            </a>
        </div>
        <button
            class="absolute bottom-3 right-3 rounded-lg border bg-white/60 px-5 py-2.5 text-sm font-medium text-gray-700 backdrop-blur-sm transition-transform hover:bg-white/80 active:scale-95" type="button" data-drawer-target="drawer-top-example" data-drawer-show="drawer-top-example"
            data-drawer-placement="top" aria-controls="drawer-top-example">
            Lihat Foto
        </button>
    </div>
</div>
