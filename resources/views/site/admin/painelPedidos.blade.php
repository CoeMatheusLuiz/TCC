@extends('site.layouts.admin')

@section('body')

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <style>
/* The payment window */
                .payment-window {
                  display: none; /* Hidden by default */
                  position: fixed; /* Stay in place */
                  z-index: 1; /* Sit on top */
                  padding-top: 100px; /* Location of the box */
                  left: 0;
                  top: 0;
                  width: 100%; /* Full width */
                  height: 100%; /* Full height */
                  overflow: auto; /* Enable scroll if needed */
                  background-color: rgb(0,0,0); /* Fallback color */
                  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                }
                
                /* payment window content */
                .payment-window-content {
                  background-color: #fefefe;
                  margin: auto;
                  padding: 30px;
                  border: 1px solid #888;
                  width: 45%;
                }
                
                /*  payment window close button */
                .payment-window-close {
                  color: #aaaaaa;
                  float:right;
                  margin-left:20px;
                  font-size: 28px;
                  font-weight: bold;
                }
                
                
                .payment-window-close:hover,
                .payment-window-close:focus {
                  color: #aaaaaa;
                  text-decoration: none;
                  cursor: pointer;
                }

  </style>

<h1>Painel Pedidos</h1>

@if(session('statusExclusãoPedido'))
	<div class="alert alert-danger">{{session('statusExclusãoPedido')}}</div>
@endif

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Pedido_id</th>
            <th>Data</th>
            <th>Data de Entrega</th>
            <th>Preco</th>
            <th>User_id</th>
            <th>Status</th>
            <th>Pagamento</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
        </thead>
        <tbody>

        @foreach($pedidos as $pedido)  
          <tr>
          
              <td>{{$pedido->pedido_id}}</td>
              <td>{{$pedido->data}}</td>
              <td>{{$pedido->del_data}}</td>
              <td>{{$pedido->preco}}</td>
              <td>{{$pedido->user_id}}</td>
              <td>{{$pedido->status}}</td>

              <td><a class="payment-info-button btn btn-success" onclick="getInformaçãoPagamento('{{$pedido->pedido_id}}','{{$pedido->status}}')">Informações do Pagamento</a></td>
              
              <td><a href="{{ route('adminEditarPedido', ['pedido_id'=> $pedido->pedido_id])}}" class="btn btn-primary">Editar</a></td>
              <td><a href="{{ route('adminExcluirPedido',['id' => $pedido->pedido_id ])}}" onclick="return confirm('Tem certeza de que deseja excluir este pedido?')" class="btn btn-warning">Remover</a></td>
          </tr>
        @endforeach
        </tbody>
    </table>





    
        <!-- The payment window -->
        <div id="my-payment-window" class="payment-window">
        
          <!-- status content -->
          <div class="payment-window-content">
            <span class="payment-window-close">&times;</span>
            <h2>Payment Info</h2>
            <p>Loading..</p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
         
          </div>
        
        </div>
        
    {{$pedidos->links()}}

</div>

<script>


 function getInformaçãoPagamento(pedido_id,status){

      
        if(status === 'pago'){
 
                  $.get( "http://localhost:8081/payment/getInfoPagamentoPorIdPedido/"+pedido_id, function( data ) {
                       
                        // alert( "Data Loaded: " + data ); 
                         var pagamentoInfo = JSON.parse(data);
                          $( ".payment-window" ).show();
                          $( ".payment-window-content p:eq(0)" ).text( "ID: " + pagamentoInfo.id);
                          $( ".payment-window-content p:eq(1)" ).text( "Forma de Pagamento ID: " + pagamentoInfo.paypal_payment_id);
                          $( ".payment-window-content p:eq(2)" ).text( "Pagador ID: " + pagamentoInfo.paypal_payer_id);
                          $( ".payment-window-content p:eq(3)" ).text( "Total: $" + pagamentoInfo.amount);
                          $( ".payment-window-content p:eq(4)" ).text( "Dados: " + pagamentoInfo.date);
                    
                          });
                  
          
          
        } else if(status === 'em_espera'){
      
                
                $(".payment-window").show();
                $( ".payment-window-content p:eq(0)" ).text( "Não pagou ainda");  
                $( ".payment-window-content p:eq(1)" ).text( "");
                $( ".payment-window-content p:eq(2)" ).text( "");
                $( ".payment-window-content p:eq(3)" ).text( "");
                $( ".payment-window-content p:eq(4)" ).text( "");
                    

        }else{
        
               $( ".payment-window" ).show();
               $( ".payment-window-content p:eq(0)" ).text( "Status indefinido");
                $( ".payment-window-content p:eq(1)" ).text( "");
                $( ".payment-window-content p:eq(2)" ).text( "");
                $( ".payment-window-content p:eq(3)" ).text( "");
                $( ".payment-window-content p:eq(4)" ).text( "");
        
        }  
          
 }        
        
        $(".payment-window-close").click(function(){
               $(".payment-window").hide();
        
        });
        
        
 



</script>

@endsection





