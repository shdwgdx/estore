<section class="featured-products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">Рекомендуемые товары</h3>
            </div>

            @foreach ($products as $product)
                <x-card :title="$product->title" :description="$product->description" :price="$product->price" :discount="$product->discount" :image="$product->image">
                </x-card>
            @endforeach



        </div>
    </div>
</section>
