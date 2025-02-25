<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand ml-4">MarketPlace</a>
    <button class="btn btn-primary" @click="$emit('toggleSidebar')">Apri Sidebar</button>
    
    <!-- Mostra i bottoni di login e registrazione solo se l'utente non è loggato -->
    <div class="ml-auto" v-if="!isLogged">
      <button @click="$emit('showLoginForm')" class="btn btn-primary">Accedi</button>
      <button @click="$emit('showSignUpForm')" class="btn btn-secondary ml-2 mr-4">Registrati</button>
    </div>
    
    <!-- Mostra un messaggio o i bottoni di logout quando l'utente è loggato -->
    <div class="ml-auto" v-if="isLogged">
      <span class="mr-3">Benvenuto!</span>
      <button @click="logout" class="btn btn-danger">Esci</button>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'Navbar',
  props: {
    isLogged: {
      type: Boolean,
      default: false
    }
  },
  methods: {
    logout() {
      // Rimuovi eventuali dati di autenticazione (token, sessione, etc.)
      this.$emit('updateLoginStatus', false);
      alert('Sei stato disconnesso!');
    }
  }
};
</script>

<style scoped>
/* Aggiungi eventuali stili specifici per la navbar */
</style>
