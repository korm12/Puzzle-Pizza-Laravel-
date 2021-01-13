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
    <div class="container shad" style="margin-bottom:2%; margin-top:8%; min-height:600px; background-color:white">
        <div class="row">
            <h3 class="mx-auto mt-4 mb-2 menu-container-title"> YOUR CART</h3>
        </div> 
        <hr>
        <div class="cart-items ">
                
        </div>
        <div class="row total-price-row ">
            <h4 class="total-price-wrap align-baseline"> Total : <span class="total-price">0</span> </h4>
        </div> 
        <div class="row total-price-row ">
            <button type="" class="purchase-btn btn btn-success total-price-wrap align-baseline mb-2">PURCHASE</button>
        </div> 
    </div>
</div>

@endsection