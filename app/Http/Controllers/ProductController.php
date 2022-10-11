<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $categories = Category::get();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create(['name' => $request->name, 'price' => $request->price, 'quantity' => $request->quantity, 'category_id' => $request->category_id,'rating'=> $request->rating]);
        $product
            ->addMediaFromRequest('image')
            ->toMediaCollection();
            return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        return view('products.show',compact('product'));
        //
    }
    // public function searchshow($id)
    // {
    //     $product=Product::find($id);
    //     return view('searchresult',compact('product'));
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $categories=Category::get();
        $product=Product::find($id);
        return view('products.update',compact('product','categories'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Product::find($id)->update($request->all());
        return redirect()->route('product.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('product.index');
        //
    }
    public function search(Request $request)
    {
        if ($request->ajax())
        {
            $output='';
            $products=Product::where('name','LIKE','%'.$request->search.'%')
                            ->get();

            if($products){
                foreach($products as $product){
                    $output.=
                    '<form action="'.route('search.show',$product->id).'">
                        <table class="table border-1">
                            <tbody>
                                    <tr>
                                        <td><img src=" '.$product->getFirstMediaUrl().' " alt="" class="img-fluid" height="75" width="75"></td>
                                        <td class="col-5">'.$product->name.' </td>
                                        <td>$'.$product->price.' </td>
                                        <td class="col-1">'.$product->category->type.' </td>
                                        <td class="col-1"><button type="submit" class="btn btn-primary">show</button></td>
                                    </tr>
                            </tbody>
                        </table>
                    </form>
                ';
                }
                return response()->json($output);
            }
        }
        return view('index');
    }
}
