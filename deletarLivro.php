<?php
include("conexao.php");
$id = intval($_POST['id']);

$sql_code = "DELETE FROM livraria.livros
             WHERE id=$id;";

if ($mysqli->query($sql_code)) {
    ?>
<script>
alert("Deletado com Sucesso!")
</script>
<?php
} else {
    ?>
<script>
alert("Algo deu errado, Tente novamente!")
</script>
<?php
}
?>