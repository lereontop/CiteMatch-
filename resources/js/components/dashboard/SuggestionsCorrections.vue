<template>
    <div class="suggestions-corrections">
      <h2>Suggestions and Corrections</h2>
      <ul>
        <li v-for="(item, index) in suggestions" :key="index">
          <div class="suggestion-item">
            <span class="suggestion-text">{{ item }}</span>
          </div>
        </li>
      </ul>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        suggestions: [
          "Fix grammar errors in Chapter 1.",
          "Improve citation formatting in Section 2.",
          "Add a stronger conclusion to Chapter 4.",
        ],
      };
    },
  };
  </script>

  <style scoped>
  .suggestions-corrections {
    background-color: #f7f7f7;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin: 0 auto;
  }

  h2 {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
  }

  ul {
    list-style: none;
    padding: 0;
  }

  .suggestion-item {
    padding: 12px;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin: 10px 0;
    transition: all 0.3s ease;
  }

  .suggestion-item:hover {
    background-color: #e8f5e9;
    border-color: #4caf50;
  }

  .suggestion-text {
    font-size: 1rem;
    color: #555;
  }

  @media (max-width: 768px) {
    .suggestions-corrections {
      padding: 15px;
      max-width: 90%;
    }

    h2 {
      font-size: 1.5rem;
    }

    .suggestion-text {
      font-size: 0.9rem;
    }
  }
  </style>
