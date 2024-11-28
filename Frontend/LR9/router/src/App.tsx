import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Header from "./components/Header";
import Footer from "./components/Footer";
import Movies from "./pages/Movies";
import Cartoons from "./pages/Cartoons";
import Series from "./pages/Series";

const App = () => {
  return (
    <Router
      future={{
        v7_startTransition: true,
        v7_relativeSplatPath: true,
      }}
    >
      <Header />
      <Routes>
        <Route path="/movies" element={<Movies />} />
        <Route path="/cartoons" element={<Cartoons />} />
        <Route path="/series" element={<Series />} />
      </Routes>
      <Footer />
    </Router>
  );
};

export default App;
