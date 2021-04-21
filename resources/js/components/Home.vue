<template>
  <div>
    <!-- Slider Area -->
    <section class="hero-slider">
      <!-- Single Slider -->

      <!--/ End Single Slider -->
    </section>

    <section id="Gslider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li
          v-for="(banner, index) in banners"
          data-target="#Gslider"
          v-bind:data-slide-to="index"
          v-bind:class="{ active: index == 0 }"
          :key="banner.slug"
        ></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div
          class="carousel-item"
          v-for="(banner, index) in banners"
          :key="index"
          v-bind:class="{ active: index == 0 }"
        >
          <img class="first-slide" :src="banner.photo" :alt="'Slide' + index" />
          <div class="carousel-caption d-none d-md-block text-left">
            <h1 class="wow fadeInDown">{{ banner.title }}</h1>
            <p v-html="banner.description"></p>
            <a
              class="btn btn-lg ws-btn wow fadeInUpBig"
              href="http://vp2.test/laravel/product-grids"
              role="button"
              >Shop Now<i class="far fa-arrow-alt-circle-right"></i
            ></a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#Gslider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#Gslider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    <!--/ End Slider Area -->

    <!-- Start Small Banner  -->
    <section class="small-banner section">
      <div class="container-fluid">
        <div class="row">
          <!-- Single Banner  -->
          <div
            class="col-lg-4 col-md-6 col-12"
            v-for="(smallBanner, index) in smallBanners"
            :key="index"
          >
            <div class="single-banner">
              <img :src="smallBanner.photo" :alt="smallBanner.title" />
              <div class="content">
                <h3>{{ smallBanner.title }}</h3>
                <a href="http://vp2.test/laravel/product-cat/mens-fashion"
                  >Discover Now</a
                >
              </div>
            </div>
          </div>
          <!-- /End Single Banner  -->
        </div>
      </div>
    </section>
    <!-- End Small Banner -->

    <!-- Start Product Area -->
    <div class="product-area section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Trending Item</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="product-info">
              <div class="nav-main">
                <!-- Tab Nav -->
                <ul class="nav nav-tabs filter-tope-group" id="myTab" role="tablist">
                  <button class="btn" style="background: black" data-filter="*">
                    All Products
                  </button>
                  <button
                    v-for="(parentCategory, index) in parentCategories"
                    :key="index"
                    class="btn"
                    style="background: none; color: black"
                    v-bind:data-filter="'.' + parentCategory.id"
                  >
                    {{ parentCategory.title }}
                  </button>
                </ul>
                <!--/ End Tab Nav -->
              </div>
              <div
                class="tab-content isotope-grid"
                id="myTabContent"
                style="position: relative; height: 952.834px"
              >
                <!-- Start Single Tab -->
                <div
                  v-for="(product, index) in products"
                  :key="index"
                  class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item"
                  :class="'' + product.cat_id"
                  style="position: absolute; left: 0%; top: 0px"
                >
                  <div class="single-product">
                    <div class="product-img">
                      <a
                        href="http://vp2.test/laravel/product-detail/lorem-ipsum-is-simply-2008183507-655"
                      >
                        <img
                          class="default-img"
                          :src="product.photos[0]"
                          :alt="product.photos[0]"
                        />
                        <img
                          class="hover-img"
                          :src="product.photos[0]"
                          :alt="product.photos[0]"
                        />
                        <span :class="product.condition">{{ product.condition }}</span>
                      </a>
                      <div class="button-head">
                        <div class="product-action">
                          <a
                            data-toggle="modal"
                            v-bind:data-target="'#' + product.id"
                            title="Quick View"
                            href="#"
                            ><i class="ti-eye"></i><span>Quick Shop</span></a
                          >
                          <a
                            title="Wishlist"
                            href="http://vp2.test/laravel/wishlist/lorem-ipsum-is-simply-2008183507-655"
                            ><i class="ti-heart"></i><span>Add to Wishlist</span></a
                          >
                        </div>
                        <div class="product-action-2">
                          <a
                            title="Add to cart"
                            href="http://vp2.test/laravel/add-to-cart/lorem-ipsum-is-simply-2008183507-655"
                            >Add to cart</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="product-content">
                      <h3>
                        <a
                          href="http://vp2.test/laravel/product-detail/lorem-ipsum-is-simply-2008183507-655"
                          >Lorem Ipsum is simply</a
                        >
                      </h3>
                      <div class="product-price">
                        <span>$270.00</span>
                        <del style="padding-left: 4%">$300.00</del>
                      </div>
                    </div>
                  </div>
                </div>

                <!--/ End Single Tab -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Product Area -->

    <!-- Start Midium Banner  -->
    <section class="midium-banner">
      <div class="container">
        <div class="row">
          <!-- Single Banner  -->
          <div
            class="col-lg-6 col-md-6 col-12"
            v-for="(product, index) in featuredProducts"
            :key="index"
          >
            <div class="single-banner">
              <img :src="product.photos[0]" :alt="product.title" />
              <div class="content">
                <p>{{ product.cat_info.title }}</p>
                <h3>
                  {{ product.title }} <br />Up to<span> {{ product.discount }}%</span>
                </h3>
                <a href="http://vp2.test/laravel/product-detail/melange-casual-black"
                  >Shop Now</a
                >
              </div>
            </div>
          </div>
          <!-- /End Single Banner  -->
        </div>
      </div>
    </section>
    <!-- End Midium Banner -->

    <!-- Start Most Popular -->
    <div class="product-area most-popular section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Hot Item</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="owl-carousel popular-slider">
              <!-- Start Single Product -->
              <div
                class="single-product"
                v-for="(product, index) in hotProducts"
                :key="index"
              >
                <div class="product-img">
                  <a
                    href="http://vp2.test/laravel/product-detail/lorem-ipsum-is-simply-2008183507-655"
                  >
                    <img
                      class="default-img"
                      :src="product.photos[0]"
                      :alt="product.photos[0]"
                    />
                    <img
                      class="hover-img"
                      :src="product.photos[0]"
                      :alt="product.photos[0]"
                    />
                    <span class="hot">{{ product.condition }}</span>
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a
                        data-toggle="modal"
                        v-bind:data-target="'#' + product.id"
                        title="Quick View"
                        href="#"
                        ><i class="ti-eye"></i><span>Quick Shop</span></a
                      >
                      <a
                        title="Wishlist"
                        href="http://vp2.test/laravel/wishlist/lorem-ipsum-is-simply-2008183507-655"
                        ><i class="ti-heart"></i><span>Add to Wishlist</span></a
                      >
                    </div>
                    <div class="product-action-2">
                      <a
                        title="Add to cart"
                        href="http://vp2.test/laravel/add-to-cart/lorem-ipsum-is-simply-2008183507-655"
                        >Add to cart</a
                      >
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h3>
                    <a
                      href="http://vp2.test/laravel/product-detail/lorem-ipsum-is-simply-2008183507-655"
                      >Lorem Ipsum is simply</a
                    >
                  </h3>
                  <div class="product-price">
                    <span>$270.00</span>
                    <del style="padding-left: 4%">$300.00</del>
                  </div>
                </div>
              </div>
              <!--/ End Single Product -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Most Popular Area -->

    <!-- Start Shop Home List  -->
    <section class="shop-home-list section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="row">
              <div class="col-12">
                <div class="shop-section-title">
                  <h1>Latest Items</h1>
                </div>
              </div>
            </div>
            <div class="row">
              <div
                class="col-md-4"
                v-for="(product, index) in latestProducts"
                :key="index"
              >
                <!-- Start Single List  -->
                <div class="single-list">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="list-image overlay">
                        <img :src="product.photos[0]" :alt="product.title" />
                        <a
                          href="http://vp2.test/laravel/add-to-cart/lorem-ipsum-is-simply-2008183507-655"
                          class="buy"
                          ><i class="fa fa-shopping-bag"></i
                        ></a>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 no-padding">
                      <div class="content">
                        <h4 class="title">
                          <a href="#">{{ product.title }}</a>
                        </h4>
                        <p class="price with-discount">$10.00</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Single List  -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Shop Home List  -->

    <!-- Start Shop Blog  -->
    <section class="shop-blog section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>From Our Blog</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div
            class="col-lg-4 col-md-6 col-12"
            v-for="(post, index) in posts"
            :key="index"
          >
            <!-- Start Single Blog  -->
            <div class="shop-single-blog">
              <img :src="post.photo" :alt="post.title" />
              <div class="content">
                <p class="date">{{ post.created_at_formated }}</p>
                <a
                  href="http://vp2.test/laravel/blog-detail/lorem-ipsum-is-simply"
                  class="title"
                  >{{ post.title }}</a
                >
                <a
                  href="http://vp2.test/laravel/blog-detail/lorem-ipsum-is-simply"
                  class="more-btn"
                  >Continue Reading</a
                >
              </div>
            </div>
            <!-- End Single Blog  -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Shop Blog  -->

    <!-- Start Shop Services Area -->
    <section class="shop-services section home">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-rocket"></i>
              <h4>Free shiping</h4>
              <p>Orders over $100</p>
            </div>
            <!-- End Single Service -->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-reload"></i>
              <h4>Free Return</h4>
              <p>Within 30 days returns</p>
            </div>
            <!-- End Single Service -->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-lock"></i>
              <h4>Sucure Payment</h4>
              <p>100% secure payment</p>
            </div>
            <!-- End Single Service -->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-tag"></i>
              <h4>Best Peice</h4>
              <p>Guaranteed price</p>
            </div>
            <!-- End Single Service -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Shop Services Area -->

    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
      <div class="container">
        <div class="inner-top">
          <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
              <!-- Start Newsletter Inner -->
              <div class="inner">
                <h4>Newsletter</h4>
                <p>
                  Subscribe to our newsletter and get <span>10%</span> off your first
                  purchase
                </p>
                <form
                  action="http://vp2.test/laravel/subscribe"
                  method="post"
                  class="newsletter-inner"
                >
                  <input
                    name="email"
                    placeholder="Your email address"
                    required=""
                    type="email"
                  />
                  <button class="btn" type="submit">Subscribe</button>
                </form>
              </div>
              <!-- End Newsletter Inner -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Shop Newsletter -->
  </div>
