@extends('layouts.app')
@foreach($errors->all() as $error)
    <p>{{ $error }}</p>
@endforeach
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Detalle</div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <form action="{{ route('products.update',['id'=>$product->id]) }}" method="post">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <input type="text" name="titulo" value="{{ $product->titulo }}">
                                @if($errors->has('titulo'))
                                    {{ $errors->first('titulo') }}
                                @endif
                                <textarea name="descripcion">{{ $product->descripcion }}</textarea>
                                @if($errors->has('descripcion'))
                                    {{ $errors->first('descripcion') }}
                                @endif
                                <button>Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection