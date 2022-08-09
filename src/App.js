import "./App.css";
import logo from "./logoExpoCe.jpg";
import { FacebookFilled, InstagramFilled, TwitterOutlined, LinkedinFilled, YoutubeFilled } from "@ant-design/icons"

function App() {
  return (
    <div className="App">
      <header className="header">
        <div className="div-logo">logo</div>
        <div className="div-menu">
          <a>Novedades</a>
          <a>Sponsors</a>
          <a>Ubicacion</a>
          <a>Contacto</a>
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
        <div className="contacto">
          <p>Email: asdgasdga@cerveza.com</p>
          <p>Telefono: 3535512412</p>
          <p>Ruta 158 km 237</p>
          <p>Villa General Belgrano, Córdoba</p>
        </div>
        <div className="redes">
          <FacebookFilled className="icono" />
          <InstagramFilled className="icono" />
          <TwitterOutlined className="icono" />
          <LinkedinFilled className="icono" />
          <YoutubeFilled className="icono" />
        </div>
      </footer>
    </div>
  );
}

export default App;
