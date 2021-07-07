@extends('layouts.app')
@section('content')
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        body{
            background:#eee;
        }
        
        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #FFFFFF;
        }
        a {
            color: #82b440;
            text-decoration: none;
        }
        .blog-comment::before,
        .blog-comment::after,
        .blog-comment-form::before,
        .blog-comment-form::after{
            content: "";
            display: table;
            clear: both;
        }
        
        .blog-comment{
            padding-left: 15%;
            padding-right: 15%;
        }
        
        .blog-comment ul{
            list-style-type: none;
            padding: 0;
        }
        
        .blog-comment .post-comments{
            border: 1px solid #eee;
            margin-bottom: 20px;
            margin-left: 85px;
            margin-right: 0px;
            padding: 10px 20px;
            position: relative;
            -webkit-border-radius: 4px;
               -moz-border-radius: 4px;
                    -o-border-radius: 4px;
                    border-radius: 4px;
            background: #fff;
            color: #6b6e80;
            position: relative;
        }
        
        .blog-comment .meta {
            font-size: 13px;
            color: #aaaaaa;
            padding-bottom: 8px;
            margin-bottom: 10px !important;
            border-bottom: 1px solid #eee;
        }
        
        .blog-comment ul.comments ul{
            list-style-type: none;
            padding: 0;
            margin-left: 85px;
        }
        
        .blog-comment-form{
            padding-left: 15%;
            padding-right: 15%;
            padding-top: 40px;
        }
        
        .blog-comment h3,
        .blog-comment-form h3{
            margin-bottom: 40px;
            font-size: 26px;
            line-height: 30px;
            font-weight: 800;
        }
        
        body{
            margin-top:20px;
            background-color:#e9ebee;
        }
        
        .be-comment-block {
            margin-bottom: 50px !important;
            border: 1px solid #edeff2;
            border-radius: 2px;
            padding: 50px 70px;
            border:1px solid #ffffff;
        }
        
        .comments-title {
            font-size: 16px;
            color: #262626;
            margin-bottom: 15px;
            font-family: 'Conv_helveticaneuecyr-bold';
        }
        
        
        
        .be-ava-comment {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }
        
        .be-comment-content {
            margin-left: 80px;
        }
        
        .be-comment-content span {
            display: inline-block;
            width: 49%;
            margin-bottom: 15px;
        }
        
        .be-comment-name {
            font-size: 13px;
            font-family: 'Conv_helveticaneuecyr-bold';
        }
        
        .be-comment-content a {
            color: #383b43;
        }
        
        .be-comment-content span {
            display: inline-block;
            width: 49%;
            margin-bottom: 15px;
        }
        
        .be-comment-time {
            text-align: right;
        }
        
        .be-comment-time {
            font-size: 11px;
            color: #b4b7c1;
        }
        
        .be-comment-text {
            font-size: 13px;
            line-height: 18px;
            color: #7a8192;
            display: block;
            background: #f6f6f7;
            border: 1px solid #edeff2;
            padding: 15px 20px 20px 20px;
        }
        
        .form-group.fl_icon .icon {
            position: absolute;
            top: 1px;
            left: 16px;
            width: 48px;
            height: 48px;
            background: #f6f6f7;
            color: #b5b8c2;
            text-align: center;
            line-height: 50px;
            -webkit-border-top-left-radius: 2px;
            -webkit-border-bottom-left-radius: 2px;
            -moz-border-radius-topleft: 2px;
            -moz-border-radius-bottomleft: 2px;
            border-top-left-radius: 2px;
            border-bottom-left-radius: 2px;
        }
        
        .form-group .form-input {
            font-size: 13px;
            line-height: 50px;
            font-weight: 400;
            color: #b4b7c1;
            width: 100%;
            height: 50px;
            padding-left: 30px;
            padding-right: 20px;
            border: 1px solid #edeff2;
            border-radius: 3px;
        }
        
        .form-group.fl_icon .form-input {
            padding-left: 20px;
        }
        
        .form-group textarea.form-input {
            height: 150px;
        }
        
        .form-group.fl_wed{
            width: 305%;
        }
        
        .btn.btn-primary{
            width: 100%;
        }
        
        
        
        
        /* The popup form - hidden by default */
        .form-popup {
          display: none;
        
        
          border: 3px solid #f1f1f1;
          z-index: 9;
        }
        
                </style>
