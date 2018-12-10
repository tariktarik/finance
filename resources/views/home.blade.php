@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pregled Finansija</div>

                <div class="panel-body">
                   Dobrodosao: {{ Auth::user()->name}}
                </div>
                 
                 
                 <div class="panel-body">
                   
                   Ocekivano : {{$ocekusteda}} </br>
                   Uplate: {{$ukuplate}} KM  </br>
                   Isplate: {{$ukisplate}} KM  </br>       
                   Stanje: {{$stanje}} KM     

                 </div>

            </div>
        </div>
    </div>
</div>
@endsection
