<template>
    <div class="suggestions-page">
      <!-- Navbar -->
      <Navbar />

      <!-- Main Content -->
      <div class="content-container">
        <h1 class="page-title animate-title">Suggestions and Corrections</h1>
        <div class="suggestions-section animate-fade">
          <SuggestionsCorrections />
        </div>
      </div>

      <!-- Footer -->
      <Footer />
    </div>
  </template>

  <script>
  import Navbar from "../components/Navbar.vue";
  import Footer from "../components/Footer.vue";
  import SuggestionsCorrections from "../components/dashboard/SuggestionsCorrections.vue";

  export default {
    components: {
      Navbar,
      Footer,
      SuggestionsCorrections,
    },
  };
  </script>

  <style scoped>
  /* Page Container Styling */
  .suggestions-page {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background: linear-gradient(to bottom, #f9f9f9, #e3f2fd); /* Light gradient background */
    font-family: "Arial", sans-serif;
  }

  /* Centered Content Styling */
  .content-container {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    text-align: center;
  }

  /* Title Styling with Animation */
  .page-title {
    font-size: 3rem;
    margin-bottom: 30px;
    color: #333;
    animation: fadeInDown 1s ease-in-out;
  }

  /* Suggestions Section */
  .suggestions-section {
    width: 100%;
    max-width: 900px; /* Constrain to prevent stretching */
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15); /* Soft shadow for depth */
    animation: fadeInUp 1s ease-in-out;
  }

  /* Animations */
  @keyframes fadeInDown {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .page-title {
      font-size: 2.5rem;
    }

    .suggestions-section {
      padding: 15px;
      margin: 10px;
    }
  }

  @media (max-width: 480px) {
    .page-title {
      font-size: 2rem;
    }

    .suggestions-section {
      padding: 10px;
      margin: 5px;
    }
  }
  </style>
