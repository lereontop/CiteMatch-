<template>
    <div class="not-found">
      <h1 class="fade-in">404</h1>
      <h2 class="fade-in">Oops! Page Not Found</h2>
      <p class="fade-in">Sorry, the page you are looking for does not exist.</p>
      <router-link to="/" class="home-link fade-in">Go to Home</router-link>
    </div>
  </template>

  <script>
  export default {
    name: 'NotFound',
  };
  </script>

  <style scoped>
  .not-found {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f7f7f7;
    color: #333;
    font-family: 'Arial', sans-serif;
    text-align: center;
    opacity: 0;
    animation: fadeInPage 1s forwards; /* Page fade-in */
  }

  h1 {
    font-size: 6rem;
    font-weight: bold;
    margin: 0;
    color: #e74c3c;
    animation: bounceIn 1s ease-out; /* Bounce effect for '404' */
  }

  h2 {
    font-size: 2.2rem;
    margin: 0.5rem 0;
    color: #333;
    animation: fadeInText 1.5s ease-out;
  }

  p {
    font-size: 1.1rem;
    margin: 1rem 0;
    color: #555;
    animation: fadeInText 2s ease-out;
  }

  .home-link {
    margin-top: 1.5rem;
    padding: 12px 24px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-size: 1.1rem;
    transition: background-color 0.3s ease;
    animation: fadeInText 2.5s ease-out;
  }

  .home-link:hover {
    background-color: #0056b3;
  }

  @keyframes fadeInPage {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  @keyframes fadeInText {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes bounceIn {
    0% {
      transform: scale(0);
    }
    50% {
      transform: scale(1.1);
    }
    100% {
      transform: scale(1);
    }
  }

  @media (max-width: 768px) {
    h1 {
      font-size: 5rem;
    }

    h2 {
      font-size: 1.8rem;
    }

    p {
      font-size: 1rem;
    }

    .home-link {
      font-size: 1rem;
      padding: 10px 20px;
    }
  }
  </style>
