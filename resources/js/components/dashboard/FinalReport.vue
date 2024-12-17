<template>
    <div class="final-report">
      <h2>Final Report</h2>
      <p class="report-description">
        The analysis is complete! You can download the final report below.
      </p>
      <button @click="downloadReport" class="download-btn">
        Download Report
      </button>
    </div>
  </template>

  <script>
  export default {
    methods: {
      downloadReport() {
        alert("Final report downloaded!");
        // Logic for downloading the report can be added here, such as:
        // window.location.href = '/path/to/report.pdf';
      },
    },
  };
  </script>

  <style scoped>
  .final-report {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin: 0 auto;
    text-align: center;
  }

  h2 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 15px;
  }

  .report-description {
    font-size: 1rem;
    color: #555;
    margin-bottom: 20px;
  }

  button {
    padding: 12px 20px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #388e3c;
  }

  @media (max-width: 768px) {
    .final-report {
      padding: 20px;
      max-width: 90%;
    }

    h2 {
      font-size: 1.8rem;
    }

    .report-description {
      font-size: 0.9rem;
    }

    button {
      font-size: 1rem;
    }
  }
  </style>
