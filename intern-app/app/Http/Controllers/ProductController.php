<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Data dummy untuk testing
        $products = [
            [
                'id' => 1,
                'name' => 'Laptop ASUS ROG',
                'price' => 15000000,
                'stock' => 5,
                'created_at' => '2024-01-15 10:30:00'
            ],
            [
                'id' => 2,
                'name' => 'Smartphone Samsung S23',
                'price' => 12000000,
                'stock' => 15,
                'created_at' => '2024-01-16 14:20:00'
            ],
            [
                'id' => 3,
                'name' => 'Tablet iPad Pro',
                'price' => 8000000,
                'stock' => 0,
                'created_at' => '2024-01-17 09:15:00'
            ],
            [
                'id' => 4,
                'name' => 'Mouse Wireless Logitech',
                'price' => 350000,
                'stock' => 25,
                'created_at' => '2024-01-18 16:45:00'
            ],
            [
                'id' => 5,
                'name' => 'Keyboard Mechanical',
                'price' => 750000,
                'stock' => 8,
                'created_at' => '2024-01-19 11:00:00'
            ]
        ];

        return view('product.index', compact('products'));
    }
}