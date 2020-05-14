<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Customer;

class FrontController extends Controller
{
    public function index(){
    	//membuat query untuk mengambil data produk yang berdasarkan tanggal terbaru
    	//dan di load 10 per page nya
    	$products = Product::orderBy('created_at', 'DESC')->paginate(10);
    	//load view index.blade.ph dan passing dari variable products
    	return view('ecommerce.index', compact('products'));
    }

     public function tentang(){
        //membuat query untuk mengambil data produk yang berdasarkan tanggal terbaru
        //dan di load 10 per page nya
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);
        //load view index.blade.ph dan passing dari variable products
        return view('ecommerce.tentang', compact('products'));
    }

    public function product(){
    	$products = Product::orderBy('created_at', 'DESC')->paginate(12);


    	//load view product.blade.php dan passing kedua data di atas
    	return view ('ecommerce.product', compact('products'));
    }
     public function categoryProduct($slug)
    {
       //cari kategori berdasarkan slug
        $products = Category::where('slug', $slug)->first()->product()->orderBy('created_at', 'DESC')->paginate(12);
        //load view product.blade.php
        return view('ecommerce.product', compact('products'));
    }
    public function show($slug)
    {
        //mengambil single data berdasarkan slug
        $product = Product::with(['category'])->where('slug', $slug)->first();
        //load view dan passing data product
        return view('ecommerce.show', compact('product'));
    }
    public function verifyCustomerRegistration($token)
{
    //JADI KITA BUAT QUERY UNTUK MENGMABIL DATA USER BERDASARKAN TOKEN YANG DITERIMA
    $customer = Customer::where('activate_token', $token)->first();
    if ($customer) {
        //JIKA ADA MAKA DATANYA DIUPDATE DENGNA MENGOSONGKAN TOKENNYA DAN STATUSNYA JADI AKTIF
        $customer->update([
            'activate_token' => null,
            'status' => 1
        ]);
        //REDIRECT KE HALAMAN LOGIN DENGAN MENGIRIMKAN FLASH SESSION SUCCESS
        return redirect(route('customer.login'))->with(['success' => 'Verifikasi Berhasil, Silahkan Login']);
    }
    //JIKA TIDAK ADA, MAKA REDIRECT KE HALAMAN LOGIN
    //DENGAN MENGIRIMKAN FLASH SESSION ERROR
    return redirect(route('customer.login'))->with(['error' => 'Invalid Verifikasi Token']);
}
}
