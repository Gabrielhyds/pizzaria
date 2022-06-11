<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Cadastro</title>

  <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../assets/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="../assets/css/demo.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              Grant Food
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Cadastrar usuário</h4></div>

              <div class="card-body">
              <div class="form-divider">
                    Dados pessoais
                  </div>
                <form method="POST">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nome">Nome</label>
                      <input id="nome" type="text" class="form-control" name="nome" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="usuario">Usuário</label>
                      <input id="usuario" type="text" class="form-control" name="usuario">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="cpf">CPF</label>
                      <input id="number" type="text" class="form-control" name="cpf" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label>Genêro</label>
                      <select class="form-control" name="genero">
                        <option value="0" disabled selected>Selecione</option>
                        <option value="1">Masculino</option>
                        <option value="2">Feminino</option>
                        <option value="3">Outro</option>
                      </select>
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-6">
                      <label for="senh" class="d-block">Senha</label>
                      <input id="senha" type="password" class="form-control" name="senha">
                      <span class="lnr lnr-eye"></span>
                    </div>
                    <div class="form-group col-6">
                      <label for="confirmasenha" class="d-block">Confirme a senha</label>
                      <input id="confirmasenha" type="password" class="form-control" name="confirmasenha">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-2">
                      <label>ddd</label>
                      <input type="number" name="ddd" class="form-control">
                    </div>
                    <div class="form-group col-4">
                      <label>telefone</label>
                      <input type="number" name="telefone" class="form-control">
                    </div>
                    <div class="form-group col-6">
                      <label>Tipo</label>
                      <select class="form-control" name="tipo">
                        <option value="0" disabled selected>Selecione</option>
                        <option value="1">Comercial</option>
                        <option value="2">Residêncial</option>
                        <option value="3">Outro</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="salario" class="d-block">Salário</label>
                      <input id="salario" type="number" class="form-control" name="salario">
                      <span class="lnr lnr-eye"></span>
                    </div>
                    <div class="form-group col-6">
                      <label for="foto" class="d-block">Foto</label>
                      <input type="file" class="form-control" name="foto">
                    </div>
                  </div>

                  <div class="form-divider">
                    Endereço
                  </div>
                  <div class="row">
                  <div class="col-3 mb-3">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP" required>
                  </div>
                  <div class="col-7 mb-3">
                    <label for="logradouro" class="form-label">Logradouro</label>
                    <input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Rua" required>
                  </div>
                  <div class="col-2 mb-3">
                    <label for="numero" class="form-label">Número</label>
                    <input type="text" class="form-control" name="numero" id="numero" placeholder="número" required>
                  </div>
                  <div class="col-6 mb-3">
                    <label for="complemento" class="form-label">Complemento</label>
                    <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Andar,bloco,nº">
                  </div>
                  <div class="col-6 mb-3">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="ex. jardim das pedras" required>
                  </div>
                  <div class="col-8 mb-3">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="ex. sumaré" required>
                  </div>
                  <div class="col-4 mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-control" name="estado" id="estado" required>
                      <option value="">Selecione</option>
                      <option value="AC">Acre</option>
                      <option value="AL">Alagoas</option>
                      <option value="AP">Amapá</option>
                      <option value="AM">Amazonas</option>
                      <option value="BA">Bahia</option>
                      <option value="CE">Ceará</option>
                      <option value="DF">Distrito Federal</option>
                      <option value="ES">Espirito Santo</option>
                      <option value="GO">Goiás</option>
                      <option value="MA">Maranhão</option>
                      <option value="MS">Mato Grosso do Sul</option>
                      <option value="MT">Mato Grosso</option>
                      <option value="MG">Minas Gerais</option>
                      <option value="PA">Pará</option>
                      <option value="PB">Paraíba</option>
                      <option value="PR">Paraná</option>
                      <option value="PE">Pernambuco</option>
                      <option value="PI">Piauí</option>
                      <option value="RJ">Rio de Janeiro</option>
                      <option value="RN">Rio Grande do Norte</option>
                      <option value="RS">Rio Grande do Sul</option>
                      <option value="RO">Rondônia</option>
                      <option value="RR">Roraima</option>
                      <option value="SC">Santa Catarina</option>
                      <option value="SP">São Paulo</option>
                      <option value="SE">Sergipe</option>
                      <option value="TO">Tocantins</option>
                    </select>                  
                  </div>
                  </div>

                  <div class="form-divider">
                    Dados da empresa
                  </div>
                  <div class="row">
                  <div class="form-group col-12">
                      <label>Tipo</label>
                      <select class="form-control" name="tipo">
                        <option value="0" disabled selected>Selecione</option>
                        <option value="1">Administrador</option>
                        <option value="2">Usuário Comum</option>
                      </select>
                    </div>
                  </div>      

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="../assets/modules/jquery.min.js"></script>
  <script src="../assets/modules/popper.js"></script>
  <script src="../assets/modules/tooltip.js"></script>
  <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../assets/modules/moment.min.js"></script>
  <script src="../assets/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="../assets/js/sa-functions.js"></script>
  
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>
  <script src="../assets/js/demo.js"></script>
</body>
</html>