@extends('layouts.layout') 

@section('homeContent')   

<div>
<?php
    //  @extends('layouts.layout')  eto yung pinaka standard format ng webpage mo 
    //         Dito naka lagay yung footer, nav, etc.
    //         Lahat ng paulit ulit lang sa page.
    //         --->
    // @section('homeContent') -  eto yung yung variable na gagamitin mo para icall sya dun
    //         sa loob layout. check mo yung views/layout/layout.blade.php
                
    //         wag kalimutan ang @endsection sa dulo nitong file.
    //         check  
                
                ?>
    <div class="row">
        <h3 class="text-center mx-auto page-title"> 
            <span class="custom-font-red">Puzzle</span>
            <span class="custom-font-green"> Pizza </span>
            <span class="custom-font-yellow"> Shop </span>
        </h3>
            
    </div>
    <!--- product display --->
    <div class="container shad" style="margin-bottom:2%; background-color:white">
        <div class="row">
            <h3 class="mx-auto mt-4 mb-4 menu-container-title"> OUR MENU</h3>
            
        </div> 
        <hr>
        <div class="row">
            <ul class="nav nav-pills mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#pizza">Pizza</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#drinks">Drinks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#desert">Dessert</a>
                </li>
            </ul>
        </div>
        <div class="row">  
            <div class="tab-content">
                <div id="pizza" class="tab-pane fade-in-active active pizza">
                    <!--- 
                    yung menu items dito ay yung galing dun sa data ng pinasok ng function natin na 
                    loadMenu() na nakalagay sa ppcontroller.php.

                    kinonekta ng router natin itong view na to (menu.blade.php) sa router natin
                    na web.php.

                    buksan mo yung mga file.
                    --->
                    @for($i = 0; $i < count($menuItems); $i++)
                        @if($menuItems[$i]->itemCategory =="Pizza") 
                            <div class="col-md-4 pd-4 mb-2">
                                <div class="card">
                                    <img class ="card-img-top item-src" src="{{$menuItems[$i]->itemSrc}}" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title item-name">{{$menuItems[$i]->itemName}}</h4>
                                        <h5 class="card-title item-price" style="color:#1e7500">Php. {{$menuItems[$i]->itemPrice}}</h5>
                                        <p class="card-text">{{$menuItems[$i]->itemDescription}}</p>
                                        <div class="text-center">
                                            <a  class="btn btn-outline-primary view-button" href="/menu/{{$menuItems[$i]->itemID}}"> VIEW</a>
                                            <button type="button" class="btn btn-primary add-to-cart" >ADD TO CART</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        @endif
                    @endfor
                </div>
                <div id="drinks" class="tab-pane fade-in-active drinks">
                    @for($i = 0; $i < count($menuItems); $i++)
                        @if($menuItems[$i]->itemCategory =="Drinks") 
                            <div class="col-md-4 pd-4 mb-2">
                                <div class="card">
                                    <img class ="card-img-top item-src" src="{{$menuItems[$i]->itemSrc}}" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title item-name">{{$menuItems[$i]->itemName}}</h4>
                                        <h5 class="card-title item-price" style="color:#1e7500">Php. {{$menuItems[$i]->itemPrice}}</h5>
                                        <p class="card-text">{{$menuItems[$i]->itemDescription}}</p>
                                        <div class="text-center">
                                            <a  class="btn btn-outline-primary view-button" href="/menu/{{$menuItems[$i]->itemID}}"> VIEW</a>
                                            <button type="button" class="btn btn-primary add-to-cart" >ADD TO CART</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        @endif
                    @endfor
                </div>
                <div id="desert" class="tab-pane fade-in-active ">
                    <br>
                    <div class="text-center ">
                      <p class="">no items </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

