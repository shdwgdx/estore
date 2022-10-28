<div class="col-lg-4 col-sm-6 mb-3">
    <div class="product-card">
        <div class="product-tumb">
            <a href="product.html"><img src="img/products/imac_1.jpg" alt="image"></a>
        </div>
        <div class="product-details">
            <h4><a href="product.html">{{ $title }}</a></h4>
            <p>{{ $description }}</p>
            <div class="product-bottom-details d-flex justify-content-between">
                <div class="product-price">
                    <small>{{ $price }}</small>${{ round($price - ($price * $discount) / 100, 2) }}
                </div>
                <div class="product-links">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                    <a href="#"><i class="far fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
