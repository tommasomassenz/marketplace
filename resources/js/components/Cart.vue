<template>
    <div class="sidebar" :class="{ 'show': isSidebarVisible }">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title">Sidebar</h5>
        <button class="btn-close" @click="$emit('toggleSidebar')"></button>
      </div>
      <div class="offcanvas-body">
        <p>Contenuto della sidebar...</p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      isSidebarVisible: Boolean
    }
  };
  </script>
  
  <style scoped>
  .sidebar {
    position: fixed;
    top: 0;
    right: -250px; /* Parte iniziale fuori dallo schermo */
    width: 250px;
    height: 100%;
    background-color: #f8f9fa;
    box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
    transition: right 0.3s ease-in-out; /* Aggiungi la transizione per il movimento orizzontale */
    z-index: 1050;
  }
  
  .sidebar.show {
    right: 0; /* Quando è visibile, si sposta dentro lo schermo */
  }
  
  .offcanvas-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    background-color: #343a40;
    color: white;
  }
  
  .offcanvas-body {
    padding: 1rem;
  }
  </style>
  