<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

//use App\Http\Product;

use App\Product;

use App\Cart;

use Auth;

use App\Order;

use App\Seller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $product = Product::findOrFail();

        return view ('products.index',['product'=>$products]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view ('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Product::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$product = Product::findOrFail($id);

        if($product == null){
            return View('errors.404');
        }

        else{
            return View('products.show',['product'=>$product]);
        }*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         /* $product = Product::findOrFail($id);

        if($product == null){
            return View('errors.404');
        }

        else{
            return View('products.edit',['product'=>$product]);
        }*/
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
       /* $product= Product::findOrFail();

        $product-> update($request->all());

        return redirect('/products')*/
;    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*Product::destroy($id);

        return redirect('/products');*/
    }







    public function getIndex()
    {
        $products = Seller::all();

        $sellers = new Seller;

        return view('shop.index',['products' => $products, 'sellers'=>$sellers]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        //return redirect('/');//->route('product.index');
        return back();
    }


    public function getReduceByOne($id)
    {
        $product = Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        
        $cart->reduceByOne($id);

        if(count($cart->items)>0){
            Session::put('cart', $cart);
        } 
        else
        {
            Session::forget('cart');
        }

        
        return redirect()->route('product.shoppingCart');
    }

    public function getIncreaseByOne($id)
    {
        $product = Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        
        $cart->increaseByOne($id);
        Session::put('cart', $cart);
        return redirect()->route('product.shoppingCart');

    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items)>0){
            Session::put('cart', $cart);
        } 
        else
        {
            Session::forget('cart');
        }

        
        return redirect()->route('product.shoppingCart');
    }


    public function getCart()
    {
        if(!Session::has('cart')){ return view('shop.shopping-cart');}

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);


        return view('shop.shopping-cart', 
            ['products'=> $cart->items, 'totalPrice' => $cart->totalPrice] );
    }

    // public function getCheckout()
    // {
    //     if(!Session::has('cart')){ return view('shop.shopping-cart');}

    //     $oldCart = Session::get('cart');
    //     $cart = new Cart($oldCart);
    //     $total = $cart->totalPrice;      
    //     return view('shop.checkout', ['total'=> $total]);
    
    // }


    public function postCheckout(Request $request)
    {
        
        if(!Session::has('cart')){ return redirect()->route('shop.shoppingCart');}

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $total = $cart->totalPrice; 
         //return view('shop.checkout', ['total'=> $total]);


         $order = new Order();
    
         $order->cart = serialize($cart);
         $order->name = Auth::user()->name;
         $order->user_id = Auth::user()->id;
         $order->seller = 0;
         
         

          Auth::user()->orders()->save($order);

          

         Session::forget('cart');
         return redirect()->route('product.index')->with('success','Successfully Purchased !!!');
     
    }




     public function displayProducts($id) {


        $sellers = Seller::where('id', '=', $id)->get();

        $products = Product::where('sellers','=', $id)->get();




        $q = Seller::find($id);

        $name = $q->name;


        return view('shop.seller-product', compact('products', 'sellers','name'));
    }


}
