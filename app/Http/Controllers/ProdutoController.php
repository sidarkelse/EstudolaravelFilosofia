<?php

namespace App\Http\Controllers;

use App\Produto;
use Symfony\Component\Console\Input\Input;

class ProdutoController extends Controller
{

    public function pesquisar()
    {
// Busca todos os produtos do banco de dados
        $produtos = Produto::all();

// Chama a view produto.pequisar e envia os produtos buscados
        return view('produto.pesquisar')->with('produtos', $produtos);
// Recebe o conteúdo elemento 'descricao' do formulário
        $descricao = Input::get('descricao');

// Busca produtos com o conteúdo da $descricao
        $produtos = Produto::where('descricao', 'like', '%' . $descricao . '%')->get();

// Chama a view produto.pesquisar e envia os produtos encontrados
        return view('produto.pesquisar')->with('produtos', $produtos);
    }
    public function mostrar_inserir()
    {
        return view('produto.inserir');
    }
    public function inserir()
    {
        // Criando um novo objeto do tipo Produto
        $produto = new Produto();

        // Colocando os valores recebidos do formulário nos atributos do objeto $produto
        $produto->descricao = Input::get('descricao');
        $produto->quantidade = Input::get('quantidade');
        $produto->valor = Input::get('valor');
        $produto->data_vencimento = Input::get('data_vencimento');
        $produto->filosfoia = Input::get('filosofia');

        // Salvando no banco de dados
        $produto->save();

        // Criado uma mensagem para o usuário
        $mensagem = "Produto inserido com sucesso";

        // Chamando a view produto.inserir e enviando a mensagem criada
        return view('produto.inserir')->with('mensagem', $mensagem);
    }
    public function mostrar_alterar($id)
    {
        return view('produto.alterar');
         // Busca no banco o registro com o id recebido
         $produto = Produto::find($id);

         // Envia os dados deste registro a view produto.alterar
         return view('produto.alterar')->with('produto', $produto);
    }
    public function alterar()
    {
        $id = Input::get('id');
        $p = Produto::find($id);

        $p->descricao = Input::get('descricao');
        $p->quantidade = Input::get('quantidade');
        $p->valor = Input::get('valor');
        $p->data_vencimento = Input::get('data_vencimento');

        $p->save();

        $mensagem = "Produto alterado com sucesso!";
        $produtos = Produto::all();
        return view('produto.pesquisar')->with('mensagem', $mensagem)->with('produtos', $produtos);
    }
    public function excluir($id)
    {
        // Criando um objeto com o id recebido pela rota
        $produto = Produto::find($id);

        //Vai Excluir este produto
        $produto->delete();

        // Criando uma mensagem para ser enviada a view produto.pesquisar
        $mensagem = "Produto excluído com sucesso!";

        // Capturando objetos para enviar a view produtopesquisar
        $produtos = Produto::all();

        // Retornando aview produto.pesquisar
        return view('produto.pesquisar')->with('mensagem', $mensagem)->with('produtos', $produtos);
    }

}

