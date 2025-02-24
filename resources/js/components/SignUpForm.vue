<template>
    <div class="overlay">
      <div class="form-container">
        <button class="close-btn" @click="$emit('closeForm')">&times;</button>
        <h2 class="text-center">Registrazione</h2>
        <form>
          <!-- Username -->
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Inserisci il tuo username" required />
          </div>

          <!-- Nome -->
          <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" placeholder="Inserisci il tuo nome" required />
          </div>

          <!-- Cognome -->
          <div class="mb-3">
            <label for="surname" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="surname" placeholder="Inserisci il tuo cognome" required />
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Inserisci la tua email" required />
          </div>

          <!-- Password -->
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Inserisci la password" required />
          </div>

          <!-- Data di nascita -->
          <div class="mb-3">
            <label for="dob" class="form-label">Data di Nascita</label>
            <input type="date" class="form-control" id="dob" required />
          </div>

          <!-- Indirizzo -->
          <div class="mb-3">
            <label for="address" class="form-label">Indirizzo</label>
            <input type="text" class="form-control" id="address" placeholder="Inserisci il tuo indirizzo" required />
          </div>

          <!-- Numero di Telefono -->
          <div class="mb-3">
            <label for="phone" class="form-label">Numero di Telefono</label>
            <input type="tel" class="form-control" id="phone" placeholder="Inserisci il tuo numero" required />
          </div>

          <!-- Pulsante di registrazione -->
          <button type="submit" class="btn btn-primary w-100">Registrati</button>

          <!-- Link per passare al login -->
          <div class="mt-3 text-center">
            <span class="text-muted">Hai già un account? <u @click="$emit('toggleForm')">Accedi</u></span>
          </div>
        </form>
      </div>
    </div>
</template>

<script>
export default {
  name: 'SignUpForm'
};
</script>

<style scoped>
.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000; /* Assicura che il form sia sopra tutto */
}

.form-container {
  background: #f8f9fa;
  padding: 20px;
  border-radius: 8px;
  width: 400px;
  max-height: 100vh; /* Altezza massima pari alla finestra */
  overflow-y: auto; /* Abilita lo scrolling se necessario */
  position: relative;
}

.close-btn {
  position: absolute;
  top: 10px;
  right: 15px;
  border: none;
  background: none;
  font-size: 24px;
  cursor: pointer;
}
u{
    cursor: pointer;
}
</style>
