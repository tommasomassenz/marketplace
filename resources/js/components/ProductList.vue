<template>
  <div class="container">
    <h1 class="text-center mb-4 fs-2">Lista Prodotti</h1>
    <div class="row">
      <div class="col-md-4 mb-4" v-for="product in products" :key="product.id">
        <div class="card">
          <!-- Aggiungi il percorso relativo dell'immagine -->
          <img :src="'/img/air.jpeg'" class="card-img-top" :alt="product.name" />
          <div class="card-body text-center">
            <h5 class="card-title">{{ product.name }}</h5>
            <p class="card-text text-muted">{{ product.description }}</p>
            <p class="fw-bold">€{{ product.price }}</p>
            <button class="btn btn-primary">Aggiungi al Carrello</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'; // Assicurati di importare axios

export default {
  name: "ProductList",
  data() {
    return {
      products: [] // Aggiungi una proprietà per memorizzare i prodotti
    };
  },
  mounted() {
    // Fai la richiesta API nel ciclo di vita mounted
    axios.get('/api/products')
      .then(response => {
        this.products = response.data.data; // Popola i prodotti con i dati
      })
      .catch(error => {
        console.error("Errore durante il recupero dei prodotti:", error);
      });
  }
};
</script>

<style scoped>
.card {
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  transition: transform 0.1s ease-in-out;
}

.card:hover {
  transform: scale(1.02);
  background-color: #f8f9fa;
}

.card-img-top {
  height: 180px;
  object-fit: cover;
}
</style>
