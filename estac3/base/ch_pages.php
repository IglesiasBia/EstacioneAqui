<?php

    if(isset($_GET["page"])){
        
        switch($_GET["page"]){
            case "logout":
                include "logout.php";
                break;
            case "validacao":
                include "validacao.php";
                break;
            case "dash":
                include "dash.php";
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
                include "administrador/form_add_func.php";
                break;
            case "view_func":
                include "administrador/view_func.php";
                break; 
            case "insere_func":
                include "administrador/insere_func.php";
                break;
            case "form_att_func":
                include "administrador/form_att_func.php";
                break;
            case "atualiza_func":
                include "administrador/atualiza_func.php";
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

            //Parte funcionario
                case "perfil_usu":
                    include "usuarios/perfil_usu.php";
                    break;
                case "form_add_cli":
                    include "usuarios/form_add_cliente.php";
                    break;
                case "form_att_cliente":
                    include "usuarios/form_att_cliente.php";
                    break;
                case "form_atualiza_vaga_cliente":
                    include "usuarios/form_atualiza_vaga_cliente.php";
                    break;
                case "atualiza_vaga_cliente":
                    include "usuarios/atualiza_vaga_cliente.php";
                    break;
                case "form_altera_senha_usu":
                    include "usuarios/form_altera_senha_usu.php";
                    break;
                case "altera_senha_usu":
                    include "usuarios/altera_senha_usu.php";
                    break;
                case "insere_card":
                    include "usuarios/insere_card.php";
                    break;
                case "faz_ticket":
                    include "usuarios/faz_ticket.php";
                    break; 
                case "pagar_ticket":
                    include "usuarios/pagar_ticket.php";
                    break;  
                case "insere_cli":
                    include "usuarios/insere_cli.php";
                    break;    
                //Geral
                case "busca_cliente":
                    include "geral/busca_cliente.php";
                break;  
                case "busca_vaga_veic":
                    include "geral/busca_vaga_veic.php";
                break;
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

?>