</template>

<script>
export default {
  name: "Home",
  computed: {
    banners() {
      return this.$store.getters["banner/get"];
    },
    smallBanners() {
      return this.$store.getters["category/getSmallBanners"];
    },
    parentCategories() {
      return this.$store.getters["category/getParentCategories"];
    },
    products() {
      return this.$store.getters["product/get"];
    },
    featuredProducts() {
      return this.$store.getters["product/getFeaturedProducts"];
    },
    hotProducts() {
      return this.$store.getters["product/getHotProducts"];
    },
    latestProducts() {
      return this.$store.getters["product/getLatestProducts"];
    },
    posts() {
      return this.$store.getters["post/get"];
    },
  },
  async created() {
    await this.$store.dispatch("banner/fetch", {
      params: {
        limit: 3,
      },
    });
    await this.$store.dispatch("category/fetchSmallBanners", {
      params: {
        limit: 3,
      },
    });
    await this.$store.dispatch("category/fetchParentCategories");
    await this.$store.dispatch("product/fetch", {
      params: {
        limit: 8,
      },
    });
    await this.$store.dispatch("product/fetchFeaturedProducts", {
      params: {
        limit: 2,
      },
    });
    await this.$store.dispatch("product/fetchHotProducts", {
      params: {
        condition: "hot",
        limit: 8,
      },
    });
    await this.$store.dispatch("product/fetchLatestProducts", {
      params: {
        limit: 6,
      },
    });
    await this.$store.dispatch("post/fetch", {
      params: {
        limit: 3,
      },
    });
    console.log("posts", this.posts);
  },
};
</script>

<style></style>
