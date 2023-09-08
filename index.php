<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrapmin.css">
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/cores.css">
    <script src="https://kit.fontawesome.com/1f9989efe1.js" crossorigin="anonymous"></script>
    <title>Estoque-Livraria</title>
</head>

<body>
    <header class="bg-cinza">
        <P class="elemento-header ms-3 mt-3">
            <img src="images/ll.png" alt="" style="width: 30px; height:30px;">
            Livraria - CRUD
        </p>
        <div>
            <button type="button" class="btn btn-success me-3 elemento-header" onclick="acaoModalLivros(1)"><i
                    class="fa-solid fa-circle-plus" style="color: #ffffff;"></i> Add Novo Livro</button>
        </div>
    </header>

    <div class=" m-auto" id="recebe_tabela"></div>

    <div style="display: none" id="Div_oca"></div>
    <div id="resultado"></div>
    <!--Modal Para Carregar Formulário de Cadastro e Atualização do cadastro do Livro-->
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div id="carrega_id" style="display: none;"></div>
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        onclick="acaoModalLivros(2)"></button>
                </div>
                <div class="modal-body d-flex flex-column justify-content-center align-items-center" id="carrega_form">
                </div>
                <div class="alert alert-success text-center w-75 m-auto mb-2 d-none" role="alert" id="alerta">
                    A simple success alert—check it out! <i class="fa-regular fa-circle-check"></i>
                </div>
            </div>
        </div>
    </div>
    <script src="jquery/jquery-3.6.4.js"></script>
    <script src="bootstrap/bootstrapJs.js"></script>
    <script src="js/action.js"></script>
    <script>
    $(document).ready(function() {
        $("#recebe_tabela").load("encheTabela.php", {});
    });
    </script>
</body>

</html>