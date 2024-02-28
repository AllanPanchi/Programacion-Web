import { useEffect, useState } from 'react'
import LogInStructure from './components/LogInStructure'
import './App.css'
import { setListeners } from './scripts/main'

function App() {

  useEffect(() => {
    setListeners();
  }, []);

  return (
    <>
      <div className='box__fondo'>
        <section className="fondo"></section>
      </div>
      <LogInStructure />
      <nav className="top">
        <ul className="top__opciones">
          <li className="top__opciones"><a href="index.html"><img className="logo" src="images/logo.png" />
            <p>GameLib</p>
          </a></li>
          <li className="top__opciones top__opciones-right"><button className="opcion" id="btn-logIn">Iniciar
            Sesión</button>
          </li>

        </ul>
      </nav>

      <section className="cuerpo">
        <aside className="aside">
          <p className="aside__eslogan">
            "Descubre, conoce y comparte en este lugar donde tus reseñas se convierten en inspiración"
          </p>
        </aside>
        <hr className="line" />
        <p className="p">
          Reseñas mas populares
        </p>
        <div className="resenas">
          <div className="celda"><img src="images/imagesJuegos/ApexLegends.jpg" /></div>
          <div className="celda"><img src="images/imagesJuegos/Cyberpunk.jpg" /></div>
          <div className="celda"><img src="images/imagesJuegos/Overwatch.jpg" /></div>
          <div className="celda"><img src="images/imagesJuegos/GTAV.png" /></div>
          <div className="celda"><img src="images/imagesJuegos/RDR2.jpg" /></div>
          <div className="celda"><img src="images/imagesJuegos/Asphalt8.jpg" /></div>
        </div>

        <hr className="line" />
        <p className="p">GameLib te ofrece...</p>

        <section className="contenedor">
          <section className="contenedor__contenido contenedor__contenido-conoce" id="conoce-bg">
            <h2 className="contenedor__contenido-titulo">Conoce</h2>
            <p className="contenedor__contenido-parrafo contenedor__contenido-parrafo-conoce">.</p>
            <img className="contenedor__contenido-img" src="Images/magnifier.png" />
          </section>
          <section className="contenedor__contenido contenedor__contenido-comparte" id="comparte-bg">
            <h2 className="contenedor__contenido-titulo">Comparte</h2>
            <p className="contenedor__contenido-parrafo contenedor__contenido-parrafo-comparte">.</p>
            <img className="contenedor__contenido-img" src="Images/share.png" />
          </section>
          <section className="contenedor__contenido contenedor__contenido-publica" id="publica-bg">
            <h2 className="contenedor__contenido-titulo">Publica</h2>
            <p className="contenedor__contenido-parrafo contenedor__contenido-parrafo-publica">.</p>
            <img className="contenedor__contenido-img" src="Images/upload.png" />
          </section>
        </section>
      </section>

      <footer>
        <p>© GameLib 2024</p>
        <section className="footer__right">
          <img className="img__footer" src="images/facebook.png" alt="" />
          <img className="img__footer" src="images/ig.png" alt="" />
          <img className="img__footer" src="images/threads.png" alt="" />
        </section>
      </footer>

    </>
  )
}

export default App
