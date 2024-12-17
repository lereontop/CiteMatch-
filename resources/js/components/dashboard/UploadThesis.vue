<template>
    <div class="upload-thesis">
      <h2>Upload Your Thesis</h2>
      <p class="instructions">Please upload your thesis in PDF or Word format.</p>

      <form @submit.prevent="handleUpload" class="upload-form">
        <div class="file-input-container">
          <input
            type="file"
            @change="onFileChange"
            accept=".pdf,.doc,.docx"
            id="file-upload"
            class="file-input"
          />
          <label for="file-upload" class="file-label">Choose a File</label>
        </div>

        <button type="submit" class="upload-btn" :disabled="!selectedFile">Upload</button>
      </form>

      <div v-if="uploading" class="progress-container">
        <progress max="100" :value="uploadProgress" class="progress-bar"></progress>
        <span class="progress-text">{{ uploadProgress }}%</span>
      </div>

      <p v-if="uploadSuccess" class="success-message">Upload successful!</p>
      <p v-if="uploadError" class="error-message">There was an error during the upload. Please try again.</p>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        selectedFile: null,
        uploading: false,
        uploadProgress: 0,
        uploadSuccess: false,
        uploadError: false
      };
    },
    methods: {
      onFileChange(event) {
        this.selectedFile = event.target.files[0];
      },
      handleUpload() {
        if (this.selectedFile) {
          // Simulate an upload process with a timeout for progress
          this.uploading = true;
          this.uploadProgress = 0;
          this.uploadSuccess = false;
          this.uploadError = false;

          // Simulate the file upload by increasing progress
          const interval = setInterval(() => {
            if (this.uploadProgress < 100) {
              this.uploadProgress += 5;
            } else {
              clearInterval(interval);
              this.uploading = false;
              this.uploadSuccess = true;
            }
          }, 100); // Simulating 5% progress every 100ms
        } else {
          alert("No file selected. Please choose a file.");
        }
      }
    }
  };
  </script>

  <style scoped>
  /* Main Container */
  .upload-thesis {
    max-width: 500px;
    margin: 0 auto;
    padding: 30px;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  /* Heading */
  h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #333;
  }

  .instructions {
    font-size: 1rem;
    margin-bottom: 20px;
    color: #555;
  }

  /* File Input */
  .file-input-container {
    position: relative;
    margin-bottom: 20px;
  }

  .file-input {
    display: none;
  }

  .file-label {
    padding: 12px 20px;
    background-color: #4CAF50;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s;
  }

  .file-label:hover {
    background-color: #45a049;
  }

  /* Button */
  .upload-btn {
    padding: 12px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .upload-btn:disabled {
    background-color: #ccc;
    cursor: not-allowed;
  }

  .upload-btn:hover:enabled {
    background-color: #45a049;
  }

  /* Progress Bar */
  .progress-container {
    margin-top: 20px;
    width: 100%;
  }

  .progress-bar {
    width: 100%;
    height: 20px;
    appearance: none;
    border-radius: 10px;
  }

  .progress-bar::-webkit-progress-bar {
    background-color: #eee;
  }

  .progress-bar::-webkit-progress-value {
    background-color: #4CAF50;
  }

  .progress-text {
    font-size: 1rem;
    margin-top: 10px;
    color: #333;
  }

  /* Success and Error Message */
  .success-message {
    margin-top: 20px;
    color: #4CAF50;
    font-size: 1.2rem;
  }

  .error-message {
    margin-top: 20px;
    color: #f44336;
    font-size: 1.2rem;
  }
  </style>
