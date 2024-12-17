<template>
    <div class="default-layout">
      <!-- Navbar -->
      <header class="header">
        <div class="logo">
          <router-link to="/">CitationMatch</router-link>
        </div>
        <nav>
          <ul>
            <li><router-link to="/login">Login</router-link></li>
            <li><router-link to="/register">Register</router-link></li>
            <li><router-link to="/dashboard">Dashboard</router-link></li>
          </ul>
        </nav>
      </header>

      <!-- Main Content -->
      <main class="main-content">
        <!-- Welcome Write-up with Animation -->
        <section class="welcome-section">
          <h1 class="fade-in">Welcome to CitationMatch</h1>
          <p class="fade-in delay">
            Your one-stop solution for thesis analysis, citation comparison, and final reports.
            <br />Get started now to streamline your research work!
          </p>
          <div class="action-buttons">
            <router-link to="/login" class="btn">Login</router-link>
            <router-link to="/register" class="btn">Register</router-link>
          </div>
        </section>
      </main>

      <!-- Footer -->
      <Footer />
    </div>
  </template>

  <script>
  import Footer from "../components/Footer.vue";

  export default {
    components: {
      Footer,
    },
  };
  </script>

  <style scoped>
  /* Layout Styles */
  .default-layout {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    font-family: "Arial", sans-serif;
  }

  .header {
    background-color: #4caf50; /* Green header */
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .header .logo a {
    text-decoration: none;
    color: white;
    font-size: 1.8rem;
    font-weight: bold;
  }

  .header nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
    margin: 0;
    padding: 0;
  }

  .header nav ul li a {
    text-decoration: none;
    color: white;
    font-weight: 600;
    transition: color 0.3s ease;
    font-size: 1.2rem;
  }

  .header nav ul li a:hover {
    color: #d4edda;
  }

  .main-content {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f9f9f9;
    text-align: center;
    padding: 20px;
  }

  .welcome-section {
    max-width: 800px;
    padding: 20px;
  }

  .welcome-section h1 {
    font-size: 3.5rem; /* Bigger font size */
    color: #333;
    margin-bottom: 20px;
    font-weight: bold;
  }

  .welcome-section p {
    font-size: 1.5rem; /* Larger description */
    color: #555;
    margin-bottom: 30px;
    line-height: 1.6;
  }

  .action-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
  }

  .action-buttons .btn {
    display: inline-block;
    padding: 15px 30px;
    font-size: 1.5rem; /* Larger buttons */
    color: white;
    background-color: #4caf50;
    text-decoration: none;
    border-radius: 8px;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.2s ease;
  }

  .action-buttons .btn:hover {
    background-color: #45a049;
    transform: scale(1.05);
  }

  /* Animation Effects */
  .fade-in {
    opacity: 0;
    animation: fadeIn 1.5s forwards;
  }

  .fade-in.delay {
    animation-delay: 0.5s;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Footer Styles */
  footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 20px;
  }
  </style>
