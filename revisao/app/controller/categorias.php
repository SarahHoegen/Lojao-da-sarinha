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

        if(!isset($_POST['gravar'])) {

            include '../views/templates/cabecalho.php';
            include '../views/categorias/inserir.php';
            include '../views/templates/rodape.php';

        }else{
            //gravar dados digitados no BD

            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $novaCat = new Categoria(null, $nome, $descricao);
            $crud = new CrudCategoria();
            $crud->insertCategoria($novaCat);
            header('Location: categorias.php');
        }

        break;

    case 'exibir':

        $id= $_GET['id'];
        $crud=new CrudCategoria();
        $categoria=$crud->getCategoria($id);
        var_dump($categoria);
        include '../views/categorias/exibir.php';
        break;

    case 'alterar':

        if(!isset($_POST['gravar'])) {

            include '../views/templates/cabecalho.php';
            include '../views/categorias/inserir.php';
            include '../views/templates/rodape.php';

        }else{
            //gravar dados digitados no BD

            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $novaCat = new Categoria(null, $nome, $descricao);
            $crud = new CrudCategoria();
            $crud->insertCategoria($novaCat);
            header('Location: categorias.php');
        }

        break;


    default:
        echo"Acao inválida";
}