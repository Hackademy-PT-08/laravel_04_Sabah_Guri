<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products=[
        ['id'=>"1",'name'=>"Iphone 14 Pro Max",'year'=>2023,'price'=>"1200€"],
        ['id'=>"2",'name'=>"NoteBook lenovo",'year'=>2022,'price'=>"800€"],
        ['id'=>"3",'name'=>"AirPods Pro",'year'=>2023,'price'=>"300€"],
        ['id'=>"4",'name'=>"Samsung S22",'year'=>2022,'price'=>"900€"],
        ['id'=>"5",'name'=>"caricatore Iphone",'year'=>2023,'price'=>"50€"],
        ['id'=>"6",'name'=>"MacBook Pro",'year'=>2023,'price'=>"2500€"],
        ['id'=>"7",'name'=>"Tastiera Wireless",'year'=>2020,'price'=>"55€"],
        ['id'=>"8",'name'=>"Monitor 4K ",'year'=>2021,'price'=>"300€"],
        ['id'=>"9",'name'=>"Apple Watch",'year'=>2018,'price'=>"350€"],
        ['id'=>"10",'name'=>"Computer Desktop",'year'=>2021,'price'=>"1200€"],

    ];

    public function index(){
            return view('all-products',['products'=>$this->products]);
    }

    public function show($id){
        foreach($this->products as $product){
            if($id==$product['id']){
                return view('product-detail',['product'=>$product]);
            }
        }
    }
}
