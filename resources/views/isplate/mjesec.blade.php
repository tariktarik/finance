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
                <span><a href="1">#jan</a></span>
                <span><a href="2">#feb</a></span>
                <span><a href="3">#mar</a></span>
                <span><a href="4">#apr</a></span>
                <span><a href="5">#maj</a></span>
                <span><a href="6">#jun</a></span>
                <span><a href="7">#jul</a></span>
                <span><a href="8">#aug</a></span>
                <span><a href="9">#sep</a></span>
                <span><a href="10">#okt</a></span>
                <span><a href="11">#nov</a></span>
                <span><a href="12">#dec</a></span>
                </div>
                <div class="panel-body">
                     <table class="table">
                   
                    @if (count($result))

                    @foreach ( $result as $isplata )

                    <tr>                
                    <td>{{ $isplata->opis }}</td>
                    <td> <b>{{ $isplata->iznos }}</b> KM </td>
                    <td> {{ $isplata->created_at->toDayDateTimeString()}} </td>
                    <td> {{ $isplata->created_at->diffForHumans()}} </td>
                    </tr>

                    @endforeach

                    @else
                    <div class="span12" style="text-align: center">
                    <h2 class="alert alert-success"> Jupii - nisi marke potrošio :D </h2>
                    @endif
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
