<template>
    <div class="overlay">
      <div class="form-container">
        <button class="close-btn" @click="$emit('closeForm')">&times;</button>
        <h2 class="text-center">Login</h2>
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" required />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" required />
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
          <div class="mt-3 text-center">
            <span class="text-muted">Non sei registrato? <u @click="$emit('toggleForm')">Iscriviti qui</u></span>
          </div>
        </form>
      </div>
    </div>
</template>

<script>
export default {
  name: 'LoginForm'
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
  width: 350px;
  position: relative;
  transform: none; /* Evita effetti di zoom */
  transition: none; /* Disabilita transizioni */
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
