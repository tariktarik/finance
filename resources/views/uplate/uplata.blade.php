@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                Uplate - <a href="nova/uplata">(dodaj novu)</a>
                <span class="pull-right">Ukupno uplate:  <b style="font-size:1.2em" class="btn btn-success  btn-xs">{{ $uplate->sum('iznos') }}</b></span>
                <span class="pull-right">Ukupno transakcija: 
                <b style="font-size:1.2em" class="btn btn-success  btn-xs" >{{ $uplate->count('iznos') }}</b></span>
                </div>
                </br>
                <div class="span12" style="text-align: center">
                <span><a href="../uplate">#sve</a></span>
                <span><a href="1">#saplast</a></span>
                <span><a href="2">#dodatno</a></span>
                </div>

           

                <div class="panel-body">
                     <table class="table">
                    
                    @if (count($uplate))

                    @foreach ( $uplate as $uplata )

                    <tr>                  
                    <td>{{ $uplata->opis }}</td>
                    <td> <b>{{ $uplata->iznos }}</b> KM </td>
                    <td> {{ $uplata->created_at }} </td>
                    <td> {{ $uplata->created_at->diffForHumans()}} </td>
                    </tr>

                    @endforeach

                    @else
                    <div class="span12" style="text-align: center">
                    <h2 class="alert alert-danger"> Whoops - Žao mi je nemaš uplata :S </h2> 

                    </div>
                    @endif

                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
