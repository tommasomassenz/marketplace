<template>
    <div class="container">
      <h1 class="text-center mb-4 fs-2">Lista Prodotti</h1>
      <div class="row">
        <div class="col-md-4 mb-4" v-for="product in products" :key="product.id">
          <div class="card">
            <img :src="product.image" class="card-img-top" :alt="product.name" />
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
  export default {
    name: "ProductList",
    data() {
      return {
        products: [
          { id: 1, name: "Laptop", description: "Portatile veloce e potente", price: 999, image: "/img/air.jpeg" },
          { id: 2, name: "Smartphone", description: "Ultima generazione", price: 799, image: "/img/air.jpeg" },
          { id: 3, name: "Cuffie Wireless", description: "Suono cristallino", price: 199, image: "/img/air.jpeg" },
          { id: 4, name: "Smartwatch", description: "Monitoraggio fitness", price: 249, image: "/img/air.jpeg" },
          { id: 5, name: "Tablet", description: "Schermo Retina HD", price: 599, image: "/img/air.jpeg" },
          { id: 6, name: "Mouse Gaming", description: "RGB e DPI regolabili", price: 89, image: "/img/air.jpeg" },
          { id: 7, name: "Tastiera Meccanica", description: "Switch blu", price: 120, image: "/img/air.jpeg" },
          { id: 8, name: "Monitor 4K", description: "Alta risoluzione 60Hz", price: 450, image: "/img/air.jpeg" },
          { id: 9, name: "Sedia da Gaming", description: "Comfort e stile", price: 350, image: "/img/air.jpeg" }
        ]
      };
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
  