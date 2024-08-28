<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="cadastrar_barbeiro.php" method="post">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Digite o seu email:" name="email">
    </div>

    <div class="mb-3 mt-3">
      <label for="nome_usuario">Nome de usuario:</label>
      <input type="text" class="form-control" id="nome_usuario" placeholder="Digite aqui o seu nome:" name="nome_usuario">
    </div>

    <div class="mb-3 mt-3">
      <label for="data_de_nascimento">Data de Nascimento:</label>
      <input type="date" class="form-control" id="data_de_nascimento" placeholder="Data de Nascimento:" name="data_de_nascimento">
    </div>
    <div class="mb-3 mt-3">
      <label for="nome_banco">Nome do Banco:</label>
      <input type="text" class="form-control" id="nome_banco" placeholder="Digite o nome do Banco:" name="nome_banco">
    </div>
    <div class="mb-3 mt-3">
      <label for="`numero_agencia">Número da agencia:</label>
      <input type="`number" class="form-control" id="`numero_agencia" placeholder="Digite o número da agencia:" name="`numero_agencia">
    </div>

    <div class="mb-3 mt-3">
      <label for="numero_conta">Número da conta</label>
      <input type="number" class="form-control" id="numero_conta" placeholder="Digite o número da conta:" name="numero_conta">
    </div>
    <div class="mb-3 mt-3">
      <label for="chave_pix">Chave pix:</label>
      <input type="text" class="form-control" id="chave_pix" placeholder="Digite sua chave pix:" name="chave_pix">
    </div>
    <div class="mb-3 mt-3">
      <label for="data_criacao">Data de criação:</label>
      <input type="datable" class="form-control" id="data_criacao" placeholder="Data de criação:" name="data_criacao">
    </div>
    

    <button type="submit" class="btn btn-success">Salvar</button>
  </form>
</div>

</body>
</html>
