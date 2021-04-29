@extends('layouts.public')
@section('main-content')
<div class="mad-content no-pd">
    <div class="container wide">
      <div class="content-element-4">
        <!--================ Icon Boxes ================-->
        <div class="mad-icon-boxes style-2 hr-type item-col-3">
          <div class="mad-col">
            <!--================ Icon Box ================-->
            <article class="mad-icon-box">
              <i class="mad-icon-box-icon"><img class="svg" src="{{ asset('public-assets/Kunstwerk_svg_icons/truck.svg') }}" alt=""></i>
              <div class="mad-icon-box-content">
                <h2 class="mad-icon-box-title">Fast Delivery</h2>
                <p>We ship all over the world with DHL
                </p>
              </div>
            </article>
            <!--================ End of Icon Box ================-->
          </div>
          <div class="mad-col">
            <!--================ Icon Box ================-->
            <article class="mad-icon-box">
              <i class="mad-icon-box-icon"><img class="svg" src="{{ asset('public-assets/Kunstwerk_svg_icons/cart.svg') }}" alt=""></i>
              <div class="mad-icon-box-content">
                <h2 class="mad-icon-box-title">Secure Checkout</h2>
                <p>You can pay with PayPal even if you don’t have an account.
                </p>
              </div>
            </article>
            <!--================ End of Icon Box ================-->
          </div>
          <div class="mad-col">
            <!--================ Icon Box ================-->
            <article class="mad-icon-box">
              <i class="mad-icon-box-icon"><img class="svg" src="{{ asset('public-assets/Kunstwerk_svg_icons/box.svg') }}" alt=""></i>
              <div class="mad-icon-box-content">
                <h2 class="mad-icon-box-title">Free Returns</h2>
                <p>30-day return policy offered!
                </p>
              </div>
            </article>
            <!--================ End of Icon Box ================-->
          </div>
        </div>
        <!--================ End of Icon Boxes ================-->
      </div>
      <div class="mad-banner-wrap">
        <div class="col-lg-7">
          <!--================ Banner ================-->
          <div class="mad-banner">
            <img src="{{ asset('public-assets/images/1060x812_img1.jpg') }}" alt="">
            <div class="mad-banner-inner">
              <span class="mad-banner-cat">cosy bedding</span>
              <h2 class="mad-banner-title">Stay Warm
  and Look
  Great</h2>
              <a href="#" class="btn with-line btn-big"><span>shop now<i
                    class="licon-minus"></i></span></a>
            </div>
          </div>
          <!--================ End of Banner ================-->
          <div class="mad-join-us mad-colorizer--scheme-color-6">
            <div class="mad-colorizer-bg-color"><img class="svg mad-pattern" src="{{ asset('public-assets/images/background_pattern.svg') }}" alt=""></div>
            <div class="row align-items-center">
              <div class="col-lg-6">
                <h4 class="mad-title">Join Our Newsletter</h4>
                <p>Get the latest updates on new products and upcoming sales</p>
              </div>
              <div class="col-lg-6">
                <form class="mad-newsletter-form style-2">
                  <input type="email" name="email" placeholder="Your email address">
                  <button type="submit"><i class="icon licon-envelope"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <!--================ Banner ================-->
          <div class="mad-banner style-2">
            <a href="#" class="mad-banner-link"></a>
            <img src="{{ asset('public-assets/images/662x447_banner1.jpg') }}" alt="">
            <div class="mad-banner-inner">
              <span class="mad-banner-cat">Home Decor</span>
              <h3 class="mad-banner-title">Unique <br>
                Gift Ideas</h3>
              <a href="#" class="read-more">shop now</a>
            </div>
          </div>
          <!--================ End of Banner ================-->
          <!--================ Banner ================-->
          <div class="mad-banner style-2 left-side">
            <a href="#" class="mad-banner-link"></a>
            <img src="{{ asset('public-assets/images/662x447_banner2.jpg')}}" alt="">
            <div class="mad-banner-inner">
              <span class="mad-banner-cat">Outdoor &amp; Gardening</span>
              <h3 class="mad-banner-title">Things That <br>
                Make You Smile</h3>
              <a href="#" class="read-more">shop now</a>
            </div>
          </div>
          <!--================ End of Banner ================-->
        </div>
      </div>
    </div>
    <div class="container">
      <div class="mad-section">
        <!--================ Tabs ================-->
        <div class="mad-tabs mad-shop">
          <div class="mad-tabs-holder">
            <h3 class="mad-page-title">Special Picked for You</h3>
            <!--================ Tabs Navigation ================-->
            <div role="tablist" aria-label="Tabs v1" class="mad-tabs-nav">
              <span class="mad-active"><a id="tab-1-link" href="#tab-1" role="tab" aria-selected="true" aria-controls="tab-1"
                  class="mad-ln--independent mad-tab-link">New</a>
              </span>
              <span><a id="tab-2-link" href="#tab-2" role="tab" aria-selected="false" aria-controls="tab-2"
                  class="mad-ln--independent mad-tab-link">Featured</a>
              </span>
              <span><a id="tab-3-link" href="#tab-3" role="tab" aria-selected="false" aria-controls="tab-3"
                  class="mad-ln--independent mad-tab-link">Popular</a>
              </span>
            </div>
            <!--================ End of Tabs Navigation ================-->
          </div>
          <!--================ Tabs Container ================-->
          <div class="mad-tabs-container">
            <!--================ Tab ================-->
            <div id="tab-1" tabindex="0" role="tabpanel" aria-labelledby="tab-1-link" class="mad-tab">
              <div class="mad-grid owl-carousel mad-products owl-dots mad-grid--cols-4">
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product1.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Small Animal Planter</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product2.jpg')}}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Double Dominique Posts</a></h5>
                      <span class="mad-product-price">$315.00</span>
                      <div class="rating-holder">
                        <div data-estimate="3" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <div class="mad-label">Sale</div>
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product3.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Steel Coffee Table</a></h5>
                      <span class="mad-product-price"><span>$539.00</span> $499.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product4.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Cosy Toddler Pillow</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product1.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Small Animal Planter</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product2.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Double Dominique Posts</a></h5>
                      <span class="mad-product-price">$315.00</span>
                      <div class="rating-holder">
                        <div data-estimate="3" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product3.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Steel Coffee Table</a></h5>
                      <span class="mad-product-price"><span>$539.00</span> $499.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product4.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Cosy Toddler Pillow</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product1.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Small Animal Planter</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product2.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Double Dominique Posts</a></h5>
                      <span class="mad-product-price">$315.00</span>
                      <div class="rating-holder">
                        <div data-estimate="3" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product3.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Steel Coffee Table</a></h5>
                      <span class="mad-product-price"><span>$539.00</span> $499.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product4.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Cosy Toddler Pillow</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
              </div>
            </div>
            <!--================ End of Tab ================-->
            <!--================ Tab ================-->
            <div id="tab-2" tabindex="0" role="tabpanel" aria-labelledby="tab-2-link" class="mad-tab">
              <div class="mad-grid owl-carousel mad-products owl-dots mad-grid--cols-4">
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product1.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Small Animal Planter</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product2.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Double Dominique Posts</a></h5>
                      <span class="mad-product-price">$315.00</span>
                      <div class="rating-holder">
                        <div data-estimate="3" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product3.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Steel Coffee Table</a></h5>
                      <span class="mad-product-price"><span>$539.00</span> $499.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product4.jpg')}}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Cosy Toddler Pillow</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product1.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Small Animal Planter</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product2.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Double Dominique Posts</a></h5>
                      <span class="mad-product-price">$315.00</span>
                      <div class="rating-holder">
                        <div data-estimate="3" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product3.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Steel Coffee Table</a></h5>
                      <span class="mad-product-price"><span>$539.00</span> $499.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product4.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Cosy Toddler Pillow</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product1.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Small Animal Planter</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product2.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Double Dominique Posts</a></h5>
                      <span class="mad-product-price">$315.00</span>
                      <div class="rating-holder">
                        <div data-estimate="3" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product3.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Steel Coffee Table</a></h5>
                      <span class="mad-product-price"><span>$539.00</span> $499.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product4.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Cosy Toddler Pillow</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
              </div>
            </div>
            <!--================ End of Tab ================-->
            <!--================ Tab ================-->
            <div id="tab-3" tabindex="0" role="tabpanel" aria-labelledby="tab-3-link" class="mad-tab">
              <div class="mad-grid owl-carousel mad-products owl-dots mad-grid--cols-4">
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product1.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Small Animal Planter</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product2.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Double Dominique Posts</a></h5>
                      <span class="mad-product-price">$315.00</span>
                      <div class="rating-holder">
                        <div data-estimate="3" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/"images/261x259_product3.jpg')}}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Steel Coffee Table</a></h5>
                      <span class="mad-product-price"><span>$539.00</span> $499.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product4.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Cosy Toddler Pillow</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product1.jpg')}}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Small Animal Planter</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product2.jpg')}}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Double Dominique Posts</a></h5>
                      <span class="mad-product-price">$315.00</span>
                      <div class="rating-holder">
                        <div data-estimate="3" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product3.jpg')}}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Steel Coffee Table</a></h5>
                      <span class="mad-product-price"><span>$539.00</span> $499.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product4.jpg')}}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Cosy Toddler Pillow</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product1.jpg')}}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Small Animal Planter</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product2.jpg')}}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Double Dominique Posts</a></h5>
                      <span class="mad-product-price">$315.00</span>
                      <div class="rating-holder">
                        <div data-estimate="3" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product3.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Steel Coffee Table</a></h5>
                      <span class="mad-product-price"><span>$539.00</span> $499.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
                <div class="mad-grid-item">
                  <!-- Product -->
                  <div class="mad-product">
                    <figure class="mad-product-image">
                      <a href="#"><img src="{{ asset('public-assets/images/261x259_product4.jpg') }}" alt=""></a>
                      <div class="overlay">
                        <a href="#" class="btn">Add to Cart</a>
                      </div>
                    </figure>
                    <!-- product-info -->
                    <div class="mad-product-description">
                      <h5 class="mad-product-title"><a href="#">Cosy Toddler Pillow</a></h5>
                      <span class="mad-product-price">$42.00</span>
                      <div class="rating-holder">
                        <div data-estimate="4" class="mad-rating"></div>
                      </div>
                    </div>
                    <!--/ product-info -->
                  </div>
                  <!-- End of Product -->
                </div>
              </div>
            </div>
            <!--================ End of Tab ================-->
          </div>
          <!--================ End of Tabs Container ================-->
        </div>
        <!--================ End of Tabs ================-->
      </div>
      <div class="mad-section no-pt">
        <h3 class="mad-page-title">Browse Popular Categories</h3>
        <!--================ Banners ================-->
        <div class="mad-banner-wrap">
          <div class="banner-col-2">
            <!--================ Banner ================-->
            <a href="#" class="mad-banner style-3 mad-ln--independent">
              <img src="{{ asset('public-assets/images/662x399_banner1.jpg') }}" alt="">
              <div class="mad-banner-inner">
                <h5 class="mad-banner-title">Bath & Beauty (364)</h5>
              </div>
            </a>
            <!--================ End of Banner ================-->
          </div>
          <div class="banner-col-2">
            <!--================ Banner ================-->
            <a href="#" class="mad-banner style-3 mad-ln--independent">
              <img src="{{ asset('public-assets/images/662x399_banner2.jpg') }}" alt="">
              <div class="mad-banner-inner">
                <h5 class="mad-banner-title">Wall Decor (429)</h5>
              </div>
            </a>
            <!--================ End of Banner ================-->
          </div>
          <div class="banner-col-3">
            <!--================ Banner ================-->
            <a href="#" class="mad-banner style-3 mad-ln--independent">
              <img src="{{ asset('public-assets/images/432x399_banner1.jpg') }}" alt="">
              <div class="mad-banner-inner">
                <h5 class="mad-banner-title">Kids' Furniture (138)</h5>
              </div>
            </a>
            <!--================ End of Banner ================-->
          </div>
          <div class="banner-col-3">
            <!--================ Banner ================-->
            <a href="#" class="mad-banner style-3 mad-ln--independent">
              <img src="{{ asset('public-assets/images/432x399_banner2.jpg') }}" alt="">
              <div class="mad-banner-inner">
                <h5 class="mad-banner-title">Jewellery & Accessories (655)</h5>
              </div>
            </a>
            <!--================ End of Banner ================-->
          </div>
          <div class="banner-col-3">
            <!--================ Banner ================-->
            <a href="#" class="mad-banner style-3 mad-ln--independent">
              <img src="{{ asset('public-assets/images/432x399_banner3.jpg')}}" alt="">
              <div class="mad-banner-inner">
                <h5 class="mad-banner-title">Baby & Toddler Toys (297)</h5>
              </div>
            </a>
            <!--================ End of Banner ================-->
          </div>
        </div>
        <!--================ End of Banners ================-->
      </div>
      <div class="mad-section with-separators no-btm-sep mad-section--stretched mad-colorizer--scheme-color-2">
        <h3 class="mad-page-title">Last Reviews</h3>
        <!--================ Testimonials ================-->
        <div class="mad-testimonials">
          <div class="mad-grid mad-grid--cols-2 owl-carousel owl-dots">
            <div class="mad-grid-item">
              <!--================ Testimonial ================-->
              <div class="mad-testimonial">
                <div class="mad-author">
                  <div class="mad-author-photo">
                    <img src="{{ asset('public-assets/images/77x77_photo1.jpg')}}" alt="">
                  </div>
                  <div class="mad-author-info">
                    <cite id="testimonial-cite-1">Rebecca Johnson</cite>
                    wrote on 25 March
                  </div>
                </div>
                <div class="mad-testiomonial-info">
                  <div data-estimate="5" class="mad-rating"></div>
                  <blockquote aria-labelledby="testimonial-cite-1" class="mad-blockquote--unstyled">“Adorable and unique mug.
                    I’m very
                    happy with my purchase. Thanks ;)”</blockquote>
                  <div class="mad-testimonial-cat">
                    <img src="{{ asset('public-assets/images/70x70_img1.jpg') }}" alt="">
                    <span><a href="#">Watercolour Mugs</a></span>
                  </div>
                </div>
              </div>
              <!--================ End of Testimonial ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Testimonial ================-->
              <div class="mad-testimonial">
                <div class="mad-author">
                  <div class="mad-author-photo">
                    <img src="{{ asset('public-assets/images/77x77_photo2.jpg') }}" alt="">
                  </div>
                  <div class="mad-author-info">
                    <cite id="testimonial-cite-1">Adam Smith</cite>
                    wrote on 13 March
                  </div>
                </div>
                <div class="mad-testiomonial-info">
                  <div data-estimate="4" class="mad-rating"></div>
                  <blockquote aria-labelledby="testimonial-cite-2" class="mad-blockquote--unstyled">“Very cool wall hooks! They
                    look
                    perfect in my bathroom!”</blockquote>
                  <div class="mad-testimonial-cat">
                    <img src="{{ asset('public-assets/images/70x70_img2.jpg') }}" alt="">
                    <span><a href="#">Geometric Shelves</a></span>
                  </div>
                </div>
              </div>
              <!--================ End of Testimonial ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Testimonial ================-->
              <div class="mad-testimonial">
                <div class="mad-author">
                  <div class="mad-author-photo">
                    <img src="{{ asset('public-assets/images/77x77_photo3.jpg') }}" alt="">
                  </div>
                  <div class="mad-author-info">
                    <cite id="testimonial-cite-1">Amanda Jackson</cite>
                    wrote on 8 March
                  </div>
                </div>
                <div class="mad-testiomonial-info">
                  <div data-estimate="5" class="mad-rating"></div>
                  <blockquote aria-labelledby="testimonial-cite-1" class="mad-blockquote--unstyled">“Smells and looks great.
                    Super stylish.”</blockquote>
                  <div class="mad-testimonial-cat">
                    <img src="{{ asset('public-assets/images/70x70_img1.jpg') }}" alt="">
                    <span><a href="#">Watercolour Mugs</a></span>
                  </div>
                </div>
              </div>
              <!--================ End of Testimonial ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Testimonial ================-->
              <div class="mad-testimonial">
                <div class="mad-author">
                  <div class="mad-author-photo">
                    <img src="{{ asset('public-assets/images/77x77_photo2.jpg') }}" alt="">
                  </div>
                  <div class="mad-author-info">
                    <cite id="testimonial-cite-1">Adam Smith</cite>
                    wrote on 13 March
                  </div>
                </div>
                <div class="mad-testiomonial-info">
                  <div data-estimate="4" class="mad-rating"></div>
                  <blockquote aria-labelledby="testimonial-cite-2" class="mad-blockquote--unstyled">“Very cool wall hooks! They
                    look
                    perfect in my bathroom!”</blockquote>
                  <div class="mad-testimonial-cat">
                    <img src="{{ asset('public-assets/images/70x70_img2.jpg') }}" alt="">
                    <span><a href="#">Geometric Shelves</a></span>
                  </div>
                </div>
              </div>
              <!--================ End of Testimonial ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Testimonial ================-->
              <div class="mad-testimonial">
                <div class="mad-author">
                  <div class="mad-author-photo">
                    <img src="{{ asset('public-assets/images/77x77_photo1.jpg')}}" alt="">
                  </div>
                  <div class="mad-author-info">
                    <cite id="testimonial-cite-1">Rebecca Johnson</cite>
                    wrote on 25 March
                  </div>
                </div>
                <div class="mad-testiomonial-info">
                  <div data-estimate="5" class="mad-rating"></div>
                  <blockquote aria-labelledby="testimonial-cite-1" class="mad-blockquote--unstyled">“Adorable and unique mug.
                    I’m
                    very
                    happy with my purchase. Thanks ;)”</blockquote>
                  <div class="mad-testimonial-cat">
                    <img src="{{ asset('public-assets/images/70x70_img1.jpg')}}" alt="">
                    <span><a href="#">Watercolour Mugs</a></span>
                  </div>
                </div>
              </div>
              <!--================ End of Testimonial ================-->
            </div>
            <div class="mad-grid-item">
              <!--================ Testimonial ================-->
              <div class="mad-testimonial">
                <div class="mad-author">
                  <div class="mad-author-photo">
                    <img src="{{ asset('public-assets/images/77x77_photo2.jpg')}}" alt="">
                  </div>
                  <div class="mad-author-info">
                    <cite id="testimonial-cite-1">Adam Smith</cite>
                    wrote on 13 March
                  </div>
                </div>
                <div class="mad-testiomonial-info">
                  <div data-estimate="4" class="mad-rating"></div>
                  <blockquote aria-labelledby="testimonial-cite-2" class="mad-blockquote--unstyled">“Very cool wall hooks! They
                    look
                    perfect in my bathroom!”</blockquote>
                  <div class="mad-testimonial-cat">
                    <img src="{{ asset('public-assets/images/70x70_img2.jpg') }}" alt="">
                    <span><a href="#">Geometric Shelves</a></span>
                  </div>
                </div>
              </div>
              <!--================ End of Testimonial ================-->
            </div>
          </div>
        </div>
        <!--================ End of Testimonials ================-->
      </div>
      <article
        class="mad-cta with-separators color-top-2 mad-section mad-section--stretched mad-colorizer--scheme-light mad-colorizer--scheme-color-3 mad-cta-color align-center">
        <div class="mad-colorizer-bg-color"><img class="svg mad-pattern" src="{{ asset('public-assets/images/background_pattern.svg')}}" alt=""></div>
        <div class="container">
          <h2 class="mad-cta-title title-big">Start Selling on Kunstwerk</h2>
          <p>Millions of shoppers can't wait to see what you have in store.</p>
          <a href="#" class="btn btn-style-3 btn-huge">Get Started</a>
        </div>
      </article>
      <div class="mad-section">
        <h3 class="mad-page-title">Latest News</h3>
        <!--================ Image Boxes (Style 1) ================-->
        <div class="mad-image-boxes item-col-3">
          <div class="mad-col">
            <!--================ Image Box ================-->
            <div class="mad-image-box">
              <div class="mad-image-box-media"><a href="#" class="mad-ln--independent"><img src="{{ asset('public-assets/images/432x308_img1.jpg')}}" alt=""></a></div>
              <div class="image-box-content">
                <div class="mad-box-meta">
                  <time datetime="2019-11-28">November 28, 2019</time> | <a href="#" class="link-color-3">Work Process</a>
                </div>
                <h2 class="mad-image-box-title"><a href="#">Aliquam Erat Volutpat Donec Sit</a></h2>
                <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit
                  amet,
                  consectetuer...</p>
                <div class="image-box-actions">
                  <a href="#" class="read-more">read more</a>
                  <a href="#" class="mad-ln--independent"><i class="licon-bubble"></i> 2</a>
                </div>
              </div>
            </div>
            <!--================ End of Image Box ================-->
          </div>
          <div class="mad-col">
            <!--================ Image Box ================-->
            <div class="mad-image-box">
              <div class="mad-image-box-media"><a href="#" class="mad-ln--independent"><img src="{{ asset('public-assets/images/432x308_img2.jpg') }}"
                    alt=""></a></div>
              <div class="image-box-content">
                <div class="mad-box-meta">
                  <time datetime="2019-11-20">November 20, 2019</time> | <a href="#" class="link-color-3">News</a>
                </div>
                <h2 class="mad-image-box-title"><a href="#">Donec Porta Diam Eu Massa</a></h2>
                <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus
                  eleifend,
                  elit...</p>
                <div class="image-box-actions">
                  <a href="#" class="read-more">read more</a>
                  <a href="#" class="mad-ln--independent"><i class="licon-bubble"></i> 0</a>
                </div>
              </div>
            </div>
            <!--================ End of Image Box ================-->
          </div>
          <div class="mad-col">
            <!--================ Image Box ================-->
            <div class="mad-image-box">
              <div class="mad-image-box-media"><a href="#" class="mad-ln--independent"><img src="{{ asset('public-assets/images/432x308_img3.jpg') }}"
                    alt=""></a></div>
              <div class="image-box-content">
                <div class="mad-box-meta">
                  <time datetime="2019-11-16">November 16, 2019</time> | <a href="#" class="link-color-3">Work Process</a>
                </div>
                <h2 class="mad-image-box-title"><a href="#">Fusce Euismod Consequat Ante</a></h2>
                <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum
                  libero nisl,
                  porta vel...</p>
                <div class="image-box-actions">
                  <a href="#" class="read-more">read more</a>
                  <a href="#" class="mad-ln--independent"><i class="licon-bubble"></i> 5</a>
                </div>
              </div>
            </div>
            <!--================ End of Image Box ================-->
          </div>
        </div>
        <!--================ End of Image Boxes (Style 1) ================-->
      </div>
    </div>
  </div>
@endsection