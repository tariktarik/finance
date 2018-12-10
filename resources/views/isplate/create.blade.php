@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dodaj novu isplatu:</div>

                <div class="panel-body">
                <form method="post" action="/isplate">
                 {{ csrf_field() }}
                 <div class="form-group">
                <label for="opis">Potrosio</label>

                <select name="potrosio" class="form-control">

                <option value="1">Gorivo</option>
                <option value="2">Na Poslu</option>
                <option value="3">Fast Food</option>
                <option value="4">Nargila</option>
                <option value="5">Auto</option>
                <option value="6">Odjeca</option>
                <option value="7">Kafana</option>
                <option value="8">Opcenito</option>
                <option value="9">Banka</option>
                <option value="10">Dodatno</option>

                </select>
             
    
                </div>
                <div class="form-group">
                <label for="opis">Opis</label>
                <input type="text" class="form-control" id="opis" name="opis" required>
                </div>

                <div class="form-group">
                <label for="opis">Iznos</label>
                <input type="number" class="form-control" id="iznos" name="iznos" max="0" step="0.01"required>
                </div>
                    <button type="submit" class="btn btn-primary">Dodaj novu isplatu</button>
                </form>
               

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
