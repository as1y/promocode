<div class="ps-page--shop" id="shop-sidebar">
    <div class="container">



        <div class="ps-layout--shop">


            <div class="ps-layout__left">

                <aside class="widget widget_shop">

                    <?php
                        renderFilter([
                            'catalogCategories'  => $RENDERFILTER['catalogCategories'],
                            'catalogCompany' =>  $RENDERFILTER['catalogCompany'],
                            'catalogBrands' => $RENDERFILTER['catalogBrands'],
                        ]);
                    ?>



                </aside>


            </div>
            <div class="ps-layout__right">
                <div class="ps-shopping ps-tab-root">
                    <div class="ps-shopping__header">

                        <p><strong> <?=count($tovari)?></strong> Товаров</p>
                        <div class="ps-shopping__actions">
                            <select name="sort" onchange="ChangeFilter()" class="ps-select" >
                                <option value="" > Сортировка</option>
                                <option value="used" <?= ($RENDERFILTER['sort'] == "used") ? "selected" : "" ?> >По популярности</option>
                                <option value="price" <?= ($RENDERFILTER['sort'] == "price") ? "selected" : "" ?> >По цене</option>
                                <option value="percentdiscount" <?= ($RENDERFILTER['sort'] == "percentdiscount") ? "selected" : "" ?>>По размеру скидки</option>
                            </select>
                        </div>
                    </div>
                    <div class="ps-tabs">
                        <div class="ps-tab active" id="tab-1">
                            <div class="ps-shopping-product">
                                <div class="row">

                                    <?php foreach ($tovari as $product):?>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <?php rendersmallproduct($product); ?>
                                        </div>

                                    <?php endforeach;?>







                                </div>
                            </div>
                            <div class="ps-pagination">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ps-tab" id="tab-2">
                            <div class="ps-shopping-product">
                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/1.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                            <p class="ps-product__vendor">Sold by:<a href="#">ROBERT’S STORE</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$1310.00</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/1.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Young Shop</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$1150.00</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/2.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Go Pro</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$42.99 - $60.00</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/3.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Go Pro</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$125.30</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/4.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Global Office</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$55.99</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/5.jpg" alt=""></a>
                                        <div class="ps-product__badge">-37%</div>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Robert's Store</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/6.jpg" alt=""></a>
                                        <div class="ps-product__badge">-5%</div>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Youngshop</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/7.jpg" alt=""></a>
                                        <div class="ps-product__badge">-16%</div>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Youngshop</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/8.jpg" alt=""></a>
                                        <div class="ps-product__badge">-16%</div>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>02</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Young shop</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/9.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>02</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Young shop</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$35.89</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/10.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Go Pro</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$29.39 - $39.99</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/11.jpg" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__vendor">Sold by:<a href="#">Robert's Store</a></p>
                                            <ul class="ps-product__desc">
                                                <li> Unrestrained and portable active stereo speaker</li>
                                                <li> Free from the confines of wires and chords</li>
                                                <li> 20 hours of portable capabilities</li>
                                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">$13.43</p><a class="ps-btn" href="#">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-pagination">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>