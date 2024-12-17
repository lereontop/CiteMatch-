<template>
    <DefaultLayout>
      <template #default>
        <div class="register-page">
          <div class="register-container animate-fade">
            <!-- <h1 class="page-title animate-slide-in">Create Your Account</h1> -->
            <!-- <p class="page-subtitle animate-slide-in-delay">Fill in the details to start using our service</p> -->
            <RegisterForm class="animate-zoom-in" />
          </div>
        </div>
      </template>
    </DefaultLayout>
  </template>

  <script>
import RegisterForm from '../components/auth/RegisterForm.vue';

  export default {
    components: {
        RegisterForm,
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
    background: linear-gradient(to bottom, #f3e5f5, #e1bee7); /* Soft gradient background */
    font-family: "Arial", sans-serif;
    overflow: hidden; /* Prevent scrolling during animations */
  }

  /* Centered Container Styling */
  .register-container {
    width: 100%;
    max-width: 400px; /* Restrict form width for better usability */
    padding: 30px;
    background: #fff; /* White background for form */
    border-radius: 10px;
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15); /* Subtle shadow for depth */
    text-align: center;
    animation: fadeInUp 1s ease-in-out;
  }

  /* Title Styling */
  .page-title {
    font-size: 2rem;
    margin-bottom: 10px;
    color: #333;
  }

  /* Subtitle Styling */
  .page-subtitle {
    font-size: 1.2rem;
    margin-bottom: 20px;
    color: #666;
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

  @keyframes slideIn {
    from {
      opacity: 0;
      transform: translateX(-50px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes slideInDelay {
    from {
      opacity: 0;
      transform: translateX(50px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes zoomIn {
    from {
      opacity: 0;
      transform: scale(0.8);
    }
    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  /* Animation Classes */
  .animate-fade {
    animation: fadeInUp 1s ease-in-out;
  }

  .animate-slide-in {
    animation: slideIn 1.2s ease-in-out;
  }

  .animate-slide-in-delay {
    animation: slideInDelay 1.4s ease-in-out;
  }

  .animate-zoom-in {
    animation: zoomIn 1.6s ease-in-out;
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .register-container {
      padding: 20px;
      max-width: 90%; /* Take up more width on smaller screens */
    }

    .page-title {
      font-size: 1.8rem;
    }

    .page-subtitle {
      font-size: 1rem;
    }
  }

  @media (max-width: 480px) {
    .page-title {
      font-size: 1.5rem;
    }

    .page-subtitle {
      font-size: 0.9rem;
    }
  }
  </style>
