<?php
$id = $_GET['id'];

if(!is_null($id)){
  //TODO SELECT * FROM PRODUTOS
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Bravo - Admin</title>

  <!-- Adicionando head ao documento -->
  <?php include("layout/head.php") ?>
</head>

<body>
  <div class="wrapper ">
    <!-- Adicionando menu ao documento -->
    <?php include("layout/menu.php") ?>

    <div class="main-panel">
      <!-- Adicionando menu superior ao documento -->
      <?php include("layout/menu-superior.php") ?>

      <!-- Conteudo -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h4 class="card-title">Criar Evento</h4>
              </div>
              <form method="post" action="" id="salvar" class="form-horizontal" novalidate="novalidate">
                <input type="hidden" name="acao" value="criar" />
                <input type="hidden" name="id" value="0" />
                <div class="card-body ">
                  <div class="row">
                    <label class="col-sm-2 col-form-label"> </label>
                    <div class="col-sm-10 checkbox-radios">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-sign"></span>
                          PRODUTO ATIVO
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label" for="nome">NOME :</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <input type="text" name="nome" class="form-control" required="true">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label" for="preco">PRE??O :</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <input type="number" name="preco" step="0.01" class="form-control" required="true">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label" for="quantidade">QUANTIDADE :</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <input type="number" name="quantidade" class="form-control" required="true">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label" for="desconto">DESCONTO :</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <input type="number" name="desconto" class="form-control" required="true">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label" for="categoria">CATEGORIA :</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <select name="categoria" class="form-control" required="true">
                          <option value="0" selected disabled></option>
                          <option value="1">Nome Categoria</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label" for="imagem">IMAGEM :</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <input type="file" accept="image/png, image/jpeg" name="imagem" class="form-control" required="true">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label" for="descricao">DESCRI????O :</label>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <textarea name="descricao" class="form-control" required="true"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-primary">SALVAR</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

      <!-- Adicionando rodape ao documento -->
      <?php include("layout/rodape.php") ?>
    </div>
  </div>

  <!-- Adicionando javascript ao documento -->
  <?php include("layout/javascript.php") ?>
  <script>
    $("#salvar").validate({});

    jQuery.extend(jQuery.validator.messages, {
      required: "Campo Obrigat??rio",
      email: "Escreva um email valido",
      number: "Escreva um valor v??lido"
    });
  </script>
</body>

</html>