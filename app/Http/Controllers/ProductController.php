<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{	
	//su dung nen product.php k dung static
	/*public $product;

	public function __construct(){
		$this->product = new Product;
	}*/


    public function index(){
    	$products = Product::getALL();
    	return view('products.index',['products'=>$products]);
    }
    /*public function show($id){
    	return Product::find($id);
    }*/
    public function show($id){
        $product = Product::find($id);
        return view('products.show',['product'=>$product]);
    }
    public function create(){
        return view('products.create');
     }
     public function store(CreateProductRequest $request){
        $data= $request->all();
        $product = new Product;
        $product->name=$data['name'];
        $product->price=$data['price'];
        $product->save();
        return redirect('products')->with('flag','Thêm Mới Thành Công !');
     }
        public function destroy($id){
            Product::find($id)->delete();
            return redirect('products')->with('flag','Xóa Thành Công !');
       }
       public function edit($id){
            $product = Product::find($id);
            return view('products.edit',['product'=>$product]);
       }
       public function update(Request $request,$id){
            $product = Product::find($id);
            $data = $request->all();
            $product->update($data);
            return redirect('products')->with('flag','Câp nhật thành công !');
       }
}
