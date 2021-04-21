<template>
  <header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-12">
            <!-- Top Left -->
            <div class="top-left">
              <ul class="list-main">
                <li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
                <li><i class="ti-email"></i> eshop@gmail.com</li>
              </ul>
            </div>
            <!--/ End Top Left -->
          </div>
          <div class="col-lg-6 col-md-12 col-12">
            <!-- Top Right -->
            <div class="right-content">
              <ul class="list-main">
                <li>
                  <i class="ti-location-pin"></i>
                  <a href="http://vp2.test/laravel/product/track">Track Order</a>
                </li>

                <li v-if="!authUser">
                  <i class="ti-power-off"></i>
                  <router-link to="/login">Login /</router-link>
                  <router-link to="/register">Register</router-link>
                </li>
                <li v-if="authUser">
                  <i class="ti-user"></i>
                  <router-link to="/">Dashboard</router-link>
                </li>
                <li v-if="authUser">
                  <i class="ti-power-off"></i>
                  <a href="javascript:void(0);" @click="logout">Logout</a>
                </li>
              </ul>
            </div>
            <!-- End Top Right -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-12">
            <!-- Logo -->
            <div class="logo">
              <router-link to="/">
                <img src="/storage/photos/1/logo.png" alt="logo" />
              </router-link>
            </div>
            <!--/ End Logo -->
            <!-- Search Form -->
            <div class="search-top">
              <div class="top-search">
                <a href="#0"><i class="ti-search"></i></a>
              </div>
              <!-- Search Form -->
              <div class="search-top">
                <form class="search-form">
                  <input type="text" placeholder="Search here..." name="search" />
                  <button value="search" type="submit"><i class="ti-search"></i></button>
                </form>
              </div>
              <!--/ End Search Form -->
            </div>
            <!--/ End Search Form -->
            <div class="mobile-nav"></div>
          </div>
          <div class="col-lg-8 col-md-7 col-12">
            <div class="search-bar-top">
              <div class="search-bar">
                <select>
                  <option>All Category</option>
                  <option>Kid&#039;s</option>
                  <option>Men&#039;s Fashion</option>
                  <option>Women&#039;s Fashion</option>
                </select>
                <form method="POST" action="http://vp2.test/laravel/product/search">
                  <input
                    type="hidden"
                    name="_token"
                    value="ibiTQfeCXwTBqNkTa90MLDJAmidz6H3bYVkr4lPn"
                  />
                  <input
                    name="search"
                    placeholder="Search Products Here....."
                    type="search"
                  />
                  <button class="btnn" type="submit"><i class="ti-search"></i></button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-12">
            <div class="right-bar">
              <!-- Search Form -->
              <div class="sinlge-bar shopping">
                <a href="http://vp2.test/laravel/wishlist" class="single-icon"
                  ><i class="fa fa-heart-o"></i> <span class="total-count">0</span></a
                >
                <!-- Shopping Item -->
                <!--/ End Shopping Item -->
              </div>

              <div class="sinlge-bar shopping">
                <a href="http://vp2.test/laravel/cart" class="single-icon"
                  ><i class="ti-bag"></i> <span class="total-count">0</span></a
                >
                <!-- Shopping Item -->
                <!--/ End Shopping Item -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
      <div class="container">
        <div class="cat-nav-head">
          <div class="row">
            <div class="col-lg-12 col-12">
              <div class="menu-area">
                <!-- Main Menu -->
                <nav class="navbar navbar-expand-lg">
                  <div class="navbar-collapse">
                    <div class="nav-inner">
                      <ul class="nav main-menu menu navbar-nav">
                        <li class=""><a href="http://vp2.test/laravel">Home</a></li>
                        <li class="">
                          <a href="http://vp2.test/laravel/about-us">About Us</a>
                        </li>
                        <li class="">
                          <a href="http://vp2.test/laravel/product-grids">Products</a
                          ><span class="new">New</span>
                        </li>

                        <li>
                          <a href="javascript:void(0);"
                            >Category<i class="ti-angle-down"></i
                          ></a>
                          <ul class="dropdown border-0 shadow">
                            <li>
                              <a href="http://vp2.test/laravel/product-cat/kids">Kid's</a>
                            </li>
                            <li>
                              <a href="http://vp2.test/laravel/product-cat/mens-fashion"
                                >Men's Fashion</a
                              >
                              <ul class="dropdown sub-dropdown border-0 shadow">
                                <li>
                                  <a
                                    href="http://vp2.test/laravel/product-sub-cat/mens-fashion/t-shirts"
                                    >T-shirt's</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="http://vp2.test/laravel/product-sub-cat/mens-fashion/jeans-pants"
                                    >Jeans pants</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="http://vp2.test/laravel/product-sub-cat/mens-fashion/sweater-jackets"
                                    >Sweater & Jackets</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="http://vp2.test/laravel/product-sub-cat/mens-fashion/rain-coats-trenches"
                                    >Rain Coats & Trenches</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a href="http://vp2.test/laravel/product-cat/womens-fashion"
                                >Women's Fashion</a
                              >
                            </li>
                          </ul>
                        </li>

                        <li class=""><a href="http://vp2.test/laravel/blog">Blog</a></li>

                        <li class="">
                          <a href="http://vp2.test/laravel/contact">Contact Us</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
                <!--/ End Main Menu -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Header Inner -->
  </header>
</template>

<script>
export default {
  name: "Header",
  computed: {
    authUser() {
      return this.$store.getters["auth/get"];
    },
  },
  methods: {
    logout() {
      this.$store.dispatch("auth/logout");
    },
  },
};
</script>

<style></style>
