<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-produto.php");




$nome = $_POST["nome"];
$preco = $_POST["preco"];
$conexao = mysqli_connect('localhost', 'root', 'Mv@19960709', 'loja'); //Abriu uma conexao com banco
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

if (insereProduto($conexao, $nome, $preco,$descricao , $categoria_id)) { ?>

    <p class="text-success"> Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso !</p>

<?php } else {

$msg = mysqli_error($conexao);
?>

<p class="text-danger"> O Produto <?= $nome?> não foi adicionado:<?= $msg?></p>

<?php

}
?>


    <?php include("rodape.php"); ?>
