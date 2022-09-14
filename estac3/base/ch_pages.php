<?php

if (isset($_GET["page"])) {

    switch ($_GET["page"]) {
        case "logout":
            include "logout.php";
            break;
        case "validacao":
            include "validacao.php";
            break;
        case "dash":
            include "dash.php";
            break;
        case "redireciona-modal":
            include "redireciona-modal.php";
            break;

            //Administrador
        case "form_relatorio":
            include "administrador/form_relatorio.php";
            break;
        case "gera_relatorio":
            include "administrador/gera_relatorio.php";
            break;

            // CRUD Funcionários
        case "lista_func":
            include "administrador/lista_func.php";
            break;
        case "fadd_func":
            include "administrador/form_adiciona_func.php";
            break;
        case "view_func":
            include "administrador/view_func.php";
            break;
        case "insere_func":
            include "administrador/insere_func.php";
            break;
        case "form_att_func":
            include "administrador/form_atualiza_dados_func.php";
            break;
        case "atualiza_func":
            include "administrador/atualiza_dados_func.php";
            break;
        case "att_status_func":
            include "administrador/atualiza_status_func.php";
            break;
        case "lista_func_inativo":
            include "administrador/lista_func_inativo.php";
            break;

            //CRUD Estacionamento  
        case "atualiza":
            include "atualiza.php";
            break;
        case "view_estac":
            include "estacionamento/view_estac.php";
            break;
        case "atualiza_estac":
            include "estacionamento/atualiza_estac.php";
            break;
        case "form_add_vaga":
            include "estacionamento/form_add_vaga.php";
            break;
        case "insere_vaga":
            include "estacionamento/insere_vaga.php";
            break;
        // Layout
        case "altera_layout":
            include "estacionamento/altera_layout.php";
            break;
        case "layout":
            include "estacionamento/layout.php";
            break;
            case "insere_dados_layout":
                include "estacionamento/insere_dados_layout.php";
                break;
        case "insere_setor_layout":
            include "insere_setor_layout.php";
            break;

            // Geral (funcionário e administrador)
            // Perfil
        case "perfil_usu":
            include "geral/perfil/perfil_usu.php";
            break;
        case "form_altera_senha_usu":
            include "usuarios/perfil/form_altera_senha_usu.php";
            break;
        case "altera_senha_usu":
            include "geral/perfil/altera_senha_usu.php";
            break;

            // Clientes
        case "insere_cliente":
            include "geral/cliente/insere_cliente.php";
            break;
        case "busca_cliente_atualizar":
            include "geral/cliente/form_busca_cliente_atualizar.php";
            break;

        case "form_atualiza_dados_cliente":
            include "geral/cliente/form_atualiza_dados_cliente.php";
            break;
        case "atualiza_vaga_cliente":
            include "geral/cliente/atualiza_dados_cliente.php";
            break;



        case "busca_vaga_veic":
            include "geral/cliente/busca_vaga_veic.php";
            break;
            //Parte funcionario

            // case "form_add_cli":
            //     include "usuarios/form_add_cliente.php";
            //     break;


            // Ticket
        case "faz_ticket":
            include "geral/ticket/faz_ticket.php";
            break;
        case "pagar_ticket":
            include "geral/ticket/pagar_ticket.php";
            break;
            // case "insere_cli":
            //     include "geral/cliente/insere_cli.php";
            //     break;    
            //Geral
            // case "busca_cliente":
            //     include "geral/busca_cliente.php";
            //     break;

        case "lista_vagas":
            include "geral/lista_vagas.php";
            break;
        case "lista_vagas":
            include "lista_vagas.php";
            break;
        default:
            include "dash.php";
            break;
    }
}
