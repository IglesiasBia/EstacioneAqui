<?php

use Mpdf\Shaper\Indic;

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
            include "administrador/relatorios/form_relatorio.php";
            break;
        case "relatorio_pdf":
            include "relatorio_pdf.php";
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
        case "lista_vagas":
            include "estacionamento/lista_vagas.php";
            break;
        case "altera_vaga_cliente":
            include "estacionamento/altera_vaga_cliente.php";
            break;
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
            // Parte escolher qauis espaços são vagas
        case "layout_desenha_vagas":
            include "estacionamento/criar-layout-estacionamento/form_layout_desenha_vagas.php";
            break;
            // Insere no banaco as vagas
        case "altera_layout_vagas":
            include "estacionamento/criar-layout-estacionamento/altera_layout_vagas.php";
            break;
            // Parte de escoolher os setores da vaga
        case "form_altera_setor":
            include "estacionamento/criar-layout-estacionamento/form_altera_setor.php";
            break;
            // Insere os setores no banco
        case "altera_setor":
            include "estacionamento/criar-layout-estacionamento/altera_setor.php";
            break;
            // Parte que seleciona o tipo da vaga (carro ou moto)
        case "form_altera_tipo_vaga":
            include "estacionamento/criar-layout-estacionamento/form_altera_tipo_vaga.php";
            break;
            // Insere tipo vaga no banco
        case "altera_tipo_vaga":
            include "estacionamento/criar-layout-estacionamento/altera_tipo_vaga.php";
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
        case "insere_forma_pagamento":
include "geral/ticket/insere_forma_pagamento.php";
break;
        case "faz_ticket":
            include "geral/ticket/faz_ticket.php";
            break;
            case "modal_forma_pagamento":
                include "geral/ticket/modal_forma_pagamento.php";
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

        case "teste_pdf":
            include "administrador/relatorios/teste_pdf.php";
            break;
        default:
            include "dash.php";
            break;
    }
}
