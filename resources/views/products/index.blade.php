@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista</div>
                    <div class="panel-body">
                        @foreach($products as $producto)
                        @component('products.item',$producto)
                            <p>Adicional</p>
                        @endcomponent
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection