<?php

namespace App;

class Carrinho{

    public $itens;
    public $quantidadeTotal;
    public $precoTotal;

    public function __construct($prevCarrinho){

        if($prevCarrinho != null){
	
            $this->itens = $prevCarrinho->itens;
            $this->quantidadeTotal = $prevCarrinho->quantidadeTotal;
            $this->precoTotal = $prevCarrinho->precoTotal;
                
        }else{
            
            $this->itens = [];
            $this->quantidadeTotal = 0;
            $this->precoTotal = 0;
            
        }
    
    }

    public function addItem($id, $produto){

        $preco = (float) str_replace("$","",$produto->preco);
        
        if(array_key_exists($id, $this->itens)){
    
            $AddOProduto = $this->itens[$id];
            $AddOProduto['quantidade']++;
            $AddOProduto['precoUnicoTotal'] = $AddOProduto['quantidade'] * $preco;		
    
        }else{
        
            $AddOProduto =['quantidade'=> 1 , 'precoUnicoTotal'=> $preco, 'data'=>$produto];	
    
        }
    
            $this->itens[$id] = $AddOProduto;
            $this->quantidadeTotal++;
            $this->precoTotal = $this->precoTotal + $preco;
    
    }

    public function updatePrecoEQuantidade(){

        $precoTotal = 0;
        $quantidadeTotal = 0;

        foreach($this->itens as $item){

            $quantidadeTotal = $quantidadeTotal + $item['quantidade'];
            $precoTotal = $precoTotal + $item['precoUnicoTotal'];

        }

        $this->quantidadeTotal = $quantidadeTotal;
        $this->precoTotal = $precoTotal;

    }

}