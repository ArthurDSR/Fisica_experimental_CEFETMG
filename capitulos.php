
<?php
  $title = "Capítulos — EletroEstudos";
  $active = "capitulos";
  include __DIR__ . "/inc/header.php";
?>
<main class="container">
  <h1>Livro estudado</h1>
  <div class="grid" style="grid-template-columns: 220px 1fr; gap:1.25rem;">
    <div class="card" style="padding:.5rem">
      <img src="assets/img/capa.jpg" alt="Capa do livro" class="media">
    </div>
    <div class="card">
      <h2>Título: Introdução à História da Eletricidade</h2><br>
      <p><strong>Sobre:</strong> Este material apresenta, de forma didática, a evolução dos conceitos elétricos, partindo dos fenômenos eletrostáticos,
      passando por correntes contínuas e alternadas, até máquinas e sistemas de potência. Cada capítulo traz exemplos práticos e ligações com aplicações reais.</p><br>
      <p><strong>Download:</strong> <a href="https://www.ifi.unicamp.br/~assis/Eletricidade.pdf" download>Baixar o PDF do livro (exemplo)</a></p>
    </div>
  </div>

  <h2>Estrutura de capítulos (exemplo)</h2>
  <div class="grid grid-3">
    <div class="card">
      <h3>Capítulo 1 — Eletrostática</h3>
      <p>Cargas, campo elétrico, potencial, condutores e dielétricos. Experimentos clássicos e aplicações em sensores.</p>
    </div>
    <div class="card">
      <h3>Capítulo 2 — Circuitos CC</h3>
      <p>Leis de Ohm e Kirchhoff, análise nodal e malhas, teoremas de Thevenin/Norton. Medições e práticas de laboratório.</p>
    </div>
    <div class="card">
      <h3>Capítulo 3 — Circuitos CA</h3>
      <p>Impedância, fasores, potência ativa/reativa, fator de potência e ressonância. Segurança e normas básicas.</p>
    </div>
    <div class="card">
      <h3>Capítulo 4 — Eletromagnetismo</h3>
      <p>Lei de Faraday, indução, transformadores, motores. Conceitos de campos e linhas de fluxo.</p>
    </div>
    <div class="card">
      <h3>Capítulo 5 — Eletrônica</h3>
      <p>Semicondutores, diodos, transistores, amplificadores operacionais e aplicações simples.</p>
    </div>
    <div class="card">
      <h3>Capítulo 6 — Energia & Redes</h3>
      <p>Geração, transmissão, distribuição, qualidade de energia e tendências (VE, solar, eólica, armazenamento).</p>
    </div>
  </div>
</main>
<?php include __DIR__ . "/inc/footer.php"; ?>
