
@extends('site.layouts.index')



@section('center')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
       
       
       
       
       
            <div class="shopper-informations">
                <div class="row">
            
                    <div class="col-sm-12 clearfix">
                        <div class="bill-to">
                            <p> Shipping/Bill To</p>
                            <div class="form-one">
                                
                                          
                                           <div class="total_area">
                                                    <ul>
                                
                                                        <li>Payment Status
                                                        @if($formadepagamento_info['status'] == 'em_espera')

                                                         <span>Não pagou ainda.</span>

                                                        @endif

                                                        </li>
                                                        <li>Shipping Cost <span>Free</span></li>
                                                        <li>Total <span>{{$formadepagamento_info['preco']}}</span></li>
                                                    </ul>
                                                    <a class="btn btn-default update" href="">Atualizar</a>
                                                    <a class="btn btn-default check_out" id="paypal-button" >Pagar</a>
                                                </div>
                                          
                                          
                                          
                                          
                            </div>
                            <div class="form-two">
                                
                            </div>
                        </div>
                    </div>
                           
                </div>
            </div>
    </div>
</section> <!--/#payment-->



@endsection

