<?php
//Essa funcao ira cadastrar os contatos do usuario
function cadastrar($nome){
    pegarContatos();
    $contato = [
        'id'      => uniqid(),//funcao php para criar um id unico
        'nome'    => $nome,
        'email'   => $_POST['email'],
        'telefone'=> $_POST['telefone']
    ];
    array_push($contatosAuxiliar, $contato);//funcao php para adicionar elementos no final do array
    $contatosJson = json_encode($contatosAuxiliar, JSON_PRETTY_PRINT);//ira transformar o array em JSON
    file_put_contents('contatos.json', $contatosJson);//entao salva a mudanca no arquivo JSON
    header("Location: index.phtml");//ira servir para recarregar a pagina para mostrar o novo contato adicionado
}
//Essa funcao ira buscar pelo nome entre os contatos no arquivo JSON
function buscarContato_nome($nome){
    $contatos = pegarContatos();//chama a funcao pegarContatos

    $contatosEncontrados = [];//$contatosEncontrados e um array
    foreach ($contatos as $contato){//foreach ira decompor o array em contato
        if($nome == $contato['nome']){//entao se o $nome for igual a $contato posicao nome
            $contatosEncontrados[] = $contato;//entao $contatosEncontrados[] recebera o valor de $contato
        }
    }

    return $contatosEncontrados;//entao ira retornar $contatosEncontrados
}
//Essa funcao simplesmente pega o arquivo JSON e o transforma num array
function pegarContatos(){
    $contatosAuxiliar = file_get_contents('contatos.json');//pega o arquivo JSON
    $contatosAuxiliar = json_decode($contatosAuxiliar, true);//transforma o arquivo JSON em array
    return $contatosAuxiliar;//entao ele retorna $contatosAuxiliar
}

//Essa funcao ira excluir o contato do arquivo JSON
function excluirContato($id){
    pegarContatos();//chama a funcao pegarContatos()
    foreach ($contatosAuxiliar as $posicao => $contato){//foreach ira decompor o array e atribuira uma posicao dentro do contato
        if($id == $contato['id']) {// se o id for igual a contato posicao id
            unset($contatosAuxiliar[$posicao]);//ira destruir/excluir o contato
        }
    }
    $contatosJson = json_encode($contatosAuxiliar, JSON_PRETTY_PRINT);//entao ira transformar um array em um JSON e organizara o array
    file_put_contents('contatos.json', $contatosJson);//entao salvara a mudança
    header('Location: index.phtml');//ira servir para recarregar a pagina(para mostrar a mudanca)
}
//Essa funcao ira editar o contato
function editarContato($id){
    pegarContatos();//chama a funcao pegarContatos
    foreach ($contatosAuxiliar as $contato){//ira decompor o array em contato
        if ($contato['id'] == $id){//se contato na posicao id for igual a $id
            return $contato;//entao retorna $contato
        }
    }
}
function salvarContatoEditado($id){
    pegarContatos();//chama funcao pegarContatos
    foreach ($contatosAuxiliar as $posicao => $contato){//ira decompor o array em posicao e atribuira o contato
        if ($contato['id'] == $id){//se contato posicao id for igual a $id
            $contatosAuxiliar[$posicao]['nome'] = $_POST['nome'];
            $contatosAuxiliar[$posicao]['email'] = $_POST['email'];
            $contatosAuxiliar[$posicao]['telefone'] = $_POST['telefone'];
            break;
        }
    }
    $contatosJson = json_encode($contatosAuxiliar, JSON_PRETTY_PRINT);//ira transformar o array em um JSON
    file_put_contents('contatos.json', $contatosJson);//ira salvar as mudanças feitas no contatos.JSON
    header('Location: index.phtml');//tera funcao de recarregar a pagina
}
//ROTAS
if ($_GET['acao'] == 'cadastrar'){//se $_GET acao for igual a cadastrar
    cadastrar($_POST['nome']);//chama a funcao cadastrar
} elseif ($_GET['acao'] == 'excluir'){//se $_GET acao for igual a excluir
    excluirContato($_GET['id']);//chama a funcao excluirContato
}
  elseif ($_GET['acao'] == 'editar'){//se $_GET acao for igual a editar
   salvarContatoEditado($_GET['id']);//chama a funcao salvarContatoEditado
  }
  elseif ($_GET['acao'] == 'buscar'){//se $_GET acao for igual a buscar
      buscarContato_nome($_POST['nome']);//chama a funcao buscarContato_nome
  }