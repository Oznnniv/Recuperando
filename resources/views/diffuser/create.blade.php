@extends('home')
@section('title')
<title>Creando sección</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection
@section('content')
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="{{ url('/cont-all') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="modal-header">Creando sección</div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Nombre:</label>
                                        <input type="text" name="name" id="nombre" class="form-control input-sm" placeholder="Nombre" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea name="desc" class="form-control input-sm" placeholder="Descripción" required></textarea>
                            </div>
                            <div class="form-group">
                                <label id="autors">Asignar autor:</label><br>
                                <div class="col-sm-6">
                                    @forelse ($users as $user)
                                        <input id="changed" type="checkbox" name="user_id" value="{{ $user->id }}"> {{ $user->name }}<br>
                                    @empty
                                    <label>No existen autores</label><br>
                                    @endforelse
                                    <font size="1">*Solo puedes seleccionar una opción</font>
                                </div>
                                <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" id="asignar">Asignar autor</button>
                                <table class="table" border="1" id="listas">
                                    <thead>
                                        <th>Nombre</th>
                                        <th>Acciones</th>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                        <tr id="{{$user->id}}">
                                            <td>{{$user->name}}</td>
                                            <td><a id="{{$user->id}}" class="btn btn-danger quitar" onclick="quitar()">Quitar</a></td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="2" >Sin estudiantes matriculados</td>
                                        </tr>
                                        @endforelse
                                     </tbody>
                                </table>-->
                            </div>
                        <div class="content">
                            <button type="submit" value="Guardar" class="btn btn-success col-xs-2 col-sm-2">Guardar</button>
                            <a href="{{ url('/cont-all') }}" class="btn btn-info col-xs-2 col-sm-2" >Atrás</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false"  data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Lista de autores</h5>
                <button class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></button>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div>
                                <input type="text" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" placeholder="Correo">
                            </div>
                            <div class="col-2">
                                <input type="submit" class="form-control btn-primary" value="BUSCAR">
                            </div>
                        </div>
                    </form><BR>
                    <div class="row">
                        <table class="table" border="1" id="lista_estudiantes">
                            <thead class="col-5">
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody class="col-5">
                                @forelse ($users as $user)
                                <tr id="{{ $user->id }}">
                                    <td>{{ $user->name }}</td>
                                    <td><a id="{{ $user->id }}" onclick="agregar()" class="btn btn-primary agregar">Agregar</a></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" >Sin estudiantes a matricular</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></button>
            </div>
        </div>
    </div>
</div>
-->
@endsection
