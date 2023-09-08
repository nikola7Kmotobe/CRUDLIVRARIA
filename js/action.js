//Deletar Livros
function deleTarLivros(id_cliente){
  id = id_cliente;
  console.log(id);
  $("#Div_oca").load("deletarLivro.php",{id: id});
  location.reload();
 }
 
//Cadastrar Livros e Atualizar
function cadastrarLivros(idx) {
  const invalidFeedback = document.querySelectorAll(".invalid-feedback");
  const validFeedback = document.querySelectorAll(".valid-feedback");
  console.log(invalidFeedback);
  if (idx === 1) {
    nomeLivro = $("#nome_txt").val();
    if (nomeLivro === "") {
      $("#nome_txt").addClass("is-invalid");
      invalidFeedback[0].style.display = "block";
      return false;
    } else {
      $("#nome_txt").removeClass("is-invalid");
      $("#nome_txt").addClass("is-valid");
      console.log("Nome do Livro: " + nomeLivro);
      invalidFeedback[0].style.display = "none";
      validFeedback[0].style.display = "block";
    }

    nomeAutor = $("#nomeAutor_txt").val();
    if (nomeAutor === "") {
      $("#nomeAutor_txt").addClass("is-invalid");
      invalidFeedback[1].style.display = "block";
      return false;
    } else {
      $("#nomeAutor_txt").removeClass("is-invalid");
      $("#nomeAutor_txt").addClass("is-valid");
      invalidFeedback[1].style.display = "none";
      validFeedback[1].style.display = "block";
      console.log("Nome do Autor: " + nomeAutor);
    }

    genero = $("#genero_sel").val();
    if (genero === "") {
      $("#genero_sel").addClass("is-invalid");
      invalidFeedback[2].style.display = "block";
      return false;
    } else {
      $("#genero_sel").removeClass("is-invalid");
      $("#genero_sel").addClass("is-valid");
      invalidFeedback[2].style.display = "none";
      validFeedback[2].style.display = "block";
      console.log("Nome do Gênero: " + genero);
    }

    data = $("#date_txt").val();
    if (data === "") {
      $("#date_txt").addClass("is-invalid");
      invalidFeedback[3].style.display = "block";
      return false;
    } else {
      $("#date_txt").removeClass("is-invalid");
      $("#date_txt").addClass("is-valid");
      invalidFeedback[3].style.display = "none";
      validFeedback[3].style.display = "block";
      console.log("Data: " + data);
    }

    $("#Div_oca").load("cadastrarLivro.php", {
      nomeLivro: nomeLivro,
      nomeAutor: nomeAutor,
      genero: genero,
      data: data
    });
    $(".alert").addClass("d-block");
    $(".alert").removeClass("d-none");
    setTimeout(alerta, 3000);
  }
  if (idx === 2) {
    id = $("#carrega_id").html();
    if(id){
    console.log(id);
    }
    nomeLivro = $("#nome_txt").val();
    if (nomeLivro === "") {
      $("#nome_txt").addClass("is-invalid");
      invalidFeedback[0].style.display = "block";
      return false;
    } else {
      $("#nome_txt").removeClass("is-invalid");
      $("#nome_txt").addClass("is-valid");
      console.log("Nome do Livro: " + nomeLivro);
      invalidFeedback[0].style.display = "none";
      validFeedback[0].style.display = "block";
    }

    nomeAutor = $("#nomeAutor_txt").val();
    if (nomeAutor === "") {
      $("#nomeAutor_txt").addClass("is-invalid");
      invalidFeedback[1].style.display = "block";
      return false;
    } else {
      $("#nomeAutor_txt").removeClass("is-invalid");
      $("#nomeAutor_txt").addClass("is-valid");
      invalidFeedback[1].style.display = "none";
      validFeedback[1].style.display = "block";
      console.log("Nome do Autor: " + nomeAutor);
    }

    genero = $("#genero_sel").val();
    if (genero === "") {
      $("#genero_sel").addClass("is-invalid");
      invalidFeedback[2].style.display = "block";
      return false;
    } else {
      $("#genero_sel").removeClass("is-invalid");
      $("#genero_sel").addClass("is-valid");
      invalidFeedback[2].style.display = "none";
      validFeedback[2].style.display = "block";
      console.log("Nome do Gênero: " + genero);
    }

    data = $("#date_txt").val();
    if (data === "") {
      $("#date_txt").addClass("is-invalid");
      invalidFeedback[3].style.display = "block";
      return false;
    } else {
      $("#date_txt").removeClass("is-invalid");
      $("#date_txt").addClass("is-valid");
      invalidFeedback[3].style.display = "none";
      validFeedback[3].style.display = "block";
      console.log("Data: " + data);
    }

    $("#Div_oca").load("atualizacaoLivro.php", {
      id: id,
      nomeLivro: nomeLivro,
      nomeAutor: nomeAutor,
      genero: genero,
      data: data
    });
    $(".alert").addClass("d-block");
    $(".alert").removeClass("d-none");
    setTimeout(alerta, 3000);
  }
}
// Alert
function alerta() {
  $(".alert").removeClass("d-block");
  $(".alert").addClass("d-none");
}
//Fuções para abrir e fechar modal
function acaoModalLivros(acao, id) {
  if (acao === 1) {
    $(".modal").show();
    $(".modal-title").html("Cadastre um Novo Livro");
    $("#carrega_form").load("cadastroFormulario.php", {});
  } else if (acao === 3) {
    let id_livros = id;
    $("#carrega_id").html(id_livros);
    console.log(id_livros);
    $(".modal").show();
    $(".modal-title").html("Atualize o Livro");
    $("#carrega_form").load("atualizacaoForm.php", {});
  } else if (acao === 2) {
    $(".modal").hide();
  }
  console.log("estou entrando na função!");
}
