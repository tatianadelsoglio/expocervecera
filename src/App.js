import "./App.css";
import logo from "./logoExpoCe.jpg";

function App() {
  return (
    <div className="App">
      <header className="header">
        <div className="header_content">
          <div className="div-logo">
            <img src={logo} width="250px" height="90px" alt="logo-expoCe"/>
          </div>
          <div className="div-menu">
            <a href="#novedades">Novedades</a>            
            <a href="#ubicacion">Ubicación</a>
            <a href="#sponsors">Sponsors</a>
            <a href="#galeria">Galeria</a>
            <a href="#contacto">Contacto</a>
          </div>
        </div>
      </header>
      <body className="body">
        <section className="novedades" id="novedades">
          <div className="mitad">Novedades 1</div>
          <div className="mitad">Novedades 2</div>
        </section>
        <section className="ubicacion" id="ubicacion">
          <div className="mitad">Ubicacion Texto</div>
          <div className="mitad">Ubicación Mapa</div>
        </section>
        <section className="sponsors" id="sponsors">
          <div className="div_sponsors">SPONSORS</div>
        </section>
        <section className="galeria" id="galeria">
          <div className="mitad">Galeria</div>
          <div className="mitad">Galeria</div>
        </section>
      </body>
      <footer className="footer">
        <div className="contacto" id="contacto">
          <p>Email: info@expocervecera.com.ar</p>
          <p>Telefono: +54 9 3536559021</p>
          <p>Ruta 158 km 237</p>
          <p>Villa General Belgrano, Córdoba</p>
        </div>
      </footer>
    </div>
  );
}

export default App;
