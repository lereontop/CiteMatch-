<template>
  <Navbar />
  <div class="dashboard-page">
    <h1>Dashboard</h1>
    <div class="dashboard-grid">
      <UploadThesis />
      <AnalysisProgress />
      <CitationComparison />
      <SuggestionsCorrections />
      <FinalReport />
    </div>
  </div>
  <Footer />
</template>

  <script>
import Navbar from "../components/Navbar.vue";
import Footer from "../components/Footer.vue";
import UploadThesis from "../components/dashboard/UploadThesis.vue";
import AnalysisProgress from "../components/dashboard/AnalysisProgress.vue";
import CitationComparison from "../components/dashboard/CitationComparison.vue";
import SuggestionsCorrections from "../components/dashboard/SuggestionsCorrections.vue";
import FinalReport from "../components/dashboard/FinalReport.vue";


export default {
  components: {
    Navbar,
    Footer,
    UploadThesis,
    AnalysisProgress,
    CitationComparison,
    SuggestionsCorrections,
    FinalReport,
  },
};
</script>

  <style scoped>
.dashboard-page {
  padding: 20px;
}
.dashboard-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
}
</style>
