<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brechó da Ni</title>
    <link rel="icon" href="clothes.png">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <header>
      <nav>
        <div class="container">
          <a href="index.php" class="logo">
            <h1>Brechó da Ni</h1>
          </a>
        </div>
      </nav>

      <Section class="hero">
        <div class="container">
          <form id="formSearch">
            <input type="search" placeholder=" O que deseja vestir?" name="inputSearch" id="inputSearch">
          </form>
        </div>
      </Section>
    </header>

    <main>
      <div class="container">
        <h3><i>Clothes</i></h3>

        <section class="clothes">
          <article class="clothe">
            <img src="img/foto1.jpg" alt="Foto 1" height="300px">
            <h4>Bolsa</h4>
            <h4>R$ 100,00</h4>
            <p>Bolsa semi-nova, tricô, rosa, alça fina.
            </p>
              <button type ="button">Buy it</button>
          </article>
          <article class="clothe">
            <img src="img/foto2.jpg" alt="Foto 2">
            <h4>Cardigan Tricô</h4>
            <h4>R$ 85,00</h4>
            <p>Cardigan de tricô semi-novo, azul marinho, Tam: M
            </p>
              <button type ="button">Buy it</button>
          </article>
          <article class="clothe">
            <img src="img/foto3.jpg" alt="Foto 3"height="300px">
            <h4>Sapato Social</h4>
            <h4>R$ 60,00</h4>
            <p>Sapato social semi-novo, couro, preto, Tam: 42
            </p>
              <button type ="button">Buy it</button>
          </article>
          <article class="clothe">
            <img src="img/foto4.jpg" alt="Foto 4"height="300px">
            <h4>Calça Jeans</h4>
            <h4>70,00</h4>
            <p>Calça Jeans semi-nova, lavagem clara, Tam: 40
            </p>
              <button type ="button">Buy it</button>
          </article>
        </section>
      </div>
    </main>
    <footer>
      <div class ="container">
        <p>Criado por Nicole Gaia</p>
      </div>
    </footer>
  </body>
</html>