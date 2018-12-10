@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dodaj novu uplatu:</div>

                <div class="panel-body">
                <form method="post" action="/uplate">
                 {{ csrf_field() }}

                 <div class="form-group">
                <label for="opis">Uplatio</label>

                <select name="uplatio" class="form-control">

                <option value="1">Saplast</option>
                <option value="2">Dodatno</option>

                </select>
             
    
                </div>

                <div class="form-group">
                <label for="opis">Opis</label>
                <input type="text" class="form-control" id="opis" name="opis" required=>
                </div>

                <div class="form-group">
                <label for="opis">Iznos</label>
                <input type="number" class="form-control" id="iznos" name="iznos" required>
                </div>

                <button type="submit" class="btn btn-primary">Dodaj novu uplatu</button>
                </form>
               

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
