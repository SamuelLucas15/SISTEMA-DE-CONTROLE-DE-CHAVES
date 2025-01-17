<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keybox - Adicionar Nova Chave</title>
    <link rel="stylesheet" href="../css/estilo_addchave.css"> <!-- Referência ao arquivo CSS externo -->
</head>
<body>
    <div class="retangulo-superior">
        <div class="keybox">
         <img src="../imagem/logo.png" alt="keybox">
        </div>
        <div class="imglogosenac">
         <img src="../imagem/logosenac.png" alt="logosenac" class="img_senac_logo">
     </div>
     </div>
 
    <nav class="breadcrumb">
        <a href="index_menu.php">Início</a> &gt;
        <a href="chaveamento.php">Voltar</a>
    </nav>


    <div class="container">
        <!-- Breadcrumb de navegação -->
        <!-- Formulário de adição de nova chave -->
        <div class="form-container">
            <h2>Adicionar Nova Chave</h2>
            <form action="../src/controller/add_adicionar_chaves.php" method="POST">
                <label for="sala" class="custom-label">Sala:</label>
                <input type="text" id="sala" name="sala" placeholder="Nome da sala">
                <label for="localizacao" class="custom-label">Localização(Número da sala):</label>
                <input type="text" id="localizacao" name="localizacao" placeholder="Localização">
                <button type="submit" class="butao">Adicionar Chave</button>
            </form>
        </div>
    </div>
</body>
</html>

