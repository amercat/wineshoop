<?= $this->rendersection('content') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script>

    </script>
</head>

<body>
<?php foreach ($bottle as $bot) : ?>

    <!-- -->
    <div class="product__thumbnails_3g5 bind-2b124439-5eaf-4f75-8d3a-35feec38559a">
        <!-- -->
        <div class="product__thumbnails-item_1gU thumb_2rf">
            <div data-active-classname="item__active_15t" class="product__thumbnail-container_1bI" src="<?= $bot['picture'] ?? '' ?>;60dab2d0-24ee-44a0-a29c-e853c7cc964f/112" data-product-thumbnail="true" data-product-thumbnail-full="<?= $bot['full_name'] ?? '' ?>;e-c.storage.googleapis.com&#x2F;res&#x2F;60dab2d0-24ee-44a0-a29c-e853c7cc964f/original" data-product-thumbnail-type="image" data-product-thumbnail-ref=";60dab2d0-24ee-44a0-a29c-e853c7cc964f"><img class="product__thumbnails-item-inner_1Y-" src="&#x2F;&#x2F;e-c.storage.googleapis.com&#x2F;res&#x2F;60dab2d0-24ee-44a0-a29c-e853c7cc964f/112" alt="" loading="lazy" data-product-thumbnail-full="<?= $bot['full_name'] ?? '' ?>;e-c.storage.googleapis.com&#x2F;res&#x2F;60dab2d0-24ee-44a0-a29c-e853c7cc964f/original" data-product-thumbnail-type="image" /></div>
        </div>
        <!-- -->
    </div>

    <div class="w-grid__item w-grid__item--top">
        <div class="w-grid__item-inner w-grid__item-panel w-text-left w-088754deb0dd8820b733e12d9894218e">
            <div class="outer-wrapper_1y7">
                <div class="js-product-specs-template" data-test="product-specs" data-product-id="bfd1988a-85f3-4707-8730-4f47ffd6e7cf" data-variant-slug-id="bfd1988a-85f3-4707-8730-4f47ffd6e7cf" data-inventory-track="false" data-inventory-saldo="-15">
                    <div class="ui-text ui-text--light status_3Ze status-in-stock_1NI">En stock</div>
                    <h1 class="ui-heading ui-heading--light">
                    <span data-test="name"><?= $bot['full_name'] ?? '' ?>
                    </span> </h1>
                    <div class="ui-small ui-small--light code_2J6" data-product-code-text="Product code"><?= $bot['category_id'] ?? '' ?><!-- --> <!-- --></div>
                    <div class="ui-subheading ui-subheading--light prices_3Rl">
                        <span class="price-new_SV2" data-test="price"><?= $bot['current_price'] ?? '' ?>€</span>
                    </div>
                    <div class="options-wrapper_3re">

                    </div>
                    <div class="divider_1u0">

                    </div>
                    <div class="bottom-line_3Wj">
                        <div class="quantity_2Nd quantity-wrapper_3zc js-product-specs-quantity">
                            <input type="text" class="quantity-input_2vS" value="1" data-test="quantity-input" />
                            <div class="quantity-arrows_3Hc">
                                <svg class="product__input-quantity-arrow quantity-arrow_1OB js-product-specs-quantity-up" width="10" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.35.156a.474.474 0 00-.701 0L.111 5.264a.437.437 0 00-.111.29C0 5.8.207 6 .462 6h9.076c.11 0 .217-.038.3-.107a.435.435 0 00.05-.629L5.352.156z" fill="#9199AB"></path>
                                </svg>
                                <svg class="product__input-quantity-arrow quantity-arrow_1OB quantity-arrow-down_1wB js-product-specs-quantity-down" width="10" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.35.156a.474.474 0 00-.701 0L.111 5.264a.437.437 0 00-.111.29C0 5.8.207 6 .462 6h9.076c.11 0 .217-.038.3-.107a.435.435 0 00.05-.629L5.352.156z" fill="#9199AB"></path>
                                </svg>
                            </div>
                        </div>
                        <a class="js-buy-button buy-button_1Xp button_2W3 ui-button ui-button--primary-dark ui-button--size-md" data-test="buy-button" data-component="button">
                            <span class="button__border_1J- ui-button__border"></span>
                            <span class="button__inner_2of">
                            <span class="button__content_1_I">Add to cart</span>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!--CONTENT_PLACEHOLDER-->
<script src="//res2.yourwebsite.life/common/core.min.js"></script>
<script src="//res2.yourwebsite.life/site/617699e84960f1002e9364c5/view-6025516dace53b00219cf3a6.js"></script>
<script src="//res2.yourwebsite.life/site/617699e84960f1002e9364c5/main.js"></script>
</body>
</div>
</div>
</div>
</div>
</div>
</div>
</html>
