<div class="mx-auto w-full max-w-screen-xl px-4 pb-24 pt-5 md:pb-5">
    <div class="flex gap-5">
        <section class="w-full md:w-3/5 text-gray-900">
            @include('layouts.product.info.detail')
            <hr />
            @include('layouts.product.info.specification')
            @include('layouts.product.info.generalfacility')
            @include('layouts.product.info.roomfacility')
            @include('layouts.product.info.bathfacility')
            @include('layouts.product.info.rule')
            @include('layouts.product.info.description')
            @include('layouts.product.info.area')
            @include('layouts.product.info.other')
        </section>
        @include('layouts.product.form.form')
    </div>
    @include('layouts.product.recomendation.recomendation')
</div>
