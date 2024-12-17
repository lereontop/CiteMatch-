import { createRouter, createWebHistory } from 'vue-router';
import Home from '../components/Home.vue';
import NotFound from '../components/NotFound.vue';
import LoginPage from '../pages/LoginPage.vue'
import RegisterPage from '../pages/RegisterPage.vue'
import DashboardPage from "../pages/DashboardPage.vue";
import UploadPage from "../pages/UploadPage.vue";
import ResultsPage from "../pages/ResultsPage.vue";
import SuggestionsPage from "../pages/SuggestionsPage.vue";
import ReportPage from "../pages/ReportPage.vue";



// Define your routes
const routes = [
    {
        path: '/',
        name:Home,
        component: Home,
    },
    {
    path: '/login',
    name:LoginPage,
    component: LoginPage
    },
    {
    path: '/register',
    name:RegisterPage,
    component: RegisterPage
    },


      {
        path: "/dashboard",
        name: "Dashboard",
        component: DashboardPage,
        // meta: { requiresAuth: true }, // Optional: Add route guard for authenticated users
      },

      { path: "/upload", name: "Upload", component: UploadPage },
  { path: "/results", name: "Results", component: ResultsPage },
  { path: "/suggestions", name: "Suggestions", component: SuggestionsPage },
  { path: "/report", name: "Report", component: ReportPage },

  {
    path: '/:pathMatch(.*)*',
    name: 'not-found',
    component: NotFound,
  }
];

// Create the router instance
const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
