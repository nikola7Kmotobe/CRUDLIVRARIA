<?php 
include("conexao.php");
$nomeLivro = mysqli_real_escape_string($mysqli, $_POST['nomeLivro']);
$nomeAutor = mysqli_real_escape_string($mysqli, $_POST['nomeAutor']);
$genero = mysqli_real_escape_string($mysqli, $_POST['genero']);
$data = mysqli_real_escape_string($mysqli, $_POST['data']);

$sql_code = "INSERT INTO livraria.livros
(nome_autor, data_publi, data_inclusao, genero, nome_livro)
VALUES('$nomeAutor', '$data', NOW(), '$genero', '$nomeLivro');";

$deu_certo = $mysqli->query($sql_code) or die ($mysqli->error);
if($deu_certo){?>
    <script>
        $("#alerta").html('O Livro Foi Cadastrado com Sucesso! <i class="fa-regular fa-circle-check"></i>');
        $("#recebe_tabela").load("encheTabela.php", {});
    </script>
<?php 
}else{
?>
    <script>
        $("#alerta").html("Houve um erro no cadastro do livro!");
        $(".alert").addClass("alert-warning");
        $(".alert").removeClass("alert-success");
    </script>
<?php } ?> 
