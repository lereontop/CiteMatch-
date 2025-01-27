<template>
    <div class="login-page">
      <div class="login-container">
        <h2 class="login-title">Welcome Back</h2>
        <p class="login-subtitle">Please enter your credentials to continue</p>

        <form @submit.prevent="submitForm" class="login-form">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" v-model="email" required placeholder="Enter your email" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" v-model="password" required placeholder="Enter your password" />
          </div>
          <button type="submit" class="submit-btn">Login</button>
        </form>

        <p class="forgot-password"><a href="#">Forgot your password?</a></p>

        <p class="register-link">
          Don't have an account?
          <router-link to="/register" class="register-btn">Register here</router-link>
        </p>
      </div>
    </div>
  </template>

  <script>
  import { ref } from 'vue';
  import axios from 'axios';

  export default {
    setup() {
      const email = ref('');
      const password = ref('');

      const submitForm = async () => {
        try {
          const response = await axios.post('http://127.0.0.1:8000/api/login', {
            email: email.value,
            password: password.value,
          });

          console.log('Login Successful:', response.data);
          localStorage.setItem('auth_token', response.data.token);
          this.$router.push('/dashboard');
        } catch (error) {
          console.error('Login failed:', error.response.data.message);
          alert('Invalid credentials');
        }
      };

      return {
        email,
        password,
        submitForm,
      };
    },
  };
  </script>



  <style scoped>
  /* Overall Page Styling */
  .login-page {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(135deg, #4CAF50, #66BB6A); /* Green Gradient background */
  }

  /* Container Styling */
  .login-container {
    width: 100%;
    max-width: 380px;
    padding: 40px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    text-align: center;
    animation: fadeInUp 1s ease-in-out;
  }

  /* Title and Subtitle Styling */
  .login-title {
    font-size: 2.2rem;
    color: #333;
    margin-bottom: 10px;
  }

  .login-subtitle {
    font-size: 1rem;
    color: #555;
    margin-bottom: 20px;
  }

  /* Form Group Styling */
  .form-group {
    margin-bottom: 20px;
    text-align: left;
  }

  label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
    font-size: 1rem;
  }

  input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
    transition: border-color 0.3s;
  }

  input:focus {
    border-color: #4CAF50;
    outline: none;
  }

  /* Submit Button Styling */
  .submit-btn {
    width: 100%;
    padding: 12px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .submit-btn:hover {
    background-color: #388E3C;
  }

  /* Forgot Password Link Styling */
  .forgot-password {
    margin-top: 20px;
    font-size: 0.9rem;
  }

  .forgot-password a {
    color: #4CAF50;
    text-decoration: none;
  }

  .forgot-password a:hover {
    text-decoration: underline;
  }

  /* Register Link Styling */
  .register-link {
    margin-top: 15px;
    font-size: 0.9rem;
  }

  .register-btn {
    color: #4CAF50;
    text-decoration: none;
  }

  .register-btn:hover {
    text-decoration: underline;
  }

  /* Animations */
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
    .login-container {
      padding: 30px;
      max-width: 90%; /* Adjust width for smaller screens */
    }

    .login-title {
      font-size: 1.8rem;
    }

    .login-subtitle {
      font-size: 0.9rem;
    }

    .submit-btn {
      font-size: 1rem;
    }
  }

  @media (max-width: 480px) {
    .login-title {
      font-size: 1.6rem;
    }

    .login-subtitle {
      font-size: 0.8rem;
    }

    .submit-btn {
      font-size: 0.9rem;
    }
  }
  </style>
