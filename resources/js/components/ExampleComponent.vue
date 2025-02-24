<template>
  <div class="container mt-4">
    <h1>Marketplace</h1>
    
    <!-- Pulsanti Registrati / Accedi / Logout -->
    <div v-if="!isRegistered && !isLoggingIn">
      <button @click="showRegisterForm" class="btn btn-secondary mr-2">Registrati</button>
      <button @click="showLoginForm" class="btn btn-primary">Accedi</button>
    </div>
    
    <div v-if="isRegistered">
      <button @click="logout" class="btn btn-danger">Esci</button>
    </div>
    
    <!-- Form Registrazione -->
    <div v-if="isRegistering">
      <h2>Registrati</h2>
      <input v-model="newUser.email" placeholder="Email (Usata come Username)" class="form-control mb-2" />
      <input v-model="newUser.name" placeholder="Nome" class="form-control mb-2" />
      <input v-model="newUser.surname" placeholder="Cognome" class="form-control mb-2" />
      <input v-model="newUser.birthdate" placeholder="Data di nascita" class="form-control mb-2" type="date" />
      <input v-model="newUser.password" placeholder="Password" class="form-control mb-2" type="password" />
      <input v-model="newUser.address" placeholder="Indirizzo" class="form-control mb-2" />
      <input v-model="newUser.phone" placeholder="Numero di telefono" class="form-control mb-2" />
      <button @click="register" class="btn btn-success">Registrati</button>
      <button @click="goBack" class="btn btn-secondary ml-2">Indietro</button>
    </div>
    
    <!-- Form Login -->
    <div v-if="isLoggingIn">
      <h2>Accedi</h2>
      <input v-model="loginData.username" placeholder="Email" class="form-control mb-2" />
      <input v-model="loginData.password" placeholder="Password" class="form-control mb-2" type="password" />
      <button @click="login" class="btn btn-primary">Accedi</button>
      <button @click="goBack" class="btn btn-secondary ml-2">Indietro</button>
    </div>
    
    <!-- Barra di ricerca utente -->
    <input v-if="isRegistered" v-model="userId" @keyup.enter="fetchUserData" placeholder="Inserisci ID utente" class="form-control mb-3" />
    <button v-if="isRegistered" @click="fetchUserData" class="btn btn-primary">Cerca</button>
    
    <!-- Dati Utente -->
    <div v-if="user">
      <h2>Dettagli Utente</h2>
      <p><strong>Nome:</strong> {{ user.name }}</p>
      <h3>Recensioni</h3>
      <ul>
        <li v-for="review in user.reviews" :key="review.id">{{ review.text }}</li>
      </ul>
      <h3>Ordini</h3>
      <ul>
        <li v-for="order in user.orders" :key="order.id">Ordine #{{ order.id }} - {{ order.date }}</li>
      </ul>
    </div>
    
    <!-- Shop -->
    <h2 class="mt-4">Shop</h2>
    <div v-for="(products, category) in shop" :key="category">
      <h3>{{ category }}</h3>
      <ul>
        <li v-for="product in products" :key="product.id">{{ product.name }} - {{ product.price }}€</li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isRegistering: false,
      isLoggingIn: false,
      isRegistered: false,
      userId: '',
      user: null,
      newUser: {
        email: '',
        name: '',
        surname: '',
        birthdate: '',
        password: '',
        address: '',
        phone: '',
        registrationDate: new Date().toISOString().split('T')[0]
      },
      loginData: {
        username: '',
        password: ''
      },
      shop: {
        "Jeans": [
          { id: 1, name: "Jeans Blu", price: 50 },
          { id: 2, name: "Jeans Neri", price: 60 }
        ],
        "Scarpe": [
          { id: 3, name: "Sneakers Bianche", price: 80 },
          { id: 4, name: "Stivali Neri", price: 120 }
        ]
      },
      users: {}
    };
  },
  methods: {
    showRegisterForm() {
      this.isRegistering = true;
      this.isLoggingIn = false;
    },
    showLoginForm() {
      this.isLoggingIn = true;
      this.isRegistering = false;
    },
    goBack() {
      this.isRegistering = false;
      this.isLoggingIn = false;
    },
    register() {
      this.users[this.newUser.email] = { ...this.newUser, reviews: [], orders: [] };
      this.isRegistered = true;
      this.isRegistering = false;
      this.user = this.users[this.newUser.email];
      console.log("Utente registrato:", this.newUser);
    },
    login() {
      const user = this.users[this.loginData.username];
      if (user && user.password === this.loginData.password) {
        this.user = user;
        this.isRegistered = true;
        this.isLoggingIn = false;
        console.log("Login effettuato con:", this.user);
      } else {
        alert("Username o password errati");
      }
    },
    logout() {
      this.isRegistered = false;
      this.user = null;
      this.userId = '';
      this.isLoggingIn = false;
      this.isRegistering = false;
      this.loginData.username = '';
      this.loginData.password = '';
    },
    fetchUserData() {
      this.user = this.users[this.userId] || null;
    }
  }
};
</script>

<style>
.container {
  max-width: 600px;
  margin: auto;
}
</style>
