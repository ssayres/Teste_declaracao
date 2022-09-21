<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="{{ URL::asset('css/estilo.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/reset.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/bootstrap.mim.css') }}" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>


        <x-slot name="header">

        <div class="col-12">
                    <h3>Declaração de conteúdo</h3>
                    </div>


        </x-slot>
    </head>

    <body>
    <div class="container col-12">
      <div class="form-container">
            <form class="form-product row g-1 my-0" method="post" action="{{route('dashboard.Conteudo')}}">
                @csrf
        <h1>Remetente</h1>
          <div class="col-6">
            <div class="row g-2 my-0">
              <div class="col-6">
                <label for="inputNome" class="form-label">Nome:</label>
                <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="nome" id="nome"  required>
                <div class="valid-feedback">
                  O Campo está Correto!
                </div>
                <div class="invalid-feedback">
                  O campo precisa ser preenchido!
                </div>
              </div>
              <div class="col-6">
                <label for="inputCpfCnpj" class="form-label">CPF/CNPJ:</label>
                <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="cnpj" id="cnpj" onfocusout="verificarCampo('inputNome')" required>
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
                <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="cep" id="cep" onfocusout="verificarCampo('inputNome')" required>
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
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="endereco" id="endereco" onfocusout="verificarCampo('inputNome')" required>
                  <div class="valid-feedback">
                    O Campo está Correto!
                  </div>
                  <div class="invalid-feedback">
                    O campo precisa ser preenchido!
                  </div>
                </div>

                <div class="col-4">
                  <label for="inpuNumero" class="form-label">Número:</label>
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="numero" id="numero" onfocusout="verificarCampo('inputNome')" required>
                  <div class="valid-feedback">
                    O Campo está Correto!
                  </div>
                  <div class="invalid-feedback">
                    O campo precisa ser preenchido!
                  </div>
                </div>

                <div class="col-4">
                  <label for="inputComplemento" class="form-label">Complemento:</label>
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="complemento" id="complemento" onfocusout="verificarCampo('inputNome')" required>
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
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="cidade" id="cidade" onfocusout="verificarCampo('inputNome')" required>
                  <div class="valid-feedback">
                    O Campo está Correto!
                  </div>
                  <div class="invalid-feedback">
                    O campo precisa ser preenchido!
                  </div>
                </div>

                <div class="col-6">
                  <label for="inputEstado" class="form-label">Estado:</label>
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="uf" id="uf" onfocusout="verificarCampo('inputNome')" required>
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
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="cnpj2" id="cnpj2" onfocusout="verificarCampo('inputNome')" required>
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
                  <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="cep2" id="cep2" onfocusout="verificarCampo('inputNome')" required>
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
                    <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="endereco2" id="endereco2" onfocusout="verificarCampo('inputNome')" required>
                    <div class="valid-feedback">
                      O Campo está Correto!
                    </div>
                    <div class="invalid-feedback">
                      O campo precisa ser preenchido!
                    </div>
                  </div>

                  <div class="col-4">
                    <label for="inputNumero" class="form-label">Número:</label>
                    <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="numero2" id="numero2" onfocusout="verificarCampo('inputNome')" required>
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
                    <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="cidade2" id="cidade2" onfocusout="verificarCampo('inputNome')" required>
                    <div class="valid-feedback">
                      O Campo está Correto!
                    </div>
                    <div class="invalid-feedback">
                      O campo precisa ser preenchido!
                    </div>
                  </div>

                  <div class="col-6">
                    <label for="inputEstado" class="form-label">Estado:</label>
                    <input list="nomes" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="uf2" id="uf2" onfocusout="verificarCampo('inputNome')" required>
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
        @if(session()->has('eae'))
        <div class="container">
            <form name="formulario" class="row" method="post" id="form" action="{{route('dashboard.Conteudo')}}">
                @csrf
                
                <div class="row col-12 campos"  >
                    <div class="col-6 " style="border-right: none">
                        <p>ID do produto:</p>
                        <x-input id="idProduto" class="block mt-1 w-full" type="text" name="idProduto" />
                        <p>Centro de Custo:</p>
                        <select id="cCusto" class="block mt-1 w-full" type="text" name="cCusto">
                            <option value="" selected>Escolha um item</option>
                            <option value="Suzano">Suzano</option>
                            <option value="Guarulhos">Guarulhos</option>
                            <option value="Fontalis">Fontalis</option>
                        </select>
                        <p>Conteúdo:</p>
                        <x-input id="conteudo" class="block mt-1 w-full" type="text" name="conteudo" />
                        <p>Quantidade:</p>
                        <x-input id="quantidade" class="block mt-1 w-full" type="number" name="quantidade" />
                        <p>Valor:</p>
                        <x-input id="valor" class="block mt-1 w-full" type="text" name="valor" />
        
                        <input type="submit" class="butao2" id="butao2"> 
                        </div>

                    <form name="formulario2" method="get" action="{{route('dashboard.Conteudo')}}" id="form2">    
                    <div class="col-6 " >
                        <p>Resumo:</p> 
                        <table class="table table-hover table-bordered table-striped table-borderless">
                            <thead>
                                <th scope="col">IdProduto</th>
                                <th scope="col">CentroCusto</th>
                                <th scope="col">Qtd</th>
                                <th scope="col">Conteúdo</th>
                                <th scope="col">Valor</th>
                                <th scope="col">#</th>
                            </thead>
                            <tbody id="show">

                            </tbody>
                            </div> 
                    </form>   
                    </div>
            </form>
        </div>
        
        @endif

        <script>
            new FormMask(document.querySelector("#cnpj"), "__.___.___/____-__", "_", [".", "-", "/"])
            new FormMask(document.querySelector("#cnpj2"), "__.___.___/____-__", "_", [".", "-", "/"])
            new FormMask(document.querySelector("#cep"), "_____-___", "_", ["-"])
            new FormMask(document.querySelector("#cep2"), "_____-___", "_", ["-"])
            new FormMask(document.querySelector("#valor"), "00.000,00", "0", ["." , ","])
        </script>
        <script>
            $("#cep").blur(function() {
                // Remove tudo o que não é número para fazer a pesquisa
                var cep = this.value.replace(/[^0-9]/, "");

                // Validação do CEP; caso o CEP não possua 8 números, então cancela
                // a consulta
                if (cep.length != 8) {
                    return false;
                }

                // A url de pesquisa consiste no endereço do webservice + o cep que
                // o usuário informou + o tipo de retorno desejado (entre "json",
                // "jsonp", "xml", "piped" ou "querty")
                var url = "https://viacep.com.br/ws/" + cep + "/json/";

                // Faz a pesquisa do CEP, tratando o retorno com try/catch para que
                // caso ocorra algum erro (o cep pode não existir, por exemplo) a
                // usabilidade não seja afetada, assim o usuário pode continuar//
                // preenchendo os campos normalmente
                $.getJSON(url, function(dadosRetorno) {
                    try {
                        // Preenche os campos de acordo com o retorno da pesquisa
                        $("#endereco").val(dadosRetorno.logradouro);
                        $("#cidade").val(dadosRetorno.localidade);
                        $("#uf").val(dadosRetorno.uf);
                    } catch (ex) {}
                });
            });

            $("#cep2").blur(function() {
                // Remove tudo o que não é número para fazer a pesquisa
                var cep2 = this.value.replace(/[^0-9]/, "");

                // Validação do CEP; caso o CEP não possua 8 números, então cancela
                // a consulta
                if (cep2.length != 8) {
                    return false;
                }

                // A url de pesquisa consiste no endereço do webservice + o cep que
                // o usuário informou + o tipo de retorno desejado (entre "json",
                // "jsonp", "xml", "piped" ou "querty")
                var url = "https://viacep.com.br/ws/" + cep2 + "/json/";

                // Faz a pesquisa do CEP, tratando o retorno com try/catch para que
                // caso ocorra algum erro (o cep pode não existir, por exemplo) a
                // usabilidade não seja afetada, assim o usuário pode continuar//
                // preenchendo os campos normalmente
                $.getJSON(url, function(dadosRetorno) {
                    try {
                        // Preenche os campos de acordo com o retorno da pesquisa
                        $("#endereco2").val(dadosRetorno.logradouro);
                        $("#cidade2").val(dadosRetorno.localidade);
                        $("#uf2").val(dadosRetorno.uf);
                    } catch (ex) {}
                });
            });

            $('#idProduto').blur(function(){

                var idProduto = document.getElementById("conteudo").value;
                

            });
        </script>
        <script>
        
        var teste = []

        $('#form').submit(function(e){
            e.preventDefault()
            var input_todos = [$('#idProduto').val(),$('#cCusto').val(), $('#conteudo').val(),$('#quantidade').val(), $('#valor').val()]
            teste.push(input_todos)
            //var produtos = [$('#idProduto').val()]
            //var cCusto = [$('#cCusto').val()]
            //var conteudo = [$('#idProduto').val()]
            //var quantidade = [$('#quantidade').val()]
            //var valor = [$('#valor').val()]

            //teste.push(produtos, cCusto, conteudo, quantidade, valor)


            var show2 = ""; 
            teste.forEach(function(e){
              show2 += `
                <tr>
                    <td>${e[0]}</td>
                    <td>${e[1]}</td>
                    <td>${e[2]}</td>
                    <td>${e[3]}</td>
                    <td>${e[4]}</td>
                </tr>
              `  
            })

            $('#show').html(show2);
            
        });


        





          </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</x-app-layout>
</body>

</html>