<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="../../../public/assets/favicon.ico" type="image/x-icon">

  <!--icons -->
  <script src="https://kit.fontawesome.com/86afc28056.js" crossorigin="anonymous"></script>

  <!-- css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="../../../public/css/global.css">
  <link rel="stylesheet" href="../../../public/css/admin-users.css">
  <link rel="stylesheet" href="../../../public/css/list-responsive.css">

  <title>Admin | Nunes' Comics</title>

  <!--javascript -->
  <script src="../../../public/js/funcoes.js" type="text/javascript">
  </script>
</head>

<body>
  <header></header>
  <main class="d-flex justify-content-center">
    <div class="container mr-5 ">
      <div class="titulo d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Usuário</h1>
        <a href="list" class="buttons">Voltar</a>
      </div>
      <table class="table justify-content-center table-borderless mb-0 table-changes">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
          </tr>
        </thead>
        <tbody>
          <tr >
            <th scope="row"><?= $user->id ?></th>
            <td><?= $user->name ?></td>
            <td class="d-flex justify-content-start flex-wrap "><?= $user->email ?></td>
            <img class="avatar" src="<?= $user->pic ?>" />
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <div class="halftone bottom">
    <img src="../../../public/assets/halftone-effect.svg" alt="">
  </div>
  <div class="halftone top">
    <img src="../../../public/assets/halftone-effect.svg" alt="">
  </div>

  <!--javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>

</body>

</html>