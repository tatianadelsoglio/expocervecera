import "./App.css";

function App() {
  return (
    <div className="App">
      <header className="header">
        <div className="div-logo">logo</div>
        <div className="div-menu">
          <a>Novedades</a>
          <a>Sponsors</a>
          <a>Ubicación</a>
          <a>Contacto</a>
        </div>
      </header>
      <body className="body">
        <section className="seccion-sponsors">
          <div className="mitad"></div>
          <div className="mitad"></div>
        </section>
        <section className="seccion-informacion">
          <div className="mitad"></div>
          <div className="mitad"></div>
        </section>
      </body>
      <footer className="footer">
        <div className="contacto">
          <p>Email: info@expocervecera.com.ar</p>
          <p>Teléfono: +54 9 3536559021</p>
          <p>Villa General Belgrano, Córdoba</p>
          <p>Ruta 158 km 237</p>
        </div>
        <div className="redes">

        </div>
      </footer>
    </div>
  );
}

export default App;
