<template>
    <footer class="footer">
      <div class="footer-container">
        <p>&copy; {{ currentYear }} CitationMatch. All rights reserved.</p>
        <ul class="footer-links">
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </footer>
  </template>

  <script>
  export default {
    name: "Footer",
    data() {
      return {
        currentYear: new Date().getFullYear(),
      };
    },
  };
  </script>

  <style scoped>
  .footer {
    background-color: #333;
    color: white;
    padding: 20px 10px;
    text-align: center;
  }

  .footer-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
  }

  .footer p {
    margin: 0;
  }

  .footer-links {
    list-style: none;
    display: flex;
    gap: 15px;
    margin: 0;
    padding: 0;
  }

  .footer-links li a {
    color: #d4edda; /* Light green */
    text-decoration: none;
    font-size: 0.9rem;
    transition: color 0.3s ease;
  }

  .footer-links li a:hover {
    color: white;
  }
  </style>
