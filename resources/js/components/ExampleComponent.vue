<template>
  <div class="container mt-4">
    <h1 class="text-center">Marketplace</h1>
    
    <!-- Pulsanti Registrati / Accedi / Logout -->
    <div class="d-flex justify-content-center my-3" v-if="!isRegistered && !isLoggingIn">
      <button @click="showRegisterForm" class="btn btn-secondary mr-2">Registrati</button>
      <button @click="showLoginForm" class="btn btn-primary">Accedi</button>
    </div>
    
    <div class="d-flex justify-content-center my-3" v-if="isRegistered">
      <button @click="logout" class="btn btn-danger">Esci</button>
    </div>
    
    <!-- Form Registrazione -->
    <div v-if="isRegistering" class="form-container">
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
    <div v-if="isLoggingIn" class="form-container">
      <h2>Accedi</h2>
      <input v-model="loginData.username" placeholder="Email" class="form-control mb-2" />
      <input v-model="loginData.password" placeholder="Password" class="form-control mb-2" type="password" />
      <button @click="login" class="btn btn-primary">Accedi</button>
      <button @click="goBack" class="btn btn-secondary ml-2">Indietro</button>
    </div>
    
    <!-- Form Elimina Utente -->
    <div v-if="isRegistered" class="form-container">
      <h2>Elimina Account</h2>
      <input v-model="deleteData.username" placeholder="Email" class="form-control mb-2" />
      <input v-model="deleteData.password" placeholder="Password" class="form-control mb-2" type="password" />
      <button @click="deleteAccount" class="btn btn-danger">Elimina Account</button>
    </div>
    
    <!-- Shop -->
    <h2 class="mt-4">Shop</h2>
    <div v-for="(products, category) in shop" :key="category" class="shop-category">
      <h3 class="category-title">{{ category }}</h3>
      <div class="product-grid">
        <div v-for="product in products" :key="product.id" class="product-card">
          <img :src="product.image" :alt="product.name" class="product-image" />
          <h4 class="product-name">{{ product.name }}</h4>
          <p class="product-price">{{ product.price }}€</p>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
.container {
  max-width: 1200px;
  margin: auto;
}

h1 {
  font-weight: bold;
  color: #333;
}

.form-container {
  max-width: 400px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 10px;
  background: #f9f9f9;
}

.shop-category {
  margin-top: 20px;
}

.category-title {
  font-size: 1.5rem;
  font-weight: bold;
  margin-bottom: 15px;
  color: #555;
}

.product-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
}

.product-card {
  width: 200px;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 10px;
  background: white;
  text-align: center;
}

.product-image {
  width: 100%;
  height: 150px;
  object-fit: cover;
  border-radius: 5px;
}

.product-name {
  font-size: 1rem;
  font-weight: bold;
  margin: 10px 0;
}

.product-price {
  font-size: 1rem;
  color: #27ae60;
  font-weight: bold;
}
</style>

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
      deleteData: {
        username: '',
        password: ''
      },
      shop: {
        "Jeans": [
          { id: 1, name: "Jeans Blu", price: 50, image: "" },
          { id: 2, name: "Jeans Neri", price: 60, image: "" }
        ],
        "Scarpe": [
          { id: 3, name: "Sneakers Bianche", price: 80, image: "img/air.jpg" },
          { id: 4, name: "Stivali Neri", price: 120, image: "" }
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
  }
};
</script>
