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

            // CRUD Funcionários
            case "lista_func":
                include "funcionarios/lista_func.php";
                break;
            case "fadd_func":
                include "funcionarios/form_add_func.php";
                break;
            case "view_func":
                include "funcionarios/view_func.php";
                break;
            case "fadd_fun":
                include "fun.php";
                break;  
            case "insere_func":
                include "funcionarios/insere_func.php";
                break;
            case "form_att_func":
                include "funcionarios/form_att_func.php";
                break;
            case "atualiza_func":
                include "funcionarios/atualiza_func.php";
                break;
            case "att_status_func":
                include "funcionarios/atualiza_status_func.php";
                break;
            case "lista_func_inativo":
                include "funcionarios/lista_func_inativo.php";
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
                
            
            default:
                include "dash.php";
                break;
        }
    }

?>