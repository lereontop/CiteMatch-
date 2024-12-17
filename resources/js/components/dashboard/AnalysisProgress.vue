<template>
    <div class="analysis-progress">
      <h2>Analysis Progress</h2>
      <div class="progress-bar">
        <div class="progress" :style="{ width: progress + '%' }"></div>
      </div>
      <p class="progress-text">{{ progress }}% Complete</p>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        progress: 0,
      };
    },
    mounted() {
      // Simulating progress for demonstration (use actual logic in production)
      const interval = setInterval(() => {
        if (this.progress < 100) {
          this.progress += 10; // Update progress incrementally
        } else {
          clearInterval(interval);
        }
      }, 1000); // Update progress every 1 second
    },
  };
  </script>

  <style scoped>
  .analysis-progress {
    text-align: center;
    padding: 30px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
  }

  h2 {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 20px;
  }

  .progress-bar {
    background-color: #e0e0e0;
    border-radius: 10px;
    height: 20px;
    margin: 20px 0;
    width: 100%;
    position: relative;
  }

  .progress {
    background-color: #4caf50;
    height: 100%;
    border-radius: 10px;
    transition: width 0.3s ease;
  }

  .progress-text {
    font-size: 1.1rem;
    font-weight: bold;
    color: #4caf50;
    margin-top: 10px;
  }

  @media (max-width: 768px) {
    .analysis-progress {
      padding: 20px;
      max-width: 90%;
    }
    h2 {
      font-size: 1.5rem;
    }
    .progress-text {
      font-size: 1rem;
    }
  }
  </style>
