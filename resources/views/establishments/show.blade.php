@extends('layouts.app')

@section('content')
<div class="jumbotron" style=" background: url('{{ $establishment->image_cover }}') no-repeat center center;
  position: fixed;
  width: 100%;
  height: 350px; /*same height as jumbotron */
  top:0;
  left:0;
  z-index: -1;">
	<div class="container">
    <br><br><br><br><br><br><br><br><br>
		<h1>{{ $establishment->name }}</h1>
	</div>
</div>

<span class="pull-right" style="margin-top: 20px; margin-right: 20px; ">
    <a href="/pinpads/create">
        <button class="btn"><i class="fa fa-plus"></i> Pinpad</button>    
    </a>
</span>

@endsection

@section('js')
$('#myModal').modal('toggle');
@endsection