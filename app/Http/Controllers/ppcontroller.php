<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item_details; // ito yung kailangan gawin pag kailangan mong i import yung models mo.
class ppcontroller extends Controller
{
    public function index(){
        return view('main.welcome');
    }
    public function loadMenu(){

        $menuItems = item_details::all();  // lahat ng data 
        // $menuItems = item_details::orderBy('itemID', 'desc')->get();    //eto yung select all tapos may order by sa dulo  
        // $menuItems = item_details::where('itemCategory', 'Drinks')->get();    // eto yung my where clause
        // $menuItems = item_details::latest()->get();          // eto yung latest data
       
       
       
       
        /*
            Yung item details na yan sa taas makikita siya sa loob ng Models/item_details.
            Dyan galing yung mga data na nakikita natin sa menu na view.

            yung all() ay ibig sabihin lahat ng laman ng item_details natin ay ipapasa nya sa 
            $menuItems na variable.

            etong function na to yung nag papasa ng data sa view natin 

            pinapasa nya as menuItems yung laman ng variable natin na $menuItems
        */
        return view('main.menu', ['menuItems' => $menuItems]);
    }
    public function viewItemDetails($id){
        return view('main.details',['id' => $id]);
    }

    public function loadCart(){
        $cartItems = [
            ['itemName' => 'Choco frappe',
             'itemPrice' => 100,
             'itemQty' => 1,
             'itemSrc' => 'pictures/products/Choco-frappe.jpg'
        ],
             ['itemName' => 'Pepperoni Pizza',
             'itemPrice' => 350,
             'itemQty' => 1,
             'itemSrc' => 'pictures/products/pepperoni.jpg'
             ]

        ];

        return view('main.cart', ['cartItems' => $cartItems]);
    }
}
