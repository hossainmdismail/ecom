<section class="product-tabs section-padding wow fadeIn animated">
    <div class="container">
        <div class="tab-header">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one"
                        type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two"
                        type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three"
                        type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                </li>
            </ul>
            <a href="#" class="view-more d-none d-md-flex">View More<i
                    class="fi-rs-angle-double-small-right"></i></a>
        </div>
        <!--End nav-tabs-->
        <div class="tab-content wow fadeIn animated" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">
                    @foreach ($featureds as $featured)
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('product.view', $featured->slugs) }}">
                                            @if ($featured->images)
                                                @foreach ($featured->images->take(2) as $key => $image)
                                                    <img class="{{ $key + 1 == 1 ? 'default-img' : 'hover-img' }}"
                                                        src="{{ asset('files/product/' . $image->image) }}"
                                                        alt="">
                                                @endforeach
                                            @endif
                                            {{-- <img class="" src="assets/imgs/shop/product-2-2.jpg" alt=""> --}}
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i
                                                class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a
                                            href="shop-grid-right.html">{{ $featured->category ? $featured->category->category_name : 'Random' }}</a>
                                    </div>
                                    <h2><a
                                            href="{{ route('product.view', $featured->slugs) }}">{{ $featured->name }}</a>
                                    </h2>
                                    {{-- <div class="rating-result" title="90%">
                                        <span>
                                            <span>90%</span>
                                        </span>
                                    </div> --}}
                                    <div class="product-price">
                                        <span>৳ {{ $featured->finalPrice }}</span>
                                        @if ($featured->discount != 0)
                                            <span class="old-price">{{ $featured->price }}</span>
                                        @endif
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            wire:click="addToCart({{ $featured->id }})"><i
                                                class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--End product-grid-4-->
            </div>
            <!--En tab one (Featured)-->
            <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                <div class="row product-grid-4">
                    @foreach ($populars as $pupolar)
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('product.view', $pupolar->slugs) }}">
                                            @if ($pupolar->images)
                                                @foreach ($pupolar->images->take(2) as $key => $image)
                                                    <img class="{{ $key + 1 == 1 ? 'default-img' : 'hover-img' }}"
                                                        src="{{ asset('files/product/' . $image->image) }}"
                                                        alt="">
                                                @endforeach
                                            @endif
                                            {{-- <img class="" src="assets/imgs/shop/product-2-2.jpg" alt=""> --}}
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up"
                                            href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a
                                            href="shop-grid-right.html">{{ $pupolar->category ? $pupolar->category->category_name : 'Random' }}</a>
                                    </div>
                                    <h2><a
                                            href="{{ route('product.view', $pupolar->slugs) }}">{{ $pupolar->name }}</a>
                                    </h2>
                                    {{-- <div class="rating-result" title="90%">
                                        <span>
                                            <span>90%</span>
                                        </span>
                                    </div> --}}
                                    <div class="product-price">
                                        <span>৳ {{ $pupolar->finalPrice }}</span>
                                        @if ($pupolar->discount != 0)
                                            <span class="old-price">{{ $pupolar->price }}</span>
                                        @endif
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            wire:click="addToCart({{ $pupolar->id }})"><i
                                                class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--End product-grid-4-->
            </div>
            <!--En tab two (Popular)-->
            <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                <div class="row product-grid-4">
                    @foreach ($latests as $latest)
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('product.view', $latest->slugs) }}">
                                            @if ($latest->images)
                                                @foreach ($latest->images->take(2) as $key => $image)
                                                    <img class="{{ $key + 1 == 1 ? 'default-img' : 'hover-img' }}"
                                                        src="{{ asset('files/product/' . $image->image) }}"
                                                        alt="">
                                                @endforeach
                                            @endif
                                            {{-- <img class="" src="assets/imgs/shop/product-2-2.jpg" alt=""> --}}
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up"
                                            href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a
                                            href="shop-grid-right.html">{{ $latest->category ? $latest->category->category_name : 'Random' }}</a>
                                    </div>
                                    <h2><a href="{{ route('product.view', $latest->slugs) }}">{{ $latest->name }}</a>
                                    </h2>
                                    {{-- <div class="rating-result" title="90%">
                                        <span>
                                            <span>90%</span>
                                        </span>
                                    </div> --}}
                                    <div class="product-price">
                                        <span>৳ {{ $latest->finalPrice }}</span>
                                        @if ($latest->discount != 0)
                                            <span class="old-price">{{ $latest->price }}</span>
                                        @endif
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            wire:click="addToCart({{ $latest->id }})"><i
                                                class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!--End product-grid-4-->
            </div>
            <!--En tab three (New added)-->
        </div>
        <!--End tab-content-->
    </div>
</section>
