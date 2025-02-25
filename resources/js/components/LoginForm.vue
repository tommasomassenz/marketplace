<template>
  <div class="overlay">
    <div class="form-container">
      <button class="close-btn" @click="$emit('closeForm')">&times;</button>
      <h2 class="text-center">Login</h2>
      <form @submit.prevent="login">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" v-model="userData.email" placeholder="Enter email" required />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" v-model="userData.password" placeholder="Password" required />
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
        <div class="mt-3 text-center">
          <span class="text-muted">Non sei registrato? <u @click="$emit('toggleForm')">Registrati qui</u></span>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'LoginForm',
  data() {
    return {
      userData: {
        email: '',
        password: '',
      }
    };
  },
  methods: {
    async login() {
      try {
        const response = await axios.post('http://127.0.0.1/api/users/login', this.userData); 

        if (response.status === 200) {
          alert('Login effettuato con successo!');
          // Emissione evento per aggiornare lo stato di isLogged in App.vue
          this.$emit('login-success');  // Aggiungi questo per informare App.vue
        } else {
          alert('Credenziali errate!');
        }
      } catch (error) {
        console.error(error);
        
        if (error.response) {
          if (error.response.status === 401) {
            alert('Credenziali errate!');
          } else {
            alert('Errore del server: ' + error.response.data.message || 'Errore sconosciuto');
          }
        } else if (error.request) {
          alert('Errore nella connessione al server!');
        } else {
          alert('Errore imprevisto!');
        }
      }
    }
  }
};
</script>

<style scoped>
/* Mantieni lo stile invariato */
</style>
