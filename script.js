//Zerando as variáveis
var validTelefone = false;
var validDdd = false;

function validarFormulario() { //Validando os dados
    return (validTelefone & validDdd);
}

/* $("#frmContato").submit(function (event) { //AVISO: Nós ainda não temos um banco de dado nem funções php para executar, mas seria nesse esquema aqui, a verificação dupla
    event.preventDefault();

    if (validarFormulario()) { 
        let url = "codigo.php";
        let data = $("#frmContato").serialize();
        $.post(url, data, function (data, status) {

        });

    }
});*/

$(document).ready(function () { //QUANDO o documento estiver PRONTO

    /*------ Animação do "menu hamburguer" ------*/
    $("#collapsibleNavbar").click(function () {
        $(".navbar-nav").fadeIn();
    });

    /*------ Load dos botões das páginas com Ajax ------*/
    $("#nav1").click(function (event) {
        event.preventDefault();
        $("#content").load("home.php");
    });

    $("#btnserv").click(function (event) {
        event.preventDefault();
        $("#content").load("servicos.php");
    });

    $("#btncont").click(function (event) {
        event.preventDefault();
        $("#content").load("contato.php");
    });

    /*------ Inicializando a bliblioteca de animações WOW ------*/
    new WOW().init();

    /*------ Códigos do formulário ------*/
    $("#frmContato").submit(function (event) {
        event.preventDefault();
        alert("Ainda não linkamos os dados! (Próxima etapa do projeto)");
        if (validarFormulario()) { } else {
            alert("Por favor, verifique se preencheu todos os dados corretamente! Erro encontrado");
        }
    });

    $("input").keypress(function (event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            $(this).blur();
        }
    });

    //Verificando o telefone
    $("#telefone").blur(function (event) {
        let telefoneStr = $(event.target).val().trim();
        if (telefoneStr.trim().replace("-", "").match(/^[\d]{9}$/g)) {
            validTelefone = true;
            $(event.target).css("color", "black");
            $("#msgTelefone").hide();
        } else {
            $(event.target).css("color", "#7952b3");
            $(event.target).focus();
            $("#msgTelefone").html("Telefone Inválido!").css("color", "#7952b3");
            $("#msgTelefone").show();
            validTelefone = false;
        }
    });

    //Verificando o DDD
    $("#ddd").blur(function (event) {
        let dddStr = $(event.target).val().trim();
        if (dddStr.trim().replace("-", "").match(/^[\d]{3}$/g)) {
            validDdd = true;
            $(event.target).css("color", "black");
            $("#msgDdd").hide();
        } else {
            $(event.target).css("color", "#7952b3");
            $(event.target).focus();
            $("#msgDdd").html("DDD Inválido!").css("color", "#7952b3");
            $("#msgDdd").show();
            validDdd = false;
        }
    });

});