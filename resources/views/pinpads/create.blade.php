@extends('layouts.app')

@section('content')
<div class="row">
    <dir class="col-md-2"></dir>
    <dir class="col-md-4">
        <h2>Novo Pinpad</h2>
        <hr>
        <form role="form" id="cadastro" action="/pinpads" method="post">
            <p>Vamos fazer o cadastro do seu primeiro Pinpad!</p>
            {{ csrf_field() }}

            <hr>

            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="address_neighbourhood">Estabelecimento</label>
                    <select class="form-control" name="establishment_id">
                        @foreach(Auth::user()->establishments as $establishment)
                            <option value="{{ $establishment->id }}">{{ $establishment->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <hr>

            <div class="form-group">
                <label for="name">Código</label>
                <?php $serial = time(); ?>
                <div style="font-size: 20px; background-color: #e8e8e8"><center><br>{{ $serial }}<br><br></center></div>
                <input type="hidden" name="serial" value="{{ $serial }}">
            </div>

            <hr>

            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="address_neighbourhood">Crédito</label>
                    <input class="form-control" type="text" id="address_neighbourhood" name="credit" value="3.4">
                </div>
                <div class="col-md-4 form-group">
                    <label for="address_street">Débito</label>
                    <input class="form-control" type="text" id="address_street" name="debit" value="2.9">
                </div>
                <div class="col-md-4 form-group">
                    <label for="address_number">Repasse</label>
                    <input class="form-control" type="text" id="address_number" name="pass" value="2.0">
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Requerir pinpad">
        </form>        
    </dir>
    <dir>
        <br><br>
        <img src="http://cashregistersite.com/images/PAX_SP30.gif">
    </dir>
</div>
@endsection
