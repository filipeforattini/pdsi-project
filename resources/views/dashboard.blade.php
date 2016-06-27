@extends('layouts.app')

@section('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="min-height: 300px">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <?php $first=true; ?>
    @foreach($establishments as $establisment)
      <div class="item @if($first) active @endif " style="background: url({{ $establisment->image_cover }}); min-height: 300px">
        <div class="carousel-caption">
          <h1><a href="/establishments/{{ $establisment->id }}">{{ $establisment->name }}</a></h1>
        </div>
      </div>
      <?php $first=false; ?>
    @endforeach
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container" style="visibility: hidden">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <span class="pull-right" style="margin-top: 20px; margin-right: 20px; ">
                    <a href="/pinpads/create">
                        <button class="btn"><i class="fa fa-plus"></i> Pinpad</button>    
                    </a>
                </span>
                <div class="panel-heading" style="min-height: 55px;">
                    <h2>Dashboard</h2>
                </div>
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
