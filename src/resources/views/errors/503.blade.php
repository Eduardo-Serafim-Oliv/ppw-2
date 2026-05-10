<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Destino Temporal Não Encontrado</title>

    <!-- Link para uma fonte retro-futurista do Google Fonts (Opcional) -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* --- ESTILOS CSS PRINCIPAIS --- */
        body {
            margin: 0;
            padding: 0;
            /* Usa a fonte do Google ou fontes do sistema se não carregar */
            font-family: 'Space Mono', 'Courier New', monospace;

            /* --- Plano de Fundo --- */
            /* Mude 'image_0.png' se o nome do seu arquivo de imagem for diferente */
            background-image: url('img/delorean.jpg');
            background-size: cover;
            /* Faz a imagem cobrir toda a tela */
            background-position: center;
            /* Centraliza a imagem */
            background-repeat: no-repeat;
            /* Não repete a imagem */
            background-attachment: fixed;
            /* Mantém o fundo fixo enquanto o conteúdo rola (melhor visual) */

            /* --- Centralização e Estilo --- */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #f1f1f1;
            /* Cor do texto claro para contraste */
            text-align: center;
        }

        /* --- Sobreposição Escura --- */
        /* Uma camada por cima da imagem para garantir que o texto seja legível */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.65);
            /* Ajuste a opacidade (0.0 a 1.0) */
            z-index: 1;
        }

        /* --- Container do Conteúdo --- */
        .container {
            position: relative;
            z-index: 2;
            /* Garante que o conteúdo fique acima da sobreposição */
            max-width: 600px;
            padding: 20px;
        }

        /* --- Estilo do "404" --- */
        h1 {
            font-size: 8rem;
            margin: 0 0 10px;
            font-weight: bold;
            color: #0099ff;
            /* Laranja vibrante para efeito neon */
            /* Efeito de brilho neon */
            text-shadow:
                0 0 10px rgba(25, 117, 255, 0.7),
                0 0 20px rgba(30, 80, 146, 0.5),
                0 0 30px rgba(25, 51, 136, 0.3);
        }

        /* --- Estilo do Subtítulo --- */
        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #ffd700;
            /* Amarelo dourado */
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* --- Estilo do Texto Explicativo --- */
        p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #cccccc;
        }

        /* --- Estilo do Botão --- */
        .button {
            display: inline-block;
            padding: 15px 30px;
            background-color: transparent;
            /* Fundo transparente */
            color: #0099ff;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: 2px solid #0099ff;
            border-radius: 5px;
            transition: all 0.3s ease;
            /* Transição suave para efeitos */
            box-shadow:
                0 0 5px rgba(25, 117, 255, 0.7),
                0 0 10px rgba(30, 80, 146, 0.5);
        }

        /* --- Efeito de Hover do Botão --- */
        .button:hover {
            background-color: #0099ff;
            /* Fundo preenche com laranja */
            color: #1a1a1a;
            /* Texto fica escuro */
            box-shadow:

                0 0 15px rgba(25, 117, 255, 0.7),
                0 0 30px rgba(30, 80, 146, 0.5);
        }

        /* --- Responsividade Básica --- */
        @media (max-width: 600px) {
            h1 {
                font-size: 6rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            p {
                font-size: 1rem;
            }

            .button {
                padding: 12px 24px;
                font-size: 1.1rem;
            }
        }
    </style>
</head>

<body>

    <!-- Camada de sobreposição para legibilidade -->
    <div class="overlay"></div>

    <!-- Conteúdo da página -->
    <div class="container">
        <h1>504 </h1>
        <h2>Gateway Time-out</h2>
        <p>Parece que o DeLorean está muito lento para chegar ao seu destino.</p>
        <p>Volte para o presente e tente abastecer um pouco mais.</p>

        <!-- Botão para voltar para a página inicial -->
        <!-- Mude o href="/" para o link que você quiser -->
        <a href="/" class="button">Voltar ao Início</a>
    </div>

</body>

</html>