</head>    
@if(session('response'))
<div class="alert alert-success">{{session('response')}}</div>
@elseif(session('responsew'))
<div class="alert alert-danger">{{session('responsew')}}</div>
@endif
<div class="container">
          
          <div class="row">
              <div class="col-md-12">
                  <div class="blog-comment">
                      <h3 class="text-success">Komentarai</h3>
                      <ul class="comments">
                        @foreach ($komentarai as $komentaras)
                      <li class="clearfix">

                        <div class="post-comments">
                        <button class="float-right" data-toggle="modal"  data-target="#myModal"data-ivertsk=1 data-tekstas="{{$komentaras->tekstas}}" data-komentaronr="{{$komentaras->komentaroNr}}"><small>Redaguoti </small></button>
                          <p class="meta">{{$komentaras->created_at}} <a href="#">Jonas</a> parašė : <i class="pull-right"><a href="#" class="float-left"><small>Prisegti </small></a> <p> </p></p><a href="#"></i></p></p>
                            
                            <div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title float-left">Redagavimas</h4>
                                  </div>
                                <form action="{{route('posts.update','test')}}" method="post">
                                    {{method_field('patch')}}
                                    {{csrf_field()}}
                                  <div class="modal-body">
                                      <div class="form-group">
                                          <label for="tekstas">Komentaras:</label>
                                          <input type="hidden"  name="komentaroNr" id="komentaroNr" value="">
                                          <input type="hidden"  name="ivertinimu_skaicius" id="ivertinimu_skaicius" value="">
                                          <input type="hidden"  name="komentaroNr" id="komentaroNr" value="">
                                          <input type="text" class="form-control" id="tekstas" name="tekstas">
                                        </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="submit" class="btn btn-default text-succes">Pateikti</button>
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <script>

                                $('#myModal').on('show.bs.modal', function (event) {
                                  var button = $(event.relatedTarget) 
                                  var tekstas = button.data('tekstas') 
                                  var komentaroNr = button.data('komentaronr')
                                  var ivertinimu_skaicius = button.data('ivertsk')
 
                                  var modal = $(this)
                                  modal.find('.modal-body #tekstas').val(tekstas);
                                  modal.find('.modal-body #komentaroNr').val(komentaroNr);
                                  modal.find('.modal-body #ivertinimu_skaicius').val(ivertinimu_skaicius);
                                })
                                </script>
                            <div id="myModalRep" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title float-left">Skundimas</h4>
                                  </div>
                                 
                                  <div class="modal-body">
                                      <div class="form-group">
                                          <label for="usr">Priežastis:</label>
                                          <input type="text" class="form-control" id="usr">
                                        </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-default text-succes" data-dismiss="modal" onclick="myFun()">Pateikti</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                                  </div>
                               
                                </div>
                                
                              </div>
                            </div>
                     
                            <p data-target="whatever">
                               {{$komentaras->tekstas}}
                            </p>
                          
                            <p class="meta"><i class="pull-right"><input type="button" data-toggle="modal" data-target="#myModalRep" value="Paskųsti" class="text-danger"><input type="button" onclick="myFunction(<?php echo $post->skelbimoNr ?>)" value="Trinti" class="text-danger"></i></p>
                            <p >{{$komentaras->ivertinimu_skaicius}}&#9733; <a href="{{ url("/like/{$post->skelbimoNr}/{$komentaras->komentaroNr}") }}">Patinka</a></p>
                            <form id="delete" action="{{ route('posts.destroy',$komentaras->komentaroNr) }}" 
                              method="POST" style="display: none;">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                          </form>
                        </div>
                        @endforeach
  
                      </li>
                     
                      
                        <script>
                          function myFunction($var) {
                            var r = confirm("Ar tikrai norite panaikinti komentarą?");
                            if(r==true){
                              document.getElementById('delete').submit();
                            }
                          }
                          function myFun() {
                            confirm("Skundas sėkmingai pateiktas");
                          }
                          </script>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="be-comment">
              <script>
                  function openForm() {
                    document.getElementById("myForm").style.display = "block";
                    document.getElementById("asd").disabled = true;
                  }
                  
                  function closeForm() {
                    document.getElementById("myForm").style.display = "none";
                  }
                  </script>
                  <input type="button" class="open-button" onclick="openForm()" id='asd' value='Rašyti komentarą'></button>
<div class="form-popup" id="myForm">
            <form class="form-block" method="POST" action='{{ url("/comment/{$post->skelbimoNr}") }}'> {{csrf_field()}}
              <div class="row">
                 <div class="col-xs-12">									
                  </div>
                      <div class="form-group fl_wed">
                         <textarea id="comment" name="comment" class="form-input" required="" placeholder="Tekstas"></textarea>
                      </div>
                 </div>
              <button type="submit" class="btn btn-primary ">Pateikti</button>
          </form>
             </div>
      </div>

@endsection


