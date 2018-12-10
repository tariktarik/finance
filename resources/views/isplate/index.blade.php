@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Isplate - <a href="nova/isplata">(dodaj novu)</a>
                 <span class="pull-right">Ukupno isplate: <b style="font-size:1.2em" class="btn btn-danger btn-xs">{{ $isplate->sum('iznos') }}</b></span>
                    <span class="pull-right">Ukupno transakcija: <b style="font-size:1.2em" class="btn btn-danger btn-xs">{{ $isplate->count('iznos') }}</b></span>
                Prosjek: {{ $isplate->sum('iznos')/$isplate->count('iznos') }}KM
                </div>
                </br>
                <div class="span12" style="text-align: center">
                <span><a href="isplate/1">#gorivo</a></span>
                <span><a href="isplate/2">#naposlu</a></span>
                <span><a href="isplate/3">#fastfood</a></span>
                <span><a href="isplate/4">#nargila</a></span>
                <span><a href="isplate/5">#auto</a></span>
                <span><a href="isplate/6">#odjeca</a></span>
                <span><a href="isplate/7">#kafana</a></span>
                <span><a href="isplate/8">#opcenito</a></span>
                <span><a href="isplate/9">#banka</a></span>
                <span><a href="isplate/10">#dodatno</a></span>
                </div>
                <div class="panel-body">
                     <table class="table">
                     Zadnjih 20 isplata
                     <tr>
                    @foreach ( $isplate as $isplata )

                    <td>{{ $isplata->opis }}</td>
                    <td> <b>{{ $isplata->iznos }}</b> KM </td>
                    <td> {{ $isplata->created_at->toDayDateTimeString()}} </td>
                    <td> {{ $isplata->created_at->diffForHumans()}} </td>
                    
                     </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
