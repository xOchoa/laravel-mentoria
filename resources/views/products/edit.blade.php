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
                                <label for="">Título</label><br>
                                <input type="text" name="titulo" value="{{ $product->titulo }}"><br>
                                @if($errors->has('titulo'))
                                    {{ $errors->first('titulo') }}
                                @endif
                                <label for="">Descripción</label><br>
                                <textarea name="descripcion">{{ $product->descripcion }}</textarea><br>
                                @if($errors->has('descripcion'))
                                    {{ $errors->first('descripcion') }}
                                @endif
                                <label for="">Precio</label><br>
                                <input type="text" name="price" value="{{ $product->price }}"><br>
                                @if($errors->has('price'))
                                    {{ $errors->first('price') }}
                                @endif
                                <label for="">Tipo</label><br>
                                <select name="product_type_id" ><br>
                                    @foreach($types as $type)
                                    <option value="{{ $type->id }}" {{ ($type->id == $product->product_type_id)?"selected":"" }}>{{ $type->name }}</option>
                                    @endforeach
                                </select><br><br>
                                <button>Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection