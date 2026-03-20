
# EletroEstudos — Site em PHP

Estrutura:
- `index.php` — página inicial com apresentação e panorama histórico.
- `capitulos.php` — explicação do livro, imagem de capa e link para download.
- `videos.php` — galeria com **mais de 20** iframes do YouTube (substitua os IDs).
- `inc/header.php` e `inc/footer.php` — partes comuns (cabeçalho/rodapé).
- `assets/css/style.css` — estilos.
- `assets/js/main.js` — script simples (menu responsivo).
- `assets/img/` — imagens SVG (logo e capa).
- `assets/sample/livro.pdf` — PDF de exemplo para download.

## Como usar no WAMP/XAMPP
1. Extraia a pasta `site-eletricidade` para o diretório do servidor (ex.: `C:/wamp64/www/`).
2. Acesse `http://localhost/site-eletricidade/index.php` no navegador.
3. Edite os arquivos conforme necessário (títulos, textos e IDs de vídeo).
4. Substitua `assets/sample/livro.pdf` pelo arquivo real do livro.

## Personalização rápida
- Menu: ajuste em `inc/header.php`.
- Paleta e espaçamentos: `assets/css/style.css`.
- Vídeos: edite o array de IDs no `videos.php` ou troque diretamente nos iframes.
