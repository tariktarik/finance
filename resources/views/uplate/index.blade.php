@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                Uplate - <a href="nova/uplata">(dodaj novu)</a>
                <span class="pull-right">Ukupno uplate: 
                <b style="font-size:1.2em" class="btn btn-success  btn-xs">{{ $uplate->sum('iznos') }}</b></span>
                <span class="pull-right">Ukupno transakcija: 
                <b style="font-size:1.2em" class="btn btn-success  btn-xs" >{{ $uplate->count('iznos') }}</b></span>
                </div>
                </br>
                <div class="span12" style="text-align: center">
                <span><a href="uplate/1">#saplast</a></span>
                <span><a href="uplate/2">#dodatno</a></span>
                </div>
               
                <div class="panel-body">
                     <table class="table">

                     <tr>
                    @foreach ( $uplate as $uplata )

                    <td>{{ $uplata->opis }}</td>
                    <td> <b>{{ $uplata->iznos }}</b> KM </td>
                    <td> {{ $uplata->created_at->toDayDateTimeString()}} </td>
                    <td> {{ $uplata->created_at->diffForHumans()}} </td>
                    
                     </tr>
                    @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
