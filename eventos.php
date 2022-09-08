<?php

$ingressos = 100;
$eventos = 200;
$clientes = 20;
$vendas = 150;

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
          <div class="col-12 text-right">
            <div class="adicionar">
              <a href="#" class="link">+ Novo Evento</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-12 col-md-12">
                    <div class="imagem">
                      <img src="assets/img/evento.png" />
                    </div>
                  </div>
                  <div class="col-12 col-md-12">
                    <div class="textos">
                      <p class="card-category">Evento 1</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="#">Editar</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-12 col-md-12">
                    <div class="imagem">
                      <img src="assets/img/evento.png" />
                    </div>
                  </div>
                  <div class="col-12 col-md-12">
                    <div class="textos">
                      <p class="card-category">Evento 1</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="#">Editar</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-12 col-md-12">
                    <div class="imagem">
                      <img src="assets/img/evento.png" />
                    </div>
                  </div>
                  <div class="col-12 col-md-12">
                    <div class="textos">
                      <p class="card-category">Evento 1</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="#">Editar</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-12 col-md-12">
                    <div class="imagem">
                      <img src="assets/img/evento.png" />
                    </div>
                  </div>
                  <div class="col-12 col-md-12">
                    <div class="textos">
                      <p class="card-category">Evento 1</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="#">Editar</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-12 col-md-12">
                    <div class="imagem">
                      <img src="assets/img/evento.png" />
                    </div>
                  </div>
                  <div class="col-12 col-md-12">
                    <div class="textos">
                      <p class="card-category">Evento 1</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="#">Editar</a>
                </div>
              </div>
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

</body>

</html>