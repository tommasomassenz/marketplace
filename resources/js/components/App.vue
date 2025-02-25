<template>
  <div>
    <!-- Navbar che emette eventi per mostrare i form -->
    <Navbar 
      @showLoginForm="showLoginForm" 
      @showSignUpForm="showSignUpForm" 
      @toggleSidebar="toggleSidebar" 
    />

    <div class="container mt-5">
      <!-- LoginForm visibile se isLoginFormVisible è true -->
      <LoginForm 
        v-if="isLoginFormVisible" 
        @toggleForm="showSignUpForm" 
        @closeForm="closeForm" 
        @login-success="handleLoginSuccess" 
      />
      
      <!-- SignUpForm visibile se isSignUpFormVisible è true -->
      <SignUpForm 
        v-if="isSignUpFormVisible" 
        @toggleForm="showLoginForm" 
        @closeForm="closeForm" 
        @signUp-success="handleSignUpSuccess" 
      />
    </div>

    <!-- Elenco prodotti e carrello -->
    <ProductList />
    <Cart :isSidebarVisible="isSidebarVisible" @toggleSidebar="toggleSidebar" />

    <!-- Footer -->
    <Footer />
  </div>
</template>

<script>
import Navbar from '@/components/Navbar.vue';
import LoginForm from '@/components/LoginForm.vue';
import SignUpForm from '@/components/SignUpForm.vue';
import ProductList from '@/components/ProductList.vue';
import Footer from '@/components/Footer.vue';
import Cart from '@/components/Cart.vue';
import axios from 'axios';

export default {
  name: 'App',
  components: {
    Navbar,
    LoginForm,
    SignUpForm,
    ProductList,
    Footer,
    Cart
  },
  data() {
    return {
      isLoginFormVisible: false,
      isSignUpFormVisible: false,
      isSidebarVisible: false,
      isLogged: false, // Stato di login dell'utente
    };
  },
  methods: {
    // Mostra il form di login
    showLoginForm() {
      this.isLoginFormVisible = true;
      this.isSignUpFormVisible = false;
    },

    // Mostra il form di registrazione
    showSignUpForm() {
      this.isLoginFormVisible = false;
      this.isSignUpFormVisible = true;
    },

    // Chiudi entrambi i form
    closeForm() {
      this.isLoginFormVisible = false;
      this.isSignUpFormVisible = false;
    },

    // Funzione per alternare la visibilità della sidebar
    toggleSidebar() {
      this.isSidebarVisible = !this.isSidebarVisible;
      console.log('Sidebar toggled:', this.isSidebarVisible);
    },

    // Gestisci il login con successo
    handleLoginSuccess() {
      this.isLogged = true; // Imposta isLogged su true
      alert('Login effettuato con successo!');
      this.closeForm(); // Chiudi il form di login dopo il successo
    },

    // Gestisci la registrazione con successo
    handleSignUpSuccess() {
      alert('Registrazione completata con successo!');
      this.showLoginForm(); // Mostra il form di login dopo la registrazione
    },
  },

  mounted() {
    // Carica i prodotti quando il componente è montato
    axios.get('/api/products')
      .then(response => {
        this.products = response.data;
      })
      .catch(error => {
        console.error(error);
      });
  },
};
</script>

<style scoped>
/* Aggiungi eventuali stili specifici per App.vue */
</style>
