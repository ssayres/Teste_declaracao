<x-app-layout>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content=" width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{csrf_token()}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="{{ URL::asset('css/estilo.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/reset.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/bootstrap.mim.css') }}" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    @stack('javascript')



    <x-slot name="header">

      <div class="col-12">
        <h3>Declaração de conteúdo</h3>
      </div>


    </x-slot>
  </head>

  <body>
    <!-- Container que é o pai de todos os elementos da página. action="{{route('dashboard.Conteudo')}}" method="post" -->
    <form class="divFormu container responsive-sm" id="formGeral" name="formGeral">
      <form class="form-estrutura">
        @csrf
        <div class="row row-cols-12 content-page">

          <!-- Formulário que é exibido a esquerda da página. -->
          <div class="form-container col-6">

            <main>

              <div class="container">
                <div class="form-container">
                  <div class="form-product row g-1 my-0">

                    <p>Formulário</p>
                    <h1>Remetente</h1>

                    <div class="row g-2 my-1">
                      <div class="col-7">
                        <label for="inputNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control is-valid text-primary" Montserrat-labelledby billing name="remetente" placeholder="Digite o nome completo" id="remetente" aria-describedby="validationTooltipUsernamePrepend">
                      </div>


                      <div class="col-5">
                        <label for="inputCpfCnpj" class="form-label">CPF/CNPJ:</label>
                        <input list="" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing placeholder="000.000.000-00" name="cnpj" id="cnpj" required>
                      </div>


                      <div class="row g-2 my-0">
                        <div class="col-4">
                          <label for="inputCEP" class="form-label">CEP:</label>
                          <input list="" type="text" placeholder="00000-000" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="cep" id="cep" required>
                        </div>

                        <div class="col-8">
                          <label for="inputEndereço" class="form-label">Endereço:</label>
                          <input list="" type="text" placeholder="Nome da rua ou avenida" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="endereco" id="endereco" required>
                        </div>
                      </div>


                      <div class="row g-2 my-0">
                        <div class="col-3">
                          <label for="inpuNumero" class="form-label">Número:</label>
                          <input list="" placeholder="n°" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="numero" id="numero" required>
                        </div>


                        <div class="col-3">
                          <label for="inputComplemento" class="form-label">Complemento:</label>
                          <input list="" type="text" placeholder="ex: AP 2" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="complemento" id="complemento" required>
                        </div>


                        <div class="col-4">
                          <label for="inputCidade" class="form-label">Cidade:</label>
                          <input list="" type="text" placeholder="ex: São Paulo" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="cidade" id="cidade" required>
                        </div>


                        <div class="col-2">
                          <label for="inputEstado" class="form-label">Estado:</label>
                          <input list="" type="text" placeholder="SP" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="uf" id="uf" required>
                        </div>

                        <div class="form-check form-switch g-0 my-4 salvar">
                          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                          <label class="form-check-label" for="flexSwitchCheckDefault">Salvar formulário remetente?</label>
                        </div>

                        <hr>

                        <div class="row g-2 my-0">
                          <p>Formulário</p>
                          <h1>Destinatário</h1>

                          <div class="row g-2 my-0">

                            <div class="col-7">
                              <label for="inputNome" class="form-label">Nome:</label>
                              <input list="nomes" type="text" placeholder="Digite o nome completo" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="destinatario" id="destinatario" required>
                            </div>


                            <div class="col-5">
                              <label for="inputCpfCnpj" class="form-label">CPF/CNPJ:</label>
                              <input list="nomes" type="text" placeholder="000.000.000-0" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="cnpj2" id="cnpj2" required>
                            </div>

                          </div>

                          <div class="row g-2 my-0">
                            <div class="col-4">
                              <label for="inputCEP" class="form-label">CEP:</label>
                              <input list="nomes" type="text" placeholder="00000-000" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="cep2" id="cep2" required>
                            </div>

                            <div class="col-8">
                              <label for="inputEndereço" class="form-label">Endereço:</label>
                              <input list="nomes" type="text" placeholder="Nome da rua ou avenida" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="endereco2" id="endereco2" required>
                            </div>

                            <div class="row g-2 my-0">
                              <div class="col-2">
                                <label for="inpuNumero" class="form-label">Número:</label>
                                <input list="nomes" type="text" placeholder="n°" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="numero2" id="numero2" required>
                              </div>


                              <div class="col-3">
                                <label for="inputComplemento" class="form-label">Complemento:</label>
                                <input list="nomes" type="text" placeholder="ex: AP 2" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="complemento2" id="complemento2" required>
                              </div>

                              <div class="col-5">
                                <label for="inputCidade" class="form-label">Cidade:</label>
                                <input list="nomes" type="text" placeholder="ex: São Paulo" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="cidade2" id="cidade2" required>
                              </div>
                              <div class="col-2">
                                <label for="inputEstado" class="form-label">Estado:</label>
                                <input list="nomes" type="text" placeholder="SP" class="form-control is-invalid text-primary" Montserrat-labelledby billing name="uf2" id="uf2" required>
                              </div>

                              <div class="form-check form-switch g-0 my-4 salvar">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Salvar formulário remetente?</label>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

            </main>



          </div>

          <!-- Formulário que é exibido a direita da página -->

          <div class="iso-container col-6">
            <div class="col-12">

              <!-- Div lado -->
              <main>
                <div class="container">
                  <div class="form-container">
                    <div name="formulario" class="form-product row g-0 my-0" id="form2">
                      <p>Formulário</p>
                      <h1>Conteúdo</h1>
                      <div class="col-12">
                        <label for="inputCpfCnpj" class="form-label">ID do Produto:</label>
                        <input list="" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing placeholder="" name="idProduct" id="idProduct" onfocusout="verificarCampo('inputNome')" required>
                      </div>

                      <div class="col-12">
                        <label for="inputCpfCnpj" class="form-label">Centro de custo:</label>
                        <input list="" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing placeholder="" name="cCusto" id="cCusto" onfocusout="verificarCampo('inputNome')" required>
                      </div>

                      <div class="col-12">
                        <label for="inputCpfCnpj" class="form-label">Conteúdo do pacote:</label>
                        <input list="" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing placeholder="" name="content" id="content" onfocusout="verificarCampo('inputNome')" required>
                      </div>

                      <div class="col-12">
                        <label for="inputCpfCnpj" class="form-label">Quantidade de itens enviados:</label>
                        <input list="" type="number" class="form-control is-invalid text-primary" Montserrat-labelledby billing placeholder="" name="quantity" id="quantity" onfocusout="verificarCampo('inputNome')" required>
                      </div>

                      <div class="col-12">
                        <label for="inputCpfCnpj" class="form-label">Valor (R$):</label>o
                        <input list="" type="text" class="form-control is-invalid text-primary" Montserrat-labelledby billing placeholder="R$0,00" name="value" id="value" onfocusout="verificarCampo('inputNome')" required>
                        <br>
                      </div>
                      <button class="btn btn-danger" type="button" name="botaoAdd" id="butao2">Adicionar conteúdo</button>



                    </div>

                    <hr>

                    <div class="row g-2 my-0 tabela">

                      <table class="table table-bordered">
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
                      </table>


                    </div>

      </form>

      <!-- Botões -->
      <div class="row g-2 my-0">

        <div class="col-5">
          <div class="d-grid my-3">
            <button class="btn btn-outline-danger" type="reset" name="botaoExcluir" id="botaoExcluir">Limpar Formulário</button>
          </div>
        </div>


        <div class="col-7">
          <div class="d-grid my-3">
            <button class="btn btn-danger" type="submit" name="botaoEnviar" id="botaoEnviar" onclick="Enviar().funcao_pdf()">Gerar Declaração</button>
          </div>
        </div>
      </div>
    </form>
    </main>


    <script>
      new FormMask(document.querySelector("#cnpj"), "__.___.___/____-__", "_", [".", "-", "/"])
      new FormMask(document.querySelector("#cnpj2"), "__.___.___/____-__", "_", [".", "-", "/"])
      new FormMask(document.querySelector("#cep"), "_____-___", "_", ["-"])
      new FormMask(document.querySelector("#cep2"), "_____-___", "_", ["-"])
      new FormMask(document.querySelector("#value"), "00.000,00", "0", [".", ","])
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
    </script>
    <script>
      var teste = []

      $('#butao2').click(function(e) {
        e.preventDefault()
        var input_todos = [$('#idProduct').val(), $('#cCusto').val(), $('#content').val(), $('#quantity').val(), $('#value').val()]
        teste.push(input_todos)
        //var produtos = [$('#idProduto').val()]
        //var cCusto = [$('#cCusto').val()]
        //var conteudo = [$('#idProduto').val()]
        //var quantidade = [$('#quantidade').val()]
        //var valor = [$('#valor').val()]

        //teste.push(produtos, cCusto, conteudo, quantidade, valor)


        var show2 = "";
        teste.forEach(function(e) {
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
    <script>
      $(function Enviar() {

        $('form[name="formGeral"]').submit(function(e) {
          e.preventDefault();

          $.ajax({
            url: "{{route('dashboard.Conteudo')}}",
            type: "POST",
            data: $(this).serialize(),
            
            success: function() {
              console.log("Dados inseridos com sucesso!");
            },
            error: function(e){
              console.log(e);
            }

          });

        })
      })
      $(function funcao_pdf() {

        $('form[name="formGeral"]').submit(function(e) {
          e.preventDefault();

          $.ajax({
            url: "{{route('dashboard.index_pdf')}}",
            type: "POST",
            data: $(this).serialize(),
            xhrFields: {
              responseType: 'blob'
            },
            success: function(response) {
              var blob = new Blob([response]);
              var link = document.createElement('a');
              link.href = window.URL.createObjectURL(blob);
              link.download = "Declaracao.pdf";
              link.click();
            }

          });

        })
      })

      /*
      function funcao_pdf() {
        var style = "<style>";
        style = style + "table {width: 100%;font: 20px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDDDDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";
        var pegar_dados2 = document.getElementById('remetente').value;
        var janela = window.open('index_pdf', '', 'width=1000', height = "800");
        
        janela.document.close();
        janela.print();
      };
      */
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</x-app-layout>
</body>

</html>