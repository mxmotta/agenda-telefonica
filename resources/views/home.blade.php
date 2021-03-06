@extends('templates.sidebar')


@section('sidebar')

<ul class="list-group">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>

@endsection

@section('content')

<div class="container-left">
  @include('layouts.partials._searchbar')

  <div id="test-card" class="card">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. <i class="fas fa-address-book"></i></p>
    </div>
  </div>
</div>

@endsection