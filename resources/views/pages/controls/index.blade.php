@extends('layouts.master')

@section('additionals-css')
<link rel="stylesheet" href="{{ asset ('css/jquery-confirm.css') }}">
@endsection

@section('title-page', "Controles de Punto de Venta")


@section('content')
    @include('layouts._my_message')
    @include('layouts._my_status')
    @include('layouts._my_error')

<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Administraci&oacute;n de @yield('title-page')</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: auto">ID</th>
                  <th style="width: auto">Fecha</th>
                  <th style="width: auto">Monto</th>
                  <th style="width: auto;">% Punto</th>
                  <th style="width: auto;">% Cliente</th>
                  <th style="width: auto;">% Banco</th>
                  <th>Comentario</th>
                  <th style="width: 120px; text-align: center;">Acciones</th>
                </tr>
                    @foreach($controls as $control)
                <tr>
                  <td>{{ $control->id }}</td>
                  <td>{{ $control->date_control }}</td>
                  <td>{{ number_format($control->amount, 2) }}</td>
                  <td>{{ number_format($control->amount * 0.0325, 2) }}</td>
                  <td>{{ number_format($control->amount * 0.95, 2) }}</td>
                  <td>{{ number_format($control->amount * 0.0175, 2) }}</td>
                  <td>{{ $control->comment }}</td>
                  <td style="text-align: center;">
                        <a href="javascript:void(0)"
                            title="Editar"
                            onclick="event.preventDefault();
                            document.getElementById('form-edit-{{ $control->id }}').submit()">
                             <span class="label label-primary"><i class="fa fa-pencil"></i></span>
                        </a>

                        <form method="GET"
                            action="{{ route('control.edit', $control) }}"
                            id="form-edit-{{ $control->id }}"
                            style="display: none;">
                            {{ csrf_field() }}
                        </form>

                        <a href="javascript:void(0)" id="{{ $control->id }}"
                          class="btn-delete"
                          title="Eliminar">
                        <span class="label label-danger"><i class="fa fa-trash"></i></span></a>

                     <form method="POST"
                        id="form-destroy-{{ $control->id }}"
                        action="{{ route('control.destroy', $control) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>

                  </td>
                </tr>
               @endforeach

              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
               <a class="btn btn-primary no-margin pull-right"
                                title="Crear un nuevo Cultivo"
                                href="{{ route('control.create') }}">
                                <i class="fa fa-plus"></i> Agregar Nuevo
                     </a>
            </div>
</div>


<script type="text/javascript">

    </script>
@endsection


@section('additionals-js')
<script type="text/javascript" src="{{ asset('js/jquery-confirm.js') }}"></script>
@endsection

@section('additionals-scripts')
<script type="text/javascript" src="{{ asset('scripts/confirm-delete.js') }}"></script>
@endsection