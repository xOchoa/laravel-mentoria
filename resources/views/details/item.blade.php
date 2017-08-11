<div class="col-md-9">
		<img src="https://dummyimage.com/100x100/000/fff" style="float: left; display: block; margin-right: 20px; width: ;">
		<div style="float: left; width: 70%;">
			<form action="{{ route('details.update', ['id'=>$id]) }}" method="POST">
				{{ method_field('PUT') }}
        {{ csrf_field() }}
        <input type="hidden" name="product_id" value="{{ $product_id }}">
		    <h3 style="margin-top: 0;">{{ $product['titulo'] }}</h3>
		    <p>{{ $product['descripcion'] }}</p>
		    <h4>$ {{ $product['price'] }} MXN</h4>
		    <label for="quantity">Quantity: </label>
		    <input type="number" name="quantity" value="{{ $quantity }}">
		    @if($errors->has('quantity'))
	          {{ $errors->first('quantity') }}
	      @endif
	      @if($errors->has('product_id'))
	          {{ $errors->first('product_id') }}
	      @endif
		    <input type="submit" value="Change" >
		    <a href="{{ route('details.delete',['id'=>$id]) }}" style="position: absolute; top: 0; right: -150px;">Remove Product</a>
		    <br><br>
		    <a href="{{ route('products.index') }}"> Regresar</a>
		   </form>
	  </div>
</div>