@extends('layouts.master')

@section('title-page', "Control de Ingresos PV")

@section('message')
@include('layouts._my_message')
@include('layouts._my_status')
@include('layouts._my_error')
@endsection

@section('content')
        <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Formulario de @yield('title-page')</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal"
                    role="form"
                    method="POST"
                    action="{{ route('control.store') }}">
                {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Fecha: </label>

                  <div class="col-sm-5">

                    <input autofocus="true" type="date" class="form-control"  value="<?php echo date("Y-m-d");?>" name="date_control" id="date_control" placeholder="Fecha de Lectura" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Monto: </label>

                  <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control" name="amount" id="amount" placeholder="Monto" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Comentario: </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="comment" id="comment" placeholder="Comentario Adicional (Opcional)">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{ route('control.index') }}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </div>
@endsection