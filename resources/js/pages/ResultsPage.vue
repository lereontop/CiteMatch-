<template>
    <div class="results-page">
      <!-- Navbar -->
      <Navbar />

      <!-- Main Content -->
      <div class="content-container">
        <h1 class="animate-title">Analysis Results</h1>

        <!-- Analysis Progress Section -->
        <div class="analysis-section animate-fade">
          <AnalysisProgress />
        </div>

        <!-- Citation Comparison Section -->
        <div class="comparison-section animate-fade delay">
          <CitationComparison />
        </div>
      </div>

      <!-- Footer -->
      <Footer />
    </div>
  </template>

  <script>
  import Navbar from "../components/Navbar.vue";
  import Footer from "../components/Footer.vue";
  import AnalysisProgress from "../components/dashboard/AnalysisProgress.vue";
  import CitationComparison from "../components/dashboard/CitationComparison.vue";

  export default {
    components: {
      Navbar,
      Footer,
      AnalysisProgress,
      CitationComparison,
    },
  };
  </script>

  <style scoped>
  /* Page Container Styling */
  .results-page {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background: linear-gradient(to bottom, #f9f9f9, #e0f7fa); /* Soft gradient background */
    font-family: Arial, sans-serif;
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
  .animate-title {
    font-size: 3rem;
    margin-bottom: 30px;
    color: #333;
    animation: fadeInDown 1s ease-in-out;
  }

  /* Sections Styling */
  .analysis-section,
  .comparison-section {
    width: 100%;
    max-width: 800px; /* Constrain to prevent stretching */
    margin: 20px 0;
    padding: 20px;
    background: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    border-radius: 8px;
    animation: fadeInUp 1s ease-in-out;
  }

  /* Delayed Animation for Comparison Section */
  .animate-fade.delay {
    animation-delay: 0.5s;
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

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .animate-title {
      font-size: 2.5rem;
    }

    .analysis-section,
    .comparison-section {
      margin: 10px 0;
      padding: 15px;
    }
  }

  @media (max-width: 480px) {
    .animate-title {
      font-size: 2rem;
    }

    .analysis-section,
    .comparison-section {
      padding: 10px;
    }
  }
  </style>
