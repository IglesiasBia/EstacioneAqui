<?php

    if(isset($_GET["msg"])){
        $msg = $_GET["msg"];

        switch($msg){
            //Sobre cadastrar cliente
            case 1:
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Cliente cadastrado com sucesso!
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
            break;
            case 2:
                echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                Cliente atualizado com sucesso!
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
            break;
            case 3:
                echo '	<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Só é possível alterar clientes que estejam dentro do estabelecimento.
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
            break;
            case "dadosIncompletos":
                echo '	<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Preencha todos os dados para inserir um veículo.
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
            break;
            //Sobe alteração de senha
            case "senhaVazia":
                echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                A senha não pode ser nula.
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
                break;  
            case 4:
                echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
                Senha atualizada com sucesso.
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
                break; 
            case 5:
                echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Erro ao atualizar senha.
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
                break;   
            //Sobre alteração de cliente
            case 6:
                echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
                Cliente atualizado com sucesso.
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
                break; 
            case 7:
                echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Erro ao atualizar cliente.
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
                break;
            //Sobre alteração do estacionamanto
            case 8:
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Estacionamento cadastrado com sucesso!
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
                break;
            case 9:
                echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                Estacionamento atualizado com sucesso!
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
                break;
            // Sobre inserir uma nova vaga
            // RAPHELA ME AJUDA A ACHAR UM TEXTO MELHOR PARA ESSAS MENSAGEM
            case "numFinalMenorNumInicial":
                echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                O número da vaga final deve ser maior que número o número da vaga inicial!
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
            break;
            case "numVagaInvalido":
                echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                O número da vaga inicial deve ser somente um número maior que a última vaga existente
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
            break;
            case "VagaExistente":
                echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Vaga já existente.
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
            break;
            case "erroInserirVaga":
                echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Preencha todos os campos para inserir uma nova vaga.
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
                break;
            case "sucessoInserirVaga":
                echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                Nova vaga inserida com sucesso!
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
            break;
            // Se existe ticket
            case 10:
                echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Placa não encontrada.
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
                break;
            // Sobre vaga
            case 11:
                echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Insira uma vaga vazia.
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
            break;
            // Login inválido 
            case 12:
                echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Login inválido. 
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
            break;
            case 13:
                echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Placa inválida! Veículo esta dentro do estacionamento. 
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
            break;
            // MENSAGEM DE ERRO SE JÁ HOUVER VEÍCULO COM A PLACA INSERIDA DENTRO DO ESTACIONAMENTO
            case 14:
                echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Insira uma placa que esteja dento do estabelecimento. 
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
            break;
            // Pagamento feito
            case 15:
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Pagamento realizado com sucesso!
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
            break;
            case 16:
                echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Preencha todos os dados. 
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">X</button></div>';
            break;

        }
        $msg = 0;
    }

?>