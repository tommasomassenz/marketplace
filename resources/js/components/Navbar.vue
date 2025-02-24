<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand ml-4" >MarketPlace</a>
    <div class="ml-auto">
      <button @click="$emit('showLoginForm')" class="btn btn-primary">Accedi</button>
      <button @click="$emit('showSignUpForm')" class="btn btn-secondary ml-2 mr-4">Registrati</button>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'Navbar'
};
</script>
