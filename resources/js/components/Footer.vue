<template>
    <footer class="footer bg-dark text-light py-3">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <p class="mb-0">© 2025 Marketplace. Tutti i diritti riservati.</p>
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a href="#" class="text-light text-decoration-none">Privacy</a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="text-light text-decoration-none">Contatti</a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="text-light text-decoration-none">Termini & Condizioni</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </template>
  
  <script>
  export default {
    name: "Footer"
  };
  </script>
  
  <style scoped>
  .footer {
    width: 100%;
    position: relative;
    bottom: 0;
    background-color: #343a40;
    color: #f8f9fa;
  }
  
  .list-inline-item {
    margin-right: 15px;
  }
  
  .list-inline-item a:hover {
    text-decoration: underline;
  }
  
  @media (max-width: 767px) {
    .footer {
      text-align: center;
    }
    .list-inline {
      margin-top: 10px;
    }
  }
  </style>
  