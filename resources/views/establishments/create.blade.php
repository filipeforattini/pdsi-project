@extends('layouts.app')

@section('content')
<a data-controls-modal="myModal" data-backdrop="static" data-keyboard="false" href="#">

<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
	<div class="modal-content">
	  <div class="modal-header">
		<h4 class="modal-title">Bem vindo!</h4>
	  </div>
	  <form role="form" id="cadastro" action="/establishments/create" method="post">
		<div class="modal-body">
			<p>Antes de começar precisamos de terminar o seu cadastro!</p>
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Nome</label>
					<input type="name" class="form-control" id="name" name="name">
					<p class="help-block">Digite o nome do seu estabelecimento</p>
				</div>

				<div class="row">
					<div class="col-md-4 form-group">
						<label for="address_neighbourhood">Bairro</label>
						<input class="form-control" type="text" id="address_neighbourhood" name="address_neighbourhood">
					</div>
					<div class="col-md-6 form-group">
						<label for="address_street">Logradouro</label>
						<input class="form-control" type="text" id="address_street" name="address_street">
					</div>
					<div class="col-md-2 form-group">
						<label for="address_number">Número</label>
						<input class="form-control" type="text" id="address_number" name="address_number">
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 form-group">
						<label for="address_zip">CEP</label>
						<input class="form-control" type="text" id="address_zip" name="address_zip">
					</div>
					<div class="col-md-5 form-group">
						<label for="address_city">Cidade</label>
						<input class="form-control" type="text" id="address_city" name="address_city">
					</div>
					<div class="col-md-3 form-group">
						<label for="address_state">Estado</label>
						<input class="form-control" type="text" id="address_state" name="address_state">
					</div>
				</div>

				<div class="row">
					<div class="col-md-3 form-group">
						<label for="contact_phone">Telefone</label>
						<input class="form-control" type="text" id="contact_phone" name="contact_phone">
					</div>
					<div class="col-md-9 form-group">
						<label for="ad">Imagem</label>
						<input type="text" id="as" class="form-control" name="image_cover">
					</div>
				</div>

				<div class="checkbox">
					<label>
						<input type="checkbox"> Marcando este eu aceito os termos de uso.
					</label>
				</div>
				<hr>
		  </div>
		  <div class="modal-footer">
			<input type="submit" class="btn btn-primary" value="Criar Estabelecimento">
		  </div>
		</form>
	</div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
@endsection

@section('js')
$('#myModal').modal('toggle');
@endsection