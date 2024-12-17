<template>
    <div class="upload-page">
      <!-- Navbar -->
      <Navbar />

      <!-- Main Content -->
      <div class="upload-container">
        <h1 class="animate-title">Upload Your Thesis</h1>
        <p class="animate-description">
          Easily upload your thesis for analysis and get detailed feedback on citations, suggestions, and more.
        </p>
        <div class="animate-form">
          <UploadThesis />
        </div>
      </div>

      <!-- Footer -->
      <Footer />
    </div>
  </template>

  <script>
  import Navbar from "../components/Navbar.vue";
  import Footer from "../components/Footer.vue";
  import UploadThesis from "../components/dashboard/UploadThesis.vue";

  export default {
    components: {
      Navbar,
      Footer,
      UploadThesis,
    },
  };
  </script>

  <style scoped>
  /* Overall Page Styling */
  .upload-page {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background: linear-gradient(to bottom, #f9f9f9, #e0f7fa); /* Light gradient background */
  }

  /* Main Container Styling */
  .upload-container {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    text-align: center;
  }

  /* Title Animation */
  .animate-title {
    font-size: 3rem;
    margin-bottom: 20px;
    color: #333;
    animation: fadeInDown 1s ease-in-out;
  }

  /* Description Animation */
  .animate-description {
    font-size: 1.2rem;
    margin-bottom: 30px;
    color: #555;
    max-width: 600px;
    animation: fadeInUp 1s ease-in-out 0.5s; /* Delay for smoother effect */
    opacity: 0; /* Initial state for animation */
    animation-fill-mode: forwards;
  }

  /* Upload Form Animation */
  .animate-form {
    width: 100%;
    max-width: 600px;
    padding: 20px;
    background: white;
    border: 1px solid #ddd;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    animation: fadeIn 1s ease-in-out 1s; /* Delayed animation for form */
    opacity: 0;
    animation-fill-mode: forwards;
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

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: scale(0.95);
    }
    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .animate-title {
      font-size: 2.5rem;
    }

    .animate-description {
      font-size: 1rem;
    }
  }

  @media (max-width: 480px) {
    .animate-title {
      font-size: 2rem;
    }

    .animate-description {
      font-size: 0.9rem;
    }
  }
  </style>
