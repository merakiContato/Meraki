<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css"> <!-- Link bliblioteca de animações WOW -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    
    <!-- Conteúdo página sobre: -->
    <section id="pagsobre" class="mx-4">
        <div class="row px-5">
            <div class="col-md-5 mt-5 wow fadeInLeft slow">
                <h2>
                    Conheça<br>
                    mais<br>
                    sobre<br>
                    nossa<br>
                    empresa
                </h2>
            </div>
            <div class="col-md-7 mt-5 wow fadeInRight slow" style="border-left: 1px solid #ccc">
                <div id="imgcard">
                    <div class="row-xxl-12 mt-5 px-5 d-flex">
                        <div>
                            <p width="300px">Nossa empresa surgiu no ano de 2022 por meio de uma iniciativa do Instituto
                                Federal de São Paulo campus Guarulhos, onde formamos nossa equipe composta por integrantes
                                que se completavam por seus interesses e habilidades.</p>
                        </div>
                        <div class="my-auto px-4">
                            <img src="imagens/cmemoria.png" alt="Ícone de um cartão de memória" width="120px" height="120px">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row-xxl-12 mt-5 px-5 d-flex">
                        <div class="mx-auto my-auto px-4">
                            <img src="imagens/tecla.png" alt="Ícone das teclas de um computador WASD" width="150px" height="150px">
                        </div>
                        <div>
                            <p>Esta plataforma de divulgação foi criada com o intuito de apresentar nossa empresa e expor
                            nosso trabalho para clientes em potencial.</p>
                        </div>
                    </div>
                </div>
			</div>
		</div>
    </section>
    <section id="pagsobre" class="mx-5 text-center">
        <div class="row px-5">
            <div class="col-md-12">
                <h2 style="font-size: 60px; padding-top: 140px; color: #d9d9d9">O QUE NOS MOVE?</h2>
                <p style="color: #d9d9d9">Existem três pilares os quais norteiam nossa empresa</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-5 text-center">
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <!-- Inicio dos indicadores para navegar nos slides-->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide3"></button>
                    </div>
                    <!-- Fim dos indicadores para navegar nos slides-->

                    <!-- Inicio dos slides-->
                    <div class="carousel-inner">
                        <div class="carousel-item active mx-auto">
                            <img src="imagens/destination.png" alt="Ícone de um mapa" class="d-block w-30 mx-auto">
                            <h2>Missão</h2>
                            <p>A Meraki é uma empresa de desenvolvimento web que deseja auxiliar pequenas empresas com a criação de um site exclusivo
                                capaz de atrair o seu público alvo, visando sempre as necessidades do nosso cliente</p>
                        </div>
                        <div class="carousel-item">
                            <img src="imagens/vision.png" alt="Ícone de uma mão segurando um olho com um cifrão dentro" class="d-block w-40 mx-auto">
                            <h2>Visão</h2>
                            <p>Buscamos fazer nosso trabalho com dedicação, levando sempre em consideração a opinião do cliente, dispostas a aperfeiçoar o
                                o que for necessário para que o mesmo esteja sempre satisfeito.</p>
                        </div>
                        <div class="carousel-item">
                            <img src="imagens/value.png" alt="Ícone de um diamante" class="d-block w-40 mx-auto">
                            <h2>Valor</h2>
                            <p> Não abrimos mão dos seguintes valores: Comprometimento, dedicação, criatividade e resposabilidade.
                            </p>
                        </div>
                    </div>
                    <!-- Fim dos slides-->

                    <!-- Botões de anterior e próximo-->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Onda do rodapé: -->
    <svg width="100%" height="70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"> <!-- Exportação de um SVG que cria as "ondinhas" -->
        <path fill="#d9d9d9" fill-opacity="1" d="M0,128L40,149.3C80,171,160,213,240,224C320,235,400,213,480,213.3C560,213,640,235,720,245.3C800,256,880,256,960,224C1040,192,1120,128,1200,112C1280,96,1360,128,1400,144L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>

</body>

</html>