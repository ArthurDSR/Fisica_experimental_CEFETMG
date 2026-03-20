
<?php
  $title = "Início — EletroEstudos";
  $active = "inicio";
  include __DIR__ . "/inc/header.php";
?>
<main class="container">
  <section class="hero">
    <div class="card">
      <h1>História da Eletricidade — panorama rápido</h1>
      <p>Da observação de fenômenos estáticos na Grécia antiga às revoluções do século XIX, a eletricidade transformou a sociedade.
      Experimentos de <strong>William Gilbert</strong> e <strong>Benjamin Franklin</strong> abriram caminho para <strong>Luigi Galvani</strong> e <strong>Alessandro Volta</strong>, culminando na pilha voltaica (1800). No século XIX,
      <strong>Michael Faraday</strong> descreveu a indução eletromagnética e <strong>James Clerk Maxwell</strong> unificou eletricidade e magnetismo. A partir disso, surgiram geração, transmissão e aplicações que hoje estão em tudo.</p>
      <p class="muted">Este site reúne um resumo do livro estudado e uma biblioteca de vídeos com mais de 20 aulas para apoiar seu aprendizado.</p>
      <div style="margin-top:1rem">
        <a href="capitulos.php" class="btn">Ver capítulos do livro</a>
        <a href="videos.php" class="btn" style="margin-left:.5rem">Assistir vídeos</a>
      </div>
    </div>
    <div>
      <img class="media" src="assets/img/capa.svg" alt="Capa ilustrativa">
    </div>
  </section>

  <section class="grid grid-3">
    <div class="card">
      <h2>Pioneiros</h2>
      <p>Gilbert, Franklin, Galvani, Volta e Ørsted formam a base histórica da compreensão dos fenômenos elétricos e magnéticos.</p>
    </div>
    <div class="card">
      <h2>Eletromagnetismo</h2>
      <p>Faraday e Maxwell consolidaram teorias e experimentos que explicam motores, geradores, transformadores e ondas eletromagnéticas.</p>
    </div>
    <div class="card">
      <h2>Aplicações</h2>
      <p>Da iluminação pública às redes digitais, a eletricidade deu origem à vida moderna e a novas áreas como eletrônica e telecomunicações.</p>
    </div>
  </section>
</main>
<?php include __DIR__ . "/inc/footer.php"; ?>

</html>