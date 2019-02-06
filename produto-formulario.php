<?php
include("cabecalho.php");
include ("conecta.php");
include ("banco-categoria.php");

$categorias = listaCategorias($conexao);
?>

<div class="container">
    <div class="principal">

        <h1>Formulario de Produto</h1>
        <form action="adiciona-produto.php" method="post">
            <table class="table">
                <tr>
                    <td> nome:</td>
                   <td><input class="form-control" type="text" name="nome"></td>
                </tr>
                <tr>
                    <td>Preço:</td>
                    <td><input class="form-control" type="text" name="preco"></td>
                </tr>
                <tr>
                    <td>Descrição</td>
                    <td><textarea class="form-control" name="descriao"></textarea></td>
                </tr>

                <tr>
                    <td>categorias</td>
                    <td>

                        <select name="categoria_id" class="form-control">
                        <?php foreach($categorias as $categoria):?>
                            <option value="<?=$categoria['id']?>">
                                <?=$categoria['nome']?><br/>
                            </option>

                        <?php endforeach ?>
                        </select>

                    </td>

                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary"   type="submit">Cadastrar</button>
                    </td>
                </tr>

            </table>
        </form>

        <? include("rodape.php");
        ?>

