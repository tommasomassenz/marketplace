<template>
  <div>
    <Navbar @showLoginForm="showLoginForm" @showSignUpForm="showSignUpForm" />

    <div class="container mt-5">
      <LoginForm v-if="isLoginFormVisible" @toggleForm="showSignUpForm" @closeForm="closeForm" />
      <SignUpForm v-if="isSignUpFormVisible" @toggleForm="showLoginForm" @closeForm="closeForm"/>
    </div>

    <ProductList />
    <Footer />
  </div>
</template>

<script>
import Navbar from '@/components/Navbar.vue';
import LoginForm from '@/components/LoginForm.vue';
import SignUpForm from '@/components/SignUpForm.vue';
import ProductList from '@/components/ProductList.vue';
import Footer from './Footer.vue';

export default {
  name: 'App',
  components: {
    Navbar,
    LoginForm,
    SignUpForm,
    ProductList,
    Footer,
  },
  data() {
    return {
      isLoginFormVisible: false,
      isSignUpFormVisible: false
    };
  },
  methods: {
    showLoginForm() {
      this.isLoginFormVisible = true;
      this.isSignUpFormVisible = false;
    },
    showSignUpForm() {
      this.isLoginFormVisible = false;
      this.isSignUpFormVisible = true;
    },
    closeForm(){
      this.isLoginFormVisible = false;
      this.isSignUpFormVisible = false;
    }
  }
};
</script>

