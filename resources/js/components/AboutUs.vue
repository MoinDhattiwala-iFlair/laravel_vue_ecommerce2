<template>
  <div>
    <!-- Breadcrumb start -->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="bread-inner">
              <ul class="bread-list">
                <li>
                  <router-link to="/">Home<i class="ti-arrow-right"></i></router-link>
                </li>
                <li class="active"><a href="javascript:void(0);">About Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb end -->
    <!-- About Us start -->
    <section class="about-us section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="about-content">
              <h3>Welcome To <span>Eshop</span></h3>
              <p>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum. sed ut perspiciatis unde sunt in
                culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis
                unde omnis iste natus error sit voluptatem Excepteu sunt in culpa qui
                officia deserunt mollit anim id est laborum. sed ut perspiciatis Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum. sed ut perspi deserunt mollit anim id est
                laborum. sed ut perspi.
              </p>
              <div class="button">
                <a href="http://vp2.test/laravel/blog" class="btn">Our Blog</a>
                <a href="http://vp2.test/laravel/contact" class="btn primary"
                  >Contact Us</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="about-img overlay">
              <img
                src=" /storage/photos/1/blog3.jpg "
                alt=" /storage/photos/1/blog3.jpg "
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us end -->

    <!-- Start Shop Services Area -->
    <shop-services />
    <!-- End Shop Services Area -->

    <!-- Start Shop Newsletter  -->
    <newsletter />
    <!-- End Shop Newsletter -->
  </div>
</template>

<script>
import Newsletter from "./Newsletter.vue";
import ShopServices from "./ShopServices.vue";
export default {
  name: "AboutUs",
  components: { Newsletter, ShopServices },
  computed: {
    setting() {
      return this.$store.getters["settings/get"];
    },
  },
  created() {
    this.$store.dispatch("settings/fetch");
    console.log("this.setting", this.setting);
  },
};
</script>

<style scoped></style>
