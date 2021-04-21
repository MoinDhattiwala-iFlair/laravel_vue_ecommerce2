<template>
  <div id="app">
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
                <li class="active"><a href="javascript:void(0);">Register</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb end -->

    <!-- Register Start -->
    <section class="shop login section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-12">
            <div class="login-form">
              <h2>Register</h2>
              <p>Please register in order to checkout more quickly</p>
              <!-- Form -->
              <form class="form" method="post" @submit.prevent="register">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label>Your Name<span>*</span></label>
                      <input
                        type="text"
                        name="name"
                        placeholder="Enter name"
                        required="required"
                        v-model.trim="user.name"
                      />
                      <ul>
                        <li class="text-danger" v-if="!$v.user.name.required">
                          Field is required
                        </li>
                        <li class="text-danger" v-if="!$v.user.name.minLength">
                          Name must have at least
                          {{ $v.user.name.$params.minLength.min }}
                          letters.
                        </li>
                        <li
                          class="text-danger"
                          v-for="(err, index) in errors.name"
                          :key="index"
                        >
                          {{ err }}
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label>Your Email<span>*</span></label>
                      <input
                        type="email"
                        name="email"
                        placeholder="Enter email"
                        required="required"
                        v-model.trim="user.email"
                      />
                      <ul>
                        <li class="text-danger" v-if="!$v.user.email.required">
                          Field is required
                        </li>
                        <li class="text-danger" v-if="!$v.user.email.email">
                          Invalid email
                        </li>
                        <li
                          class="text-danger"
                          v-for="(err, index) in errors.email"
                          :key="index"
                        >
                          {{ err }}
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label>Your Password<span>*</span></label>
                      <input
                        type="password"
                        name="password"
                        placeholder=""
                        required="required"
                        v-model.trim="user.password"
                      />
                      <ul>
                        <li class="text-danger" v-if="!$v.user.password.required">
                          Field is required
                        </li>
                        <li class="text-danger" v-if="!$v.user.password.minLength">
                          Password must have at least
                          {{ $v.user.password.$params.minLength.min }}
                          letters.
                        </li>
                        <li
                          class="text-danger"
                          v-for="(err, index) in errors.password"
                          :key="index"
                        >
                          {{ err }}
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label>Confirm Password<span>*</span></label>
                      <input
                        type="password"
                        name="password_confirmation"
                        placeholder=""
                        required="required"
                        v-model.trim="user.password_confirmation"
                      />
                      <ul>
                        <li
                          class="text-danger"
                          v-if="!$v.user.password_confirmation.required"
                        >
                          Field is required
                        </li>
                        <li
                          class="text-danger"
                          v-if="!$v.user.password_confirmation.minLength"
                        >
                          Confirm Password must have at least
                          {{ $v.user.password_confirmation.$params.minLength.min }}
                          letters.
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group login-btn">
                      <button class="btn" type="submit" :disabled="isSubmitted">
                        <i class="fa fa-spinner fa-spin" v-show="isSubmitted"></i>
                        <span v-show="!isSubmitted">Register</span>
                      </button>
                      <router-link to="/login" class="btn">Login</router-link>
                      OR
                      <a
                        href="http://vp2.test/laravel/login/facebook"
                        class="btn btn-facebook"
                        ><i class="ti-facebook"></i
                      ></a>
                      <a
                        href="http://vp2.test/laravel/login/github"
                        class="btn btn-github"
                        ><i class="ti-github"></i
                      ></a>
                      <a
                        href="http://vp2.test/laravel/login/google"
                        class="btn btn-google"
                        ><i class="ti-google"></i
                      ></a>
                    </div>
                    <div class="checkbox">
                      <label class="checkbox-inline" for="2"
                        ><input name="news" id="2" type="checkbox" />Remember me</label
                      >
                    </div>
                    <a class="lost-pass" href="http://vp2.test/laravel/password-reset">
                      Lost your password?
                    </a>
                  </div>
                </div>
              </form>
              <!--/ End Form -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Register End -->
  </div>
</template>

<script>
import { required, email, minLength } from "vuelidate/lib/validators";
export default {
  name: "Register",
  data() {
    return {
      user: {
        name: "User",
        email: "user@gmail.com",
        password: "1111",
        password_confirmation: "1111",
      },
      errors: [],
      isSubmitted: false,
    };
  },
  validations: {
    user: {
      name: {
        required,
        minLength: minLength(4),
      },
      email: {
        required,
        email,
      },
      password: {
        required,
        minLength: minLength(4),
      },
      password_confirmation: {
        required,
        minLength: minLength(4),
      },
    },
  },
  methods: {
    async register() {
      if (!this.$v.$invalid) {
        this.errors = [];
        this.isSubmitted = true;
        await this.$store
          .dispatch("auth/register", this.user)
          .then((result) => {
            this.$toasted.success(result);
            this.$router.push("/");
          })
          .catch((err) => {
            console.log("err", err);
            if (err.status == 422) {
              this.errors = err.data.errors;
            } else {
              this.$toasted.global.common_error_toast();
            }
          })
          .finally(() => (this.isSubmitted = false));
      }
    },
  },
  computed: {
    authUser() {
      return this.$store.getters["auth/get"];
    },
  },
  created() {
    if (this.authUser) {
      this.$router.push("/");
    }
  },
};
</script>

<style scoped>
.shop.login .form .btn {
  margin-right: 0;
}
.btn-facebook {
  background: #39579a;
}
.btn-facebook:hover {
  background: #073088 !important;
}
.btn-github {
  background: #444444;
  color: white;
}
.btn-github:hover {
  background: black !important;
}
.btn-google {
  background: #ea4335;
  color: white;
}
.btn-google:hover {
  background: rgb(243, 26, 26) !important;
}
</style>
