<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Icons do rodapé -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="shorcut icon" href="imagens/icon.ico" type="image/x-ico" /> <!-- Ícone da guia -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css"> <!-- Link bliblioteca de animações WOW -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <title>Meraki</title>

    <script>
        //Load ajax para carregar as demais páginas da nav sem precisar linkar
        $(document).ready(function() {

            let trigger = $('.nav2 ul li a'),
                container = $('#content');

            trigger.on('click', function(event) {
                event.preventDefault();

                let $this = $(this),
                    target = $this.data('target');

                container.load(target + '.php');
            });
        });
    </script>
</head>

<body class="containerblack">

    <!-- Menu de navegação: -->
    <nav class="navbar navbar-expand-md px-5" style="box-shadow: none;">
        <div class="container-fluid">
            <a id="nav1" href="#" class="navbar-brand">
                <img src="imagens/logobranco.png" alt="Logo da empresa Meraki branco">
            </a>
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end nav2" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a data-target="servicos" href="#" class="nav-link">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a data-target="sobre" href="#" class="nav-link">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a data-target="equipe" href="#" class="nav-link">Equipe</a>
                    </li>
                    <li class="nav-item">
                        <a data-target="contato" href="#" class="nav-link">Fale conosco</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Div que conterá todos os conteúdos: -->
    <div id="content">
        <?php include('home.php'); ?> <!-- Para que nosso index sempre inicie mostrando a página home -->
    </div>

    <!-- Rodapé: -->
    <footer class="container-fluid text-center pb-3" style="background-color: #d9d9d9;">
        <div class="row">
            <div class="col-md-12 mt-4">
                <img src="imagens/rodapepreto.png" alt="Logo da empresa Meraki preta">
                <p>&COPY; Todos os direitos reservados</p>
            </div>
        </div>
        <div class="row justify-content-center text-center mt-3">
            <div class="col-md-2">
                <ul>
                    <li><a href="https://www.instagram.com/empresa.meraki/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" alt="Ícone do instagram"></i></a></li>
                </ul>
                <p>Instagram</p>
            </div>
            <div class="col-md-2">
                <ul>
                    <li><a href="mailto: merakimgl.contato@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true" alt="Ícone de um envelope"></i></a></li>
                </ul>
                <p>Email</p>
            </div>
            <div class="col-md-2">
                <ul>
                    <li><a href="#"><i class="fa fa-phone" aria-hidden="true" alt="Ícone do telefone"></i></a></li>
                </ul>
                <p>(11) 94839-6813</p>
            </div>
        </div>
    </footer>

</body>

</html>