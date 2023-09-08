<!--Página Para Cadastro Dos Livros-->
<div class="col-md-4 w-75">
    <label for="nome_txt" class="form-label mt-1">Nome do Livro</label>
    <input type="text" class="form-control" id="nome_txt" placeholder="Ex: Harry Potter" required>
    <div class="valid-feedback">
        <i class="fa-solid fa-thumbs-up" style="color: #13c610;"></i>
    </div>
    <div class="invalid-feedback">
        Escreva o nome do Livro!
    </div>
</div>
<div class="col-md-4 w-75">
    <label for="nomeAutor_txt" class="form-label mt-1">Nome do Autor</label>
        <input type="text" class="form-control" id="nomeAutor_txt" placeholder="Ex: Fiódor Dostoiévski" required>
    <div class="valid-feedback">
         <i class="fa-solid fa-thumbs-up" style="color: #13c610;"></i>
    </div>
    <div class="invalid-feedback">
         Escreva o nome do autor do Livro!
    </div>
</div>
<div class="col-md-4 w-75" id="select">

</div>
<div class="col-md-4 w-75">
    <label for="date_txt" class="form-label mt-1">Data da Publicação</label>
         <input type="date" class="form-control" id="date_txt" required>
    <div class="valid-feedback">
         <i class="fa-solid fa-thumbs-up" style="color: #13c610;"></i>
    </div>
    <div class="invalid-feedback">
    Please choose a username.
    </div>
</div>
                 
<button class="btn btn-primary w-75 mt-3" type="submit" onclick="cadastrarLivros(1)">Cadastrar</button>

<script>
$(document).ready(function(){
    $("#select").load('encheSelect.php',{});
 
});
</script>