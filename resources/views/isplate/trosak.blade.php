@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">  



        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                <div class="panel-heading">

                 <span> Vrsta troska: </span> 

                 <span class="pull-right">Ukupno isplate: <b style="font-size:1.2em" class="btn btn-danger btn-xs">{{ $isplate->sum('iznos') }}</b></span>
                    <span class="pull-right">Ukupno transakcija: <b style="font-size:1.2em" class="btn btn-danger btn-xs">{{ $isplate->count('iznos') }}</b></span>

                </div>
                </br>
                <div class="span12" style="text-align: center">
                <span><a href="../isplate">#sve</a></span>
                <span><a href="1">#gorivo</a></span>
                <span><a href="2">#naposlu</a></span>
                <span><a href="3">#fastfood</a></span>
                <span><a href="4">#nargila</a></span>
                <span><a href="5">#auto</a></span>
                <span><a href="6">#odjeca</a></span>
                <span><a href="7">#kafana</a></span>
                <span><a href="8">#opcenito</a></span>
                <span><a href="9">#banka</a></span>
                </div>
                <div class="panel-body">
                     <table class="table">
                    @if (count($isplate))

                    @foreach ( $isplate as $isplata )

                    <tr>                
                    <td>{{ $isplata->opis }}</td>
                    <td> <b>{{ $isplata->iznos }}</b> KM </td>
                    <td> {{ $isplata->created_at->toDayDateTimeString()}} </td>
                    <td> {{ $isplata->created_at->diffForHumans()}} </td>
                    </tr>

                    @endforeach

                    @else
                    <div class="span12" style="text-align: center">
                    <h2 class="alert alert-warning"> Jupii - nisi marke potrošio :D </h2>
                    @endif
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
