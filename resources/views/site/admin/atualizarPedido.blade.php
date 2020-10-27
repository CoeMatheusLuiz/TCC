@extends('site.layouts.admin')

@section('body')

@if(Auth::user()->admin_level == 1) 
<div class="table-responsive">

    <form action="{{ route('adminAtualizarPedido',['pedido_id' => $pedido->pedido_id ])}}" method="post">

        {{csrf_field()}}

        <div class="form-group">
            <label for="date">Data</label>
            <input type="date" class="form-control" name="data" id="data" placeholder="Data" value="{{$pedido->data}}" required>
        </div>
        <div class="form-group">
            <label for="del_date">Data de entrega</label>
            <input type="date" class="form-control" name="del_data" id="del_data" placeholder="Data de Entrega" value="{{$pedido->del_data}}" required>
        </div>


        <div class="form-group">
            <label for="price">Preco</label>
            <input type=number step="0.01" class="form-control" name="preco" id="preco" placeholder="preco" value="{{$pedido->preco}}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" id="status" placeholder="status" value="{{$pedido->status}}" required>
        </div>
        <button type="submit" name="submit" class="btn btn-default btn-custom btn-botao btn-carousel">Submit</button>
    </form>

</div>

@else
<div class="alert alert-danger">Apenas administradores de primeiro nível podem editar produtos</div>
@endif


@endsection