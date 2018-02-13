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
    <h4 class="header">Lista de Post</h4>
    <div class="row">
      <div class="col s12">
        <table id="data-table-simple" class="responsive-table display" cellspacing="0">
          <thead>
              <tr>
                  <th>Titulo</th>
                  <th>Cuerpo</th>
                  <th>Editar</th>
              </tr>
          </thead>

          <tfoot>
              <tr>
                <th>Titulo</th>
                <th>Cuerpo</th>
                <th>Editar</th>
              </tr>
          </tfoot>

          <tbody>
            @foreach($posts as $post)
              <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>  <a type="submit" class="btn-floating btn-large waves-effect waves-light " ><i class="mdi-content-create"></i></a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection 
