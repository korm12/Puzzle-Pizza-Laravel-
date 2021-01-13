@extends('layouts.layout')

@section('homeContent')

<div>
    <div class="row">
        <h3 class="text-center mx-auto page-title"> 
            <span class="custom-font-red">Puzzle</span>
            <span class="custom-font-green"> Pizza </span>
            <span class="custom-font-yellow"> Shop </span>
        </h3>
            
    </div>
    <!--- product display --->
    <div class="container shad" style="margin-bottom:2%; background-color:white">
        {{$id}}
    </div>
</div>
@endsection

