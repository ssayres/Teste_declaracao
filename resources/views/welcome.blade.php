<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/bootstrap.mim.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/reset.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <!-- Styles -->
    <section class="background-radial-gradient overflow-hidden">
  
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">

        <h1 class="my-5 display-5 fw-bold ls-tight">
          A melhor opção <br />
          <span">para seu transporte</span>
        </h1>

        <p class="mb-1 descricao">
          Desde 2006 no mercado, a Via Expressa fornece soluções eficientes em logística integrada em todo território nacional.</p>

          <hr>

          <p class="mb-1 descricao">Nosso diferencial é uma equipe multidisciplinar, que esta sempre a disposição procurando criar as melhores soluções logísticas sustentáveis alinhadas às necessidades de nossos clientes.
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form>

              <div class="text-center">
                <img src="img/logo-via-cinzaElaranja2.png"
                  style="width: 185px;" alt="logo">
                <h4 class="mt-1 mb-5 pb-1">Seja bem vindo!</h4>
              </div>

              <!-- [Botões para Login e Cadastro] -->
              <div class="row gx-lg-5">
              @if (Route::has('login'))
                  <div class="d-grid gap-2 d-md-block">
                      <p>Voltar ao sistema?</p>
                      @auth
                      <a href="{{ url('/dashboard') }}" class="btn btn-primary" role="button" data-bs-toggle="button">Entrar</a>
                      @else
                      <p>Já tem cadastro? faça o login aqui!</p>
                      <a href="{{ url('/login') }}" class="btn btn-primary" role="button" data-bs-toggle="button">Log in</a>
                      <hr>
                      @if (Route::has('register'))
                      <p>Se não tiver cadastro se registre aqui!</p>
                      <a href="{{ route('register') }}" class="btn btn-primary" role="button" data-bs-toggle="button">Registrar</a>
                      @endif
                    @endauth
                  </div>
                  @endif
              </div>

              <!-- [Botões para as Redes Sociais] -->
              <div class="row mt-5">
                    <p></p>

                    <hr>
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="https://www.facebook.com/viaexpressasolucoeslogistica" class="text-white"><i class="fab fa-facebook-square fa-lg" type="button" class="btn btn-link"></i></a>

                      <a href="https://www.instagram.com/viaexpressalogistica/" class="text-white"><i class="fab fa-instagram fa-lg mx-4"></i></a>

                      <a href="https://www.linkedin.com/company/viaexpressa-solucoes-logistica/mycompany/" class="text-white"><i class="fab fa-linkedin fa-lg mx-"></i></a>

                      <a href="https://api.whatsapp.com/send?phone=5511951276821&text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20os%20servi%C3%A7os%20da%20Via%20Expressa%20-%20Solu%C3%A7%C3%B5es%20Log%C3%ADsticas.Poderia%20me%20ajudar%3F%20%F0%9F%9A%9A%E2%9C%88%F0%9F%93%A6" class="text-white"><i class="fab fa-whatsapp fa-lg mx-4"></i></a>
                    </div>

              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- [Fim da Seção: Bloco de Design] -->

<!-- [Inicio do Footer] -->
<footer class="text-center text-lg-start bg-white text-muted">

<!-- Copyright -->
<div class="text-center p-4" style="background-color: #FF8B06;">
  © 2022 Copyright:
  <a class="text-reset fw-bold" href="https://viaexpressa.com/">ViaExpressa.com</a>
</div>
<!-- Copyright -->
</footer>
<!-- [Fim do Footer] -->

<!-- [Scripts] -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

<script type="text/javascript" src="js/mdbootstrap.js"></script>

</html>