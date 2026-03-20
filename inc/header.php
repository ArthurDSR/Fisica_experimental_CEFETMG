
<?php
  $title = $title ?? "EletroEstudos";
  $active = $active ?? "";
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php echo htmlspecialchars($title); ?></title>
  <meta name="description" content="Site de estudos sobre História da Eletricidade, capítulos do livro e vídeos educativos."/>
  <link rel="preconnect" href="https://www.youtube.com">
  <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
  <header>
    <div class="container nav">
      <div class="brand">
        <h2 class="titulo">Eletricidade</h2>
      </div>
      <nav>
        <button id="menu-toggle" class="btn" style="display:none">Menu</button>
        <div id="menu" class="menu">
          <a href="index.php" class="<?php echo $active==='inicio'?'active':''; ?>">Início</a>
          <a href="capitulos.php" class="<?php echo $active==='capitulos'?'active':''; ?>">Capítulos</a>
          <a href="videos.php" class="<?php echo $active==='videos'?'active':''; ?>">Vídeos</a>
        </div>
      </nav>
    </div>
  </header>
  <script>
    // show toggle on small screens
    const mq = window.matchMedia('(max-width: 640px)');
    function updateMenuToggle(){ 
      const btn = document.getElementById('menu-toggle'); 
      if(!btn) return;
      btn.style.display = mq.matches ? 'inline-block' : 'none';
    }
    mq.addEventListener('change', updateMenuToggle);
    window.addEventListener('DOMContentLoaded', updateMenuToggle);
  </script>
