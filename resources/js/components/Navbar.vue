<template>
    <nav class="navbar">
      <div class="navbar-container">
        <!-- Logo -->
        <div class="logo">
          <router-link to="/dashboard">CitationMatch</router-link>
        </div>

        <!-- Navigation Links -->
        <ul class="nav-links">
          <li><router-link to="/dashboard">Dashboard</router-link></li>
          <li><router-link to="/upload">Upload</router-link></li>
          <li><router-link to="/results">Results</router-link></li>
          <li><router-link to="/suggestions">Suggestions</router-link></li>
          <li><router-link to="/report">Report</router-link></li>
        </ul>

        <!-- Logout Button -->
        <button @click="logout" class="logout-btn">Logout</button>
      </div>
    </nav>
  </template>

  <script>
  export default {
    name: "Navbar",
    methods: {
      logout() {
        // Clear authentication data and redirect to login
        localStorage.removeItem("authToken");
        this.$router.push("/login");
      },
    },
  };
  </script>

  <style scoped>
  .navbar {
    background-color: #4caf50; /* Primary green color */
    color: white;
    padding: 20px 30px; /* Increased padding for height */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    position: relative;
  }

  .navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px; /* Centering the navbar */
    margin: 0 auto; /* Centering the navbar */
  }

  .logo a {
    font-size: 2rem; /* Increased font size for logo */
    font-weight: bold;
    text-decoration: none;
    color: white;
    transition: color 0.3s ease;
  }

  .logo a:hover {
    color: #d4edda; /* Light green for hover */
  }

  .nav-links {
    list-style: none;
    display: flex;
    gap: 30px;
    margin: 0;
    padding: 0;
  }

  .nav-links li a {
    text-decoration: none;
    color: white;
    font-weight: 500;
    padding: 15px 20px; /* Increased padding for links */
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .nav-links li a:hover {
    background-color: rgba(255, 255, 255, 0.2); /* Light background on hover */
    color: #d4edda; /* Light green for hover */
  }

  .logout-btn {
    background-color: #d9534f; /* Red logout button */
    color: white;
    border: none;
    padding: 12px 25px; /* Increased padding for button */
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem; /* Increased font size for button */
    transition: background-color 0.3s ease, transform 0.2s ease;
  }

  .logout-btn:hover {
    background-color: #c9302c; /* Darker red on hover */
    transform: scale(1.05); /* Slightly enlarge on hover */
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .navbar-container {
      flex-direction: column;
      align-items: flex-start;
    }

    .nav-links {
      flex-direction: column;
      gap: 10px;
      margin-top: 10px;
    }

    .logout-btn {
      width: 100%;
      margin-top: 10px;
    }
  }
  </style>
