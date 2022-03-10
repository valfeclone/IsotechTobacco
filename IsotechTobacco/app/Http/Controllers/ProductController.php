<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Banner;

class ProductController extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProductPublish(Request $req)
    {
        $product = $req->only('title', 'description', 'category', 'SKU', 'stock', 'regular_price', 'promo_price', 
        'tax_rate', 'width', 'height', 'weight', 'product_image');
        
        // dd($product);

        $newProduct = Product::create([
            'title' => $product['title'],
            'description' => $product['description'],
            'category' => $product['category'],
            'filter' => "Terbaru",
            'SKU' => $product['SKU'],
            'stock' => $product['stock'],
            'regular_price' => $product['regular_price'],
            'promo_price' => $product['promo_price'],
            'tax_rate' => $product['tax_rate'],
            'width' => $product['width'],
            'height' => $product['height'],
            'weight' => $product['weight'],
        ]);
        $newProduct->save();

        if($product['product_image']){
            $file = $req->file('product_image');
            $path = storage_path('app/public/products');
            $file->move($path, str_replace(' ', '', $file->getClientOriginalName()));
            
            $newProduct->product_image_path = str_replace(' ', '', $file->getClientOriginalName());
            $newProduct->published = 1;
            $newProduct->save();
        }
        return redirect('admin/view-product');
    }

    public function createProductDraft(Request $req)
    {
        $product = $req->only('title', 'description', 'category', 'SKU', 'stock', 'regular_price', 'promo_price', 
        'tax_rate', 'width', 'height', 'weight', 'product_image');
        
        // dd($product);D

        $newProduct = Product::create([
            'title' => $product['title'],
            'description' => $product['description'],
            'category' => $product['category'],
            'filter' => "Terbaru",
            'SKU' => $product['SKU'],
            'stock' => $product['stock'],
            'regular_price' => $product['regular_price'],
            'promo_price' => $product['promo_price'],
            'tax_rate' => $product['tax_rate'],
            'width' => $product['width'],
            'height' => $product['height'],
            'weight' => $product['weight'],
        ]);
        $newProduct->save();

        if($product['product_image']){
            $file = $req->file('product_image');
            $path = storage_path('app/public/products');
            $file->move($path, str_replace(' ', '', $file->getClientOriginalName()));
            
            $newProduct->product_image_path = str_replace(' ', '', $file->getClientOriginalName());
            $newProduct->published = 0;
            $newProduct->save();
        }
        return redirect('admin/view-product');
    }

    public function viewProduct()
    {
        $select = Product::all();
        return view ('adminnew/product-lists')->with('items',$select);
    }

    public function viewProductbyID($id)
    {
        $select = Product::findOrFail($id);
        return view ('product/viewProductbyID')->with('items',$select);
    }

    public function viewEditProduct($id)
    {
        $select = Product::findOrFail($id);
        return view ('adminnew/edit-product')->with('product',$select);
    }

    public function updateProduct(Request $req)
    {
        // dd($req);
        $id = $req['productID'];
        
        $product = Product::find($id);
        if($product){
            $product['title'] = $req['title'];
            $product['description'] = $req['description'];
            $product['category'] = $req['category'];
            if($req['filter']){
                $product['filter'] = $req['filter'];
            }
            $product['SKU'] = $req['SKU'];
            $product['stock'] = $req['stock'];
            $product['regular_price'] = $req['regular_price'];
            $product['promo_price'] = $req['promo_price'];
            $product['tax_rate'] = $req['tax_rate'];
            $product['width'] = $req['width'];
            $product['height'] = $req['height'];
            $product['weight'] = $req['weight'];
            $product['published'] = $req['published'];
        }
        $product->save();

        if($req['product_image']){
            $file = $req->file('product_image');
            $path = storage_path('app/public/products');
            $file->move($path, str_replace(' ', '', $file->getClientOriginalName()));
            
            $product->product_image_path = str_replace(' ', '', $file->getClientOriginalName());
            $product->save();
        }
        return redirect()->route('viewproduct');
    }

    public function deleteProduct($id)
    {
        // dd($req);
        $res = Product::find($id)->delete();
        return redirect('admin/view-product');
    }

    public function usrviewProduct(Request $req)
    {
        $select = Product::where('published', 1)->get();
        // dd($select);
        return view ('user/viewproduct')->with('items',$select);
    }

    public function usrviewProductbyID($id)
    {
        $select = Product::findOrFail($id);
        if($select){
            $select['seen_time']+=1;
            $select->save();
        }
        return view ('user/viewProductID')->with('items',$select);
    }

    // TESTING

    public function testviewProduct(Request $req)
    {
        $product = Product::where('published', 1)->get();
        $populer = Product::where('published', 1)->where('filter', 'Populer')->get();
        $terbaru = Product::where('published', 1)->where('filter', 'Terbaru')->get();
        $featured = Product::where('published', 1)->where('filter', 'Featured')->get();
        $banner = Banner::where('status_tampil',1)->get();
        return view ('usernew/index')->with('items', [
            'product' => $product,
            'banner' => $banner
        ]);
    }

    public function testviewProductbyID($id)
    {
        $select = Product::findOrFail($id);
        if($select){
            $select['seen_time']+=1;
            $select->save();
        }
        return view ('usernew/product-detail')->with('items',$select);
    }

    public function searchProduct(Request $request)
    {
        $search = $request->title;
        // dd($search);
        if($search == null){
            $select = Product::all();
            return view ('usernew/index')->with('items', $select);
            // return redirect('/index')->with('items', $select);
        }
        $select = Product::where('title', 'like', '%'.$search.'%')->get();
        // return redirect('/index')->with('items', $select);
        return view ('usernew/index')->with('items', $select);
    } 
    
    public function adminSearchProduct(Request $request)
    {
        $search = $request->title;
        if($search == null){
            $select = Product::all();
            return view ('adminnew/product-lists')->with('items', $select);
        }
        $select = Product::where('title', 'like', '%'.$search.'%')->get();
        return view ('adminnew/product-lists')->with('items', $select);
    }
}

