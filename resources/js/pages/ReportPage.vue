<template>
    <div class="report-page">
      <!-- Navbar -->
      <Navbar />

      <!-- Main Content -->
      <div class="report-container">
        <h1 class="title">Final Report</h1>
        <p class="description">
          Access and review your detailed thesis report, including citations, suggestions, and feedback.
        </p>
        <div class="content-card">
          <FinalReport />
        </div>
      </div>

      <!-- Footer -->
      <Footer />
    </div>
  </template>

  <script>
  import Navbar from "../components/Navbar.vue";
  import Footer from "../components/Footer.vue";
  import FinalReport from "../components/dashboard/FinalReport.vue";

  export default {
    components: {
      Navbar,
      Footer,
      FinalReport,
    },
  };
  </script>

  <style scoped>
  /* Overall Page Styling */
  .report-page {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background: #f4f6f8; /* Subtle light gray background */
    font-family: "Arial", sans-serif;
  }

  /* Report Container */
  .report-container {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    text-align: center;
  }

  /* Title Styling */
  .title {
    font-size: 3rem;
    color: #333; /* Dark gray for contrast */
    margin-bottom: 15px;
    font-weight: bold;
  }

  /* Description Styling */
  .description {
    font-size: 1.2rem;
    color: #555;
    max-width: 700px;
    margin-bottom: 30px;
    line-height: 1.6;
  }

  /* Content Card Styling */
  .content-card {
    width: 100%;
    max-width: 800px;
    padding: 30px;
    background-color: #fff; /* White card background */
    border: 1px solid #ddd; /* Subtle border */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    animation: slideIn 1s ease-in-out;
  }

  /* Navbar and Footer Styling */
  .report-page Navbar,
  .report-page Footer {
    flex-shrink: 0;
  }

  /* Animations */
  @keyframes slideIn {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .title {
      font-size: 2.5rem;
    }

    .description {
      font-size: 1rem;
      margin-bottom: 20px;
    }

    .content-card {
      padding: 20px;
    }
  }

  @media (max-width: 480px) {
    .title {
      font-size: 2rem;
    }

    .description {
      font-size: 0.9rem;
    }
  }
  </style>
