@extends('layouts.app')

@section('content')
@if(count($posts) >0)
@foreach ($posts as $skelbimas)
  <div class="container main-section border">
      <div class="row">
        <div class="col-lg-12 col-sm-12 col-12">
          <div class="row">
            <div class="col-lg-2 col-sm-2 col-5">
              <img src="https://dummyimage.com/150x150/5a5a5a/ffffff" class="img-thumbnail" width="150px">
            </div>
            <div class="col-lg-10 col-sm-10 col-7">
              <h4 class="text-primary">{{$skelbimas->pavadinimas}}</h4>
              <p>
                {{$skelbimas->tekstas}}
              </p>  
              <a class="nav-link" href="posts/{{$skelbimas->skelbimoNr}}">Peržiūrėti</a>
              <a class="nav-link" href="awards">Apdovanoti</a>
            </div>
          </div>
          <div class="row post-detail">
            <div class="col-lg-12 col-sm-12 col-12">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <img src="https://dummyimage.com/20x20/a8a1a8/0f0f12" class="rounded-circle" width="20px"> <span>by</span> <span class="text-info">Lisa</span>
                  </li>
                  <li class="list-inline-item">
                    <i class="fa fa-calendar" aria-hidden="true"></i> <span>{{$skelbimas->sukurimo_data}}</span>
                  </li>
                  <li class="list-inline-item">
                    <i class="fa fa-comment" aria-hidden="true"></i> <span class="text-info">3 Comments</span>
                  </li>
                  <li class="list-inline-item">
                    <i class="fa fa-share-square-o" aria-hidden="true"></i> <span class="text-info">39 Shares</span>
                  </li>
                  <li class="list-inline-item">
                    <i class="fa fa-tags" aria-hidden="true"></i>
                    <span>Tags:</span>
                    <span class="badge badge-dark">bootstrap 4.0</span>
                    <span class="badge badge-dark">laravel</span>
                    <span class="badge badge-dark">html</span>
                    <span class="badge badge-dark">css</span>
                  </li>
                </ul>
            </div>
          </div>
        </div>
    </div>
    @endforeach
    @endif
</main>

@endsection
