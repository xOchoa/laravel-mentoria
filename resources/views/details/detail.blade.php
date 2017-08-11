@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Extendend view</div>
                    <div class="panel-body">
                        @if($product)
                        	@component('details.item', $product[0])
                        	@endcomponent
                        @else
                            <p>Error</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection