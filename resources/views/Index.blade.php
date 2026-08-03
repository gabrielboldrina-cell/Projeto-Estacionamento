<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadrastar</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         <link rel="stylesheet" href="{{ url('index.css') }}">
         <link rel="icon" type="image/png" href="{{ url('Logo_SESI_vermelho.jpg') }}">
  </head>
  <body>

    <div class="form-wrapper">
      <form class="row g-3">
        <div class="col-12">
          <label for="inputAddress" class="form-label">Nome Completo</label>
          <input
            type="text"
            class="form-control"
            id="btn_nome" />
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email Corporativo</label>
          <input type="email" class="form-control" id="btn_email" />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Senha</label>
          <input type="password" class="form-control" id="btn_password" />
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Telefone</label>
          <input
            type="text"
            class="form-control"
            id="btn_telefone" placeholder="(15) 99999-9999."/>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Marca do Carro</label>
          <input
            type="text"
            class="form-control"
            id="btn_marca" />
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Placa do Carro</label>
          <input type="text"class="form-control"id="btn_placa" />
        </div>
        <div class="col-md-6">
          <label class="form-label">Modelo do Carro</label>
          <input type="text" class="form-control" id="btn_modelo">
        </div>
        <div class="col-md-6">
          <label class="form-label">Cor</label>
          <input type="text" class="form-control" id="btn_cor">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Departamento</label>
          <select id="Departamento" class="form-select">
            <option selected>...</option>
            <option>RH</option>
            <option>Supervisão</option>
            <option>Professor SESI</option>
            <option>Professor Senai</option>
            <option>Limpeza</option>
            <option>SU</option>
            <option>Manuteção</option>
            <option>Colaborador</option>
          </select>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" id="btn_Cadastrar" >Cadastrar Colaborador</button>
        </div>
      </form>
    </div>

  <script src="index.js"></script>
  </body>
</html>
