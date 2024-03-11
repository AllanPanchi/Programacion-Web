import { useEffect, useState } from 'react'
import { Route, BrowserRouter as Router, Routes } from "react-router-dom";
import Start from '../src/components/Start.jsx';
import Resena from './screens/Resena.jsx'
import './App.css'

function App() {

  return (
    <>
      <Router>
        <Routes>
          <Route path="/" element={<Start />} />
          <Route path='/resena' element={<Resena />}></Route>
        </Routes>
      </Router>
    </>
  )
}

export default App
