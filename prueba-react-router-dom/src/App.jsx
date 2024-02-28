import { Route, BrowserRouter as Router, Routes } from "react-router-dom";
import Navbar from "./components/Navbar";
import Home from "./screens/Home";
import Contact from "./screens/Contact";
import './App.css';

function App() {
  return (
    <div>
      <Router>
      <div className='nav'>
      <Navbar />
      </div>
        <Routes >
          <Route path="/home" element={<Home/>}/>
          <Route path="/contact" element={<Contact/>}/>
        </Routes>
      </Router>
    </div>
  );
}

export default App;