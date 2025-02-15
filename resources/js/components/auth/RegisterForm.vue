<template>
  <div class="register-page">
    <div class="register-container">
      <h2 class="register-title">Create Your Account</h2>
      <p class="register-subtitle">Fill in the details below to get started</p>

      <form @submit.prevent="submitForm" class="register-form">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input
            type="text"
            v-model="form.name"
            required
            placeholder="Enter your full name"
          />
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input
            type="email"
            v-model="form.email"
            required
            placeholder="Enter your email"
          />
        </div>
        <div class="form-group password-group">
          <label for="password">Password</label>
          <div class="password-container">
            <input
              :type="passwordVisible ? 'text' : 'password'"
              v-model="form.password"
              required
              placeholder="Choose a password"
            />
            <span class="toggle-password" @click="togglePasswordVisibility">
              <i
                :class="passwordVisible ? 'fas fa-eye-slash' : 'fas fa-eye'"
              ></i>
            </span>
          </div>
        </div>
        <button type="submit" class="submit-btn" :disabled="loading">
          {{ loading ? "Registering..." : "Register" }}
        </button>
      </form>

      <p class="login-link">
        Already have an account?
        <router-link to="/login" class="login-btn">Login here</router-link>
      </p>
    </div>
  </div>
</template>

  <script>
import axios from "axios";
import { ref } from "vue";

export default {
  setup() {
    const form = ref({
      name: "",
      email: "",
      password: "",
    });

    const passwordVisible = ref(false);
    const loading = ref(false);

    const togglePasswordVisibility = () => {
      passwordVisible.value = !passwordVisible.value;
    };

    const submitForm = async () => {
      loading.value = true;

      try {
        console.log(form.value);
        const response = await axios.post("/api/register", form.value);
        console.log(response.data);

        alert("Registration successful!");
      } catch (error) {
        console.error(error.response?.data || error.message);
        alert("Registration failed. Please try again.");
      } finally {
        loading.value = false;
      }
    };

    return {
      form,
      passwordVisible,
      loading,
      togglePasswordVisibility,
      submitForm,
    };
  },
};
</script>


<style scoped>
/* Overall Page Styling */
.register-page {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: linear-gradient(
    135deg,
    #4caf50,
    #66bb6a
  ); /* Green Gradient background */
}

/* Container Styling */
.register-container {
  width: 100%;
  max-width: 400px;
  padding: 40px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  text-align: center;
  animation: fadeInUp 1s ease-in-out;
}

/* Title and Subtitle Styling */
.register-title {
  font-size: 2.2rem;
  color: #333;
  margin-bottom: 10px;
}

.register-subtitle {
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
  border-color: #4caf50;
  outline: none;
}

/* Password Field Styling */
.password-group {
  position: relative;
}

.password-container {
  display: flex;
  align-items: center;
}

.password-container input {
  width: calc(100% - 40px); /* Adjust input width to accommodate the icon */
  padding-right: 30px; /* Space for the icon */
}

.toggle-password {
  position: absolute;
  right: 10px;
  cursor: pointer;
  color: #666;
}

/* Submit Button Styling */
.submit-btn {
  width: 100%;
  padding: 12px;
  background-color: #4caf50;
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 1.1rem;
  cursor: pointer;
  transition: background-color 0.3s;
}

.submit-btn:hover {
  background-color: #388e3c;
}

/* Login Link Styling */
.login-link {
  margin-top: 20px;
  font-size: 0.9rem;
}

.login-btn {
  color: #4caf50;
  text-decoration: none;
}

.login-btn:hover {
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
  .register-container {
    padding: 30px;
    max-width: 90%; /* Adjust width for smaller screens */
  }

  .register-title {
    font-size: 1.8rem;
  }

  .register-subtitle {
    font-size: 0.9rem;
  }

  .submit-btn {
    font-size: 1rem;
  }
}

@media (max-width: 480px) {
  .register-title {
    font-size: 1.6rem;
  }

  .register-subtitle {
    font-size: 0.8rem;
  }

  .submit-btn {
    font-size: 0.9rem;
  }
}
</style>
