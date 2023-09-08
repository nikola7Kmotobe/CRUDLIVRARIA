<?php
include("conexao.php");
$id = intval($_POST['id']);
$nomeLivro = mysqli_real_escape_string($mysqli, $_POST['nomeLivro']);
$nomeAutor = mysqli_real_escape_string($mysqli, $_POST['nomeAutor']);
$genero = mysqli_real_escape_string($mysqli, $_POST['genero']);
$data = mysqli_real_escape_string($mysqli, $_POST['data']);

$sql_code = "UPDATE livraria.livros
             SET nome_autor='$nomeAutor', 
                 data_publi='$data', 
                 data_auteracao=NOW(), 
                 genero='$genero', 
                 nome_livro='$nomeLivro'
             WHERE id=$id";

if ($mysqli->query($sql_code)) {
    ?>
<script>
$("#alerta").html('O Livro Foi Atualizado com Sucesso! <i class="fa-regular fa-circle-check"></i>');
$("#recebe_tabela").load("encheTabela.php", {});
</script>
<?php
} else {
    ?>
<script>
$("#alerta").html("Houve um erro na atualização do livro!");
$(".alert").addClass("alert-warning");
$(".alert").removeClass("alert-success");
</script>
<?php
}
?>