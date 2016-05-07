<div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6" ng-repeat="product in products">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <img src="img/product-2.jpg" alt="">
                    </div>
                    <h2><a href="">{{ product.name }}</a></h2>
                    <div class="product-carousel-price">
                        <ins>{{ product.price | currency }}</ins> <del>{{ product.price + 50 | currency }}</del>
                    </div>

                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>

        <ng-include src="'/js/angular/partials/pagination.html'"></ng-include>

    </div>

