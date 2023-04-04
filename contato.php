<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css"> <!-- Link bliblioteca de animações WOW -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>

<body>

    <!-- Conteúdo formulário contato: -->
    <section id="pagcontato" class="container mt-2">
        <div class="row">
            <div class="col-md-12 mt-4 text-center wow fadeInDown slow">
                <h1>Entre em contato conosco</h1>
            </div>
        </div>
        <div class="row m-1 wow fadeInLeft slow">
            <div class="col-md-5 mt-3 p-4 mx-auto shadow">
                <h2 class="text-center">Contato</h2>
                <form id="frmContato"> <!-- Form com os dados do formulário -->
                    <div class="my-2">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" placeholder="Insira seu nome" name="nome">
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Ex: Email@gmail.com" name="email">
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label for="ddd" class="form-label">DDD:</label>
                            <input type="text" class="form-control" id="ddd" placeholder="Ex: 011" name="telefone">
                            <div id="msgDdd"></div>
                        </div>
                        <div class="col-md-8 mb-2">
                            <label for="telefone" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" id="telefone" placeholder="Ex: 999999999" name="telefone">
                            <div id="msgTelefone"></div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="mensagem" class="form-label">Mensagem:</label>
                        <textarea class="form-control" rows="5" id="comment" placeholder="Informe sua dúvida ou solitice seu orçamento!" name="text"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn" style="text-transform: none; padding: 10px;">Tirar minha dúvida</button> <!-- A ideia é que cada submit guarde a informação em tabelas diferentes do banco de dados -->
                        <small>ou</small>
                        <button type="submit" class="btn" style="text-transform: none; padding: 10px;">Fazer meu orçamento</button>
                    </div>
                    <div class="text-end pe-4 mt-0">
                        <small>100% gratuito!</small>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Onda do rodapé: -->
    <svg width="100%" height="70" preserveAspectRatio="none" viewBox="0 0 1440 320"> <!-- Exportação de um SVG que cria as "ondinhas" -->
        <path fill="#d9d9d9" fill-opacity="1" d="M0,256L120,266.7C240,277,480,299,720,293.3C960,288,1200,256,1320,240L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
    </svg>
    
</body>
</html>