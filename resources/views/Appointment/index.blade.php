@extends('layouts.app')
@section('content')
<div class="container">
         <div id="appointment"> 
         ELIAN 
        </div>

</div>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Launch demo modal
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro De Cita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              
                 {{----Input del nombre del usario--}}
            <div class="modal-body">
              <form action="">
                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Escribir...">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                  </div>
         {{----------------------------------------------------------------------------------------}}
          
         {{----Input del apellido del usario--}}
          <div class="form-group">
            <label for="lastName">Apellido</label>
            <input type="text" class="form-control" name="lastName" id="lastName" aria-describedby="helpId" placeholder="Escribir...">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>
         {{----------------------------------------------------------------------------------------}}

          {{----Input de identificaion del usario--}}
          <div class="form-group">
            <label for="id">Documento De Identidad</label>
            <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="Escribir...">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>
         {{----------------------------------------------------------------------------------------}}
          
         {{----Input de nombre de la mascota--}}
         <div class="form-group">
           <label for="mascot">Nombre De la Mascota</label>
           <input type="text" class="form-control" name="mascot" id="mascot" aria-describedby="helpId" placeholder="Escribir...">
           <small id="helpId" class="form-text text-muted">Help text</small>
         </div>
         {{----------------------------------------------------------------------------------------}}

         {{----Input de inicio fehca de la cita--}}
         <div class="form-group">
           <label for="start">Fecha de inicio</label>
           <input type="text" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="Escribir...">
           <small id="helpId" class="form-text text-muted">Help text</small>
         </div>
         {{----------------------------------------------------------------------------------------}}
         
         {{----Input de fin fehca de la cita--}}
         <div class="form-group">
           <label for="end">Fecha de Fin</label>
           <input type="text" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="Escribir...">
           <small id="helpId" class="form-text text-muted">Help text</small>
         </div>
          {{----------------------------------------------------------------------------------------}}

         {{----Input de hora de la cita--}}
         <div class="form-group">
          <label for="end">Hora de la cita</label>
          <input type="text" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="Escribir...">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
         {{----------------------------------------------------------------------------------------}}

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
@endsection