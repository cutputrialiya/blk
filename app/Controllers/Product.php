<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index()
    {
        return view('product_page');
    }

    public function display()
    {
        return view('product/product_display');
    }

    public function page()
    {
        echo view('header');
        echo view('content');
        echo view('footer');
    }

    public function catalog()
    {
        $data = [
            'title' => 'Product Catalog',
            'brand' => 'Smartphone Samsung',
            'product' => ['Samsung Galaxy', 'Samsung Galaxy Pro']
        ];
        return view('product_catalog', $data);
    }
}