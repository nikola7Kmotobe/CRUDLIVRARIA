
<?php
include("conexao.php");
$sql_generos="SELECT id, nome_genero
FROM livraria.genero;";

$deu_certo = $mysqli->query($sql_generos) or die ($mysqli->error);
?>

<label for="genero_sel" class="form-label mt-1">Gênero</label>
<select class="form-select" id="genero_sel" value="" required>
<option value="">Ecolha seu Gênero...</option>
<?php while($generos = $deu_certo->fetch_assoc()){?>     
        <option value="<?php echo $generos['nome_genero']?>"><?php echo $generos['nome_genero']?></option>
<?php } ?>
      
</select>
<div class="valid-feedback">
    <i class="fa-solid fa-thumbs-up" style="color: #13c610;"></i>
</div>
<div class="invalid-feedback">
    Por favor escolha o Gênero!
</div>