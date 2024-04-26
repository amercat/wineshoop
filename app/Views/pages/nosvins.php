<body>
    <?= $this->rendersection('content') ?>



    </style>

    <div class="w-grid__inner">
        <div class="w-grid__item w-grid__item--top w-text-center">

            <div class="w-grid__item-inner w-088754deb0dd8820b733e12d9894218e w-grid__item-panel">

                <div class="product-wrapper_xQU js-product">


                    <div class="">

                        <div class="product-card-target-element_3Ex js-product-card-target-element">

                            <div class="product_1Cv ecommerce-product">
                                <div style="display:flex;">
                                    <?php foreach ($bottle as $bot) : ?>
                                        <div class="product-wrapper_xQU js-product">
                                            <img class="js-preview-img" alt="Pinot Noir" src="<?= $bot['picture']; ?>">
                                            <p class="ui-subheading w-subheading ui-text--light"><a href="/shop/syrah-copy" class="name_zKO" data-test="name"><?= $bot['full_name'] ? $bot['full_name'] : '' ?></a></p>
                                            <div class="price_3dp">
                                                <p class="ui-subheading w-subheading ui-subheading--light prices_2Yh">
                                                    <span class="price-new_2SJ ui-text--light"><?= $bot['current_price'] ?></span>
                                                </p>
                                            </div>
                                            <div class="product-button_3gl"><a class="js-buy-button  button_2W3 ui-button ui-button--primary-dark ui-button--size-md button--font-weight-bold_1Nu" data-test="buy-button" data-component="button"><span class="button__border_1J- ui-button__border"></span><span class="button__inner_2of"><span class="button__content_1_I">Add to cart</span></span></a></div>

                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>


    </template>
    </section>
    </div>
    <!--CONTENT_PLACEHOLDER-->
</body>