<?php
 
class DashboardController
{
    // Função index, responsavel por exibir a página dashboard
    public function index(){
    // Inicia a sessão para verificar se o usuário está autenticado
    session_start();
    if(!isset($_SESSION['usuario_id'])){
        header('location: index.php');
        exit; //Garante que o script seja interrompido

    }

    include 'views/dashboard.php';

    }
}
?>