<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8" dir="ltr">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Novo Formulário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <!-- <link rel="stylesheet" src="{{asset('css/reset.css')}}"> -->
  <!-- <link rel="stylesheet" type="text/css" src="{{asset('css/style.css')}}"> -->
  <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/reset.css') }}" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
</head>

<body>
  <main>
    <div class="container col-12">
      <div class="form-container">
        <form class="form-product row g-1 my-0">
          <h1>Remetente</h1>
          <div class="col-6">
            <div class="row g-2 my-0">
              <div class="col-6">
                <label for="inputNome" class="form-label">Nome:</label>
                <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                <div class="valid-feedback">
                  O Campo está Correto!
                </div>
                <div class="invalid-feedback">
                  O campo precisa ser preenchido!
                </div>
              </div>
              <div class="col-6">
                <label for="inputCpfCnpj" class="form-label">CPF/CNPJ:</label>
                <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                <div class="valid-feedback">
                  O Campo está Correto!
                </div>
                <div class="invalid-feedback">
                  O campo precisa ser preenchido!
                </div>
              </div>
            </div>

            <div class="row g-2 my-0">
              <div class="col-12">
                <label for="inputCEP" class="form-label">CEP:</label>
                <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                <div class="valid-feedback">
                  O Campo está Correto!
                </div>
                <div class="invalid-feedback">
                  O campo precisa ser preenchido!
                </div>
              </div>

              <div class="row g-2 my-0">
                <div class="col-4">
                  <label for="inputEndereço" class="form-label">Endereço:</label>
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                  <div class="valid-feedback">
                    O Campo está Correto!
                  </div>
                  <div class="invalid-feedback">
                    O campo precisa ser preenchido!
                  </div>
                </div>

                <div class="col-4">
                  <label for="inpuNumero" class="form-label">Número:</label>
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                  <div class="valid-feedback">
                    O Campo está Correto!
                  </div>
                  <div class="invalid-feedback">
                    O campo precisa ser preenchido!
                  </div>
                </div>

                <div class="col-4">
                  <label for="inputComplemento" class="form-label">Complemento:</label>
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                  <div class="valid-feedback">
                    O Campo está Correto!
                  </div>
                  <div class="invalid-feedback">
                    O campo precisa ser preenchido!
                  </div>
                </div>
              </div>

              <div class="row g-2 my-0">
                <div class="col-6">
                  <label for="inputCidade" class="form-label">Cidade:</label>
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                  <div class="valid-feedback">
                    O Campo está Correto!
                  </div>
                  <div class="invalid-feedback">
                    O campo precisa ser preenchido!
                  </div>
                </div>

                <div class="col-6">
                  <label for="inputEstado" class="form-label">Estado:</label>
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                  <div class="valid-feedback">
                    O Campo está Correto!
                  </div>
                  <div class="invalid-feedback">
                    O campo precisa ser preenchido!
                  </div>
                </div>
              </div>
            </div>
            <div class="row g-2 my-0">
              <div class="col-2">
                <div class="d-grid my-3">
                  <button class="btn btn-outline-danger" type="reset" name="botaoExcluir" id="botaoExcluir">Limpar</button>
                </div>
              </div>

              <div class="col-10">
                <div class="d-grid my-3">
                  <button class="btn btn-danger" type="submit" name="botaoEnviar" id="botaoEnviar">Enviar</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 container2">
            <h1 class="destinatario">Destinatário</h1>
            <div class="col-12">
              <div class="row g-0 my-0">
                <div class="col-6">
                  <label for="inputNome" class="form-label">Nome:</label>
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                  <div class="valid-feedback">
                    O Campo está Correto!
                  </div>
                  <div class="invalid-feedback">
                    O campo precisa ser preenchido!
                  </div>
                </div>
                <div class="col-6">
                  <label for="inputCpfCnpj" class="form-label">CPF/CNPJ:</label>
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                  <div class="valid-feedback">
                    O Campo está Correto!
                  </div>
                  <div class="invalid-feedback">
                    O campo precisa ser preenchido!
                  </div>
                </div>
              </div>

              <div class="row g-2 my-0">
                <div class="col-12">
                  <label for="inputCEP" class="form-label">CEP:</label>
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                  <div class="valid-feedback">
                    O Campo está Correto!
                  </div>
                  <div class="invalid-feedback">
                    O campo precisa ser preenchido!
                  </div>
                </div>

                <div class="row g-2 my-0">
                  <div class="col-4">
                    <label for="inputEndereço" class="form-label">Endereço:</label>
                    <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                    <div class="valid-feedback">
                      O Campo está Correto!
                    </div>
                    <div class="invalid-feedback">
                      O campo precisa ser preenchido!
                    </div>
                  </div>

                  <div class="col-4">
                    <label for="inpuNumero" class="form-label">Número:</label>
                    <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                    <div class="valid-feedback">
                      O Campo está Correto!
                    </div>
                    <div class="invalid-feedback">
                      O campo precisa ser preenchido!
                    </div>
                  </div>

                  <div class="col-4">
                    <label for="inputComplemento" class="form-label">Complemento:</label>
                    <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                    <div class="valid-feedback">
                      O Campo está Correto!
                    </div>
                    <div class="invalid-feedback">
                      O campo precisa ser preenchido!
                    </div>
                  </div>
                </div>

                <div class="row g-2 my-0">
                  <div class="col-6">
                    <label for="inputCidade" class="form-label">Cidade:</label>
                    <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                    <div class="valid-feedback">
                      O Campo está Correto!
                    </div>
                    <div class="invalid-feedback">
                      O campo precisa ser preenchido!
                    </div>
                  </div>

                  <div class="col-6">
                    <label for="inputEstado" class="form-label">Estado:</label>
                    <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome" onfocusout="verificarCampo('inputNome')" required>
                    <div class="valid-feedback">
                      O Campo está Correto!
                    </div>
                    <div class="invalid-feedback">
                      O campo precisa ser preenchido!
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      </form>
    </div>
  </main>

  <script src="js/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>