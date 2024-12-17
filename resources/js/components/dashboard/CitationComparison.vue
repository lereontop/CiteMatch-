<template>
    <div class="citation-comparison">
      <h2>Citation Comparison</h2>
      <p>Total Citations Found: {{ totalCitations }}</p>
      <p>Citations Matched: {{ matchedCitations }}</p>
      <p>Match Percentage: {{ matchPercentage }}%</p>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        totalCitations: 120,
        matchedCitations: 100,
      };
    },
    computed: {
      matchPercentage() {
        return ((this.matchedCitations / this.totalCitations) * 100).toFixed(2);
      },
    },
  };
  </script>

  <style scoped>
  .citation-comparison {
    text-align: center;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  </style>
