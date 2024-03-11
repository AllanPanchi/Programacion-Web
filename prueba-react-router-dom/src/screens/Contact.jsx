import React from 'react'
import '../styles/Contact.css'
import Footer from '../components/Footer'


function Contact() {
  return (
    <>
      <section className="container">
        <section>
          <section className='barra_busqueda'>
            <button className='btn-add'><i className="fa-solid fa-plus"></i></button>
            <input type='text' placeholder='Buscar' className='ipt-search'></input>
            <button className='btn-search'><i className="fa-solid fa-magnifying-glass"></i></button>
          </section>
        </section>
        <section className='container-resena'>
          <h1 className='titulo-container'>RESEÑAS</h1>
          <hr></hr>
          <section className='container-resenia_child'>
          <section className='fila1'>
            <section className='resenia'>
              <section className='buttons'>
                <button className='btn-edit'>Editar</button>
                <button className='btn-delete'>Eliminar</button>
              </section>
            </section>
            <section className='resenia'>
              <section className='buttons'>
                <button className='btn-edit'>Editar</button>
                <button className='btn-delete'>Eliminar</button>
              </section>
            </section>
          </section>
          <section className='fila2'>
            <section className='resenia'>
              <section className='buttons'>
                <button className='btn-edit'>Editar</button>
                <button className='btn-delete'>Eliminar</button>
              </section>
            </section>
            <section className='resenia'>
              <section className='buttons'>
                <button className='btn-edit'>Editar</button>
                <button className='btn-delete'>Eliminar</button>
              </section>
            </section>
          </section>

          </section>
        </section>
      </section>
      <Footer />
    </>
  );
}


export default Contact;