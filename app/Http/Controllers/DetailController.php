<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\DetailRequest;

use App\Detail;
use App\Product;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        #$product = Product::find($request->id)->all();
        $data['product'] = Detail::with(['product'])->where('id', $request->id)->get()->toArray();
        return view('details.detail', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Checar que no exista
        $detail = Detail::where('product_id', $request->id)->first();
        
        if (is_null($detail)){
            $product = Product::find($request->id);
            $detail = new Detail;
            $detail->quantity = 1;
            $detail->product_id = $request->id;
            $detail->save();
        }
        return redirect()->route('details', $detail->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::find($id);
        $data['product'] = $product;
        return view('details.detail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DetailRequest $request, $id)
    {
        //Need to validate using the request, done
        $detail = Detail::find($id);
        $detail->quantity = $request->get('quantity');
        $detail->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $detail = Detail::find($id);
        $detail->delete();
        return redirect()->route('products.index');
    }
}
