<?php
session_start();
if (isset($_POST['mensagem'])) {
    echo '<script>alert("' . $_POST['mensagem'] . '");</script>';
}

include('../../php/lista_materias_prof.php')
    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/prof.css">
    <link rel="stylesheet" href="../../css/geral.css">
    <title>
        <?php echo $_SESSION['usuario']; ?>
    </title>
</head>

<body>
    <header>
        <h1><?php echo 'Bem-vindo, ' . $_SESSION['usuario'] . '!'; ?></h1>
    </header>
    <main>
        <section class="section">
            <form action='../../php/criar_conteudo.php' method="post" enctype="multipart/form-data">
                <h2>Cadastrar um novo conteudo</h2><br>
                <select name="materia" id="materia" required>
                    <?php foreach ($materias as $materia): ?>
                        <option value="<?php echo $materia['materia']; ?>"><?php echo $materia['materia']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="titulo">Titulo</label><br>
                <input type="text" name="titulo" value=""><br>
                <label for="conteudo">Conteúdo</label><br>
                <textarea name="conteudo"></textarea><br>
                <input type="file" name="fot" ><br>
                <input type="submit" value="Cadastrar Conteúdo">
            </form>
        </section>
        <section class="section">
            <form action="../../php/criar_evento.php" method="post">
                <label for="dataDoEvento">Data:</label>
                <input type="date" id="data" name="dataDoEvento">

                <label for="tituloDoEvento">Titulo do Evento</label>
                <input type="text" name="tituloDoEvento">

                <label for="descricaoDoEvento">Descrição do Evento</label>
                <textarea name="descricaoDoEvento"></textarea>
                
                <input type="submit" value="Cadastrar Evento">
            </form>
        </section>
    </main>
</body>

</html>
