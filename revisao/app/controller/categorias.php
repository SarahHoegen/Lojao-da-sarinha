<?php

require_once '../modelos/CrudCategoria.php';

//Ação principal - LISTAR TODAS AS CATEGORIAS



if(isset($_GET['acao'])){
    $acao=$_GET['acao'];

}else{
    $acao='index';
}

switch ($acao){
    case 'index':
        echo "VOCE ESCOLHEU INDEX";

        $crud=new CrudCategoria();
        $categorias=$crud->getCategorias();
        echo ('<pre>');
        //exibir
        include '../views/templates/cabecalho.php';
        include '../views/categorias/index.php';
        include '../views/templates/rodape.php';

        break;


    case 'inserir':

        include '../views/templates/cabecalho.php';
        include '../views/categorias/inserir.php';
        include '../views/templates/rodape.php';
        break;

    case 'exibir':

        $id= $_GET['id'];
        $crud=new CrudCategoria();
        $categoria=$crud->getCategoria($id);
        var_dump($categoria);
        include '../views/categorias/exibir.php';
        break;

    default:
        echo"Acao inválida";
}