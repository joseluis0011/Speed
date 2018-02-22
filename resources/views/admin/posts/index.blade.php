@extends('admin.layout')
@section('header')
  <!--breadcrumbs start-->
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Posts</h5>
        <ol class="breadcrumb">
          <li><a href="index.html">Inicio</a>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <!--breadcrumbs end-->
@stop
@section('content')
  <!--DataTables example-->
  <div id="table-datatables">
    <div class="row">
      <h4 class="header">Home Content</h4>
      <div class="col s12">
        <form method="post" action="{{route('saveData')}}">
          {{csrf_field()}}
          <input type="hidden" name="part" value="1">
          <textarea name="body" id="editor2">
            {{$body[0]->body}}
          </textarea>
        </form>

      </div>
    </div>
    <div class="row">
      <h4 class="header">Page Content</h4>
      <div class="col s12">
        <form method="post" action="{{route('saveData')}}">
          {{csrf_field()}}
          <input type="hidden" name="part" value="2">
          <textarea name="body" id="editor">
            {{$body[1]->body}}
          </textarea>
        </form>

      </div>
    </div>
  </div>
@endsection
@section('script_top')
    <script src="{{asset('js/plugins/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('editor');
        CKEDITOR.replace('editor2');
    </script>
@endsection
