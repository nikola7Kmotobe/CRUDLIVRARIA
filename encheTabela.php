<?php
include("conexao.php");
$sql_code="SELECT id, nome_autor, data_publi, data_inclusao, genero, nome_livro
FROM livraria.livros;";

$deu_certo = $mysqli->query($sql_code) or die ($mysqli->error);
?>

<table class="table table-bordered m-auto" style="width: 1269px;">
    <thead>
        <tr>
            <th scope="col" style="display: none;">id</th>
            <th scope="col text-center">Nome do Livro</th>
            <th scope="col">Autor</th>
            <th scope="col">Gênero</th>
            <th scope="col">Publicação</th>
            <th scope="col">Inserção no Sitema da Livravira</th>
            <th scope="col">Atualiza/Excluir</th>

        </tr>
    </thead>
    <tbody>
        <?php 
    while($livros = $deu_certo->fetch_assoc()){?>
        <tr>
            <th scope="row" style="display: none;" id="iD"><?php echo $livros['id']?></th>
            <td><?php echo $livros['nome_livro']?></td>
            <td><?php echo $livros['nome_autor']?></td>
            <td><?php echo $livros['genero']?></td>
            <td><?php echo $livros['data_publi']?></td>
            <td><?php echo $livros['data_inclusao']?></td>
            <td><button type="button" class="btn btn-dark" onclick="acaoModalLivros(3, <?php echo $livros['id'] ?>)"><i
                        class="fa-solid fa-square-pen"></i></button>

                <button type="button" class="btn btn-danger" onclick="deleTarLivros(<?php echo $livros['id'] ?>)"><i
                        class="fa-solid fa-trash"></i></button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>