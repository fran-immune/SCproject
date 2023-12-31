<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Cripto News</title>
    <script src="custom.js" defer></script>
    <link rel="stylesheet" href="estilos.css" />
  </head>
  <body>
    <header>
      <h1>Mi sitio de criptomonedass</h1>
    </header>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Noticias</a></li>
        <li><a href="#">Criptomonedas</a></li>
        <li><a href="#">Cursos</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
    <main>
      <section class="main-section">
        <h2>Cotizador de Criptomonedas</h2>
        <div class="container">
          <div class="image-side"></div>
          <div class="form-side">
            <form action="" id="form-search">
              <select id="moneda" name="moneda">
                <option value="">Elige tu moneda</option>
                <option value="USD">Dolar Estadounidense</option>
                <option value="MXN">Peso Mexicano</option>
                <option value="GBP">Libras</option>
                <option value="EUR">Euros</option>
              </select>

              <select id="criptomonedas" name="criptomoneda">
                <option value="">Elige tu criptomoneda</option>
              </select>

              <input class="" type="submit" value="Cotizar" />
              <div class="container-answer"></div>
              <!-- <div class="display-info">
                        <p class="main-price">Precio: <span>$433.33</span></p>
                        <p>Precio más alto del día:: <span>$433.33</span></p>
                        <p>Precio más bajo del día: <span>$433.33</span></p>
                        <p>Variación últimas 24 horas: <span>$433.33</span></p>
                        <p>Última Actualización: <span>$433.33</span></p>
                    </div> -->
            </form>
          </div>
        </div>
      </section>
      <section>
        <article>
          <h2>Bitcoin</h2>
          <p>
            Bitcoin es una criptomoneda descentralizada, sin necesidad de
            intermediarios y que se basa en la tecnología blockchain.
          </p>
        </article>
        <article>
          <h2>Ethereum</h2>
          <p>
            Ethereum es una plataforma descentralizada que permite la creación
            de contratos inteligentes y aplicaciones descentralizadas.
          </p>
        </article>
        <article>
          <h2>Ripple</h2>
          <p>
            Ripple es una criptomoneda que se utiliza para transferencias
            internacionales de dinero y que se basa en la tecnología blockchain.
          </p>
        </article>
        <article>
          <h2>Eyes coin</h2>
          <p>
            Eyes es una criptomoneda que se utiliza para transferencias
            internacionales de dinero y que se basa en la tecnología blockchain.
          </p>
        </article>
      </section>
      <aside>
        <div>
          <form  method="post">
             <label for="name">Nombre:</label>
            <input type="text" name="name" placeholder="Nombre completo" />
             <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Email" />

            <input type="submit" value="Suscribirse" />
          </form>
          <?php 
              include("registrar.php");
          ?>
        </div>

        <div class="buscador">
          <input type="text" placeholder="Buscar..." />
          <button>Buscar</button>
        </div>
      </aside>
    </main>
    <footer>
      <p>&copy; 2021 Mi sitio de criptomonedas</p>
    </footer>
  </body>
</html>
