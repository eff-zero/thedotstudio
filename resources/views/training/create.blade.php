@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-row flex-wrap">
            <div class="col-md-12">
                <div class="card">
                    <form action="{{ route('trainings.store') }}" method="POST">
                        @csrf
                        <div class="card-header d-flex flex-row flex-wrap align-items-center justify-content-between">
                            <h6 class="title-view mb-0">Formulario de creación</h6>
                            <div class="col-md-4 d-flex flex-row justify-content-end gap-1">
                                <button class="btn btn-primary"> Crear Capacitación </button>
                                <a href="{{ route('trainings.index') }}" class="btn btn-dark">Volver</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('layouts.alerts')
                            <div class="row">

                                @csrf

                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="form-control-label">
                                        Nombre del Curso <span class="text-danger"> * </span>
                                    </label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                </div>

                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="form-control-label">
                                        Cupos <span class="text-danger"> * </span>
                                    </label>
                                    <input type="number" min="1" name="quotas" class="form-control" value="{{ old('quotas') }}">
                                </div>

                                <div class="form-group col-md-4 col-sm-12">
                                    <label class="form-control-label">
                                        Hora de Inicio <span class="text-danger"> * </span>
                                    </label>
                                    <input type="time" name="start_hour" class="form-control" value="{{ old('start_hour') }}">
                                </div>

                                <div class="form-group col-md-4 col-sm-12">
                                    <label class="form-control-label">
                                        Hora de Fin <span class="text-danger"> * </span>
                                    </label>
                                    <input type="time" name="end_hour" class="form-control" value="{{ old('end_hour') }}">
                                </div>

                                <div class="form-group col-md-4 col-sm-12">
                                    <label class="form-control-label">
                                        Día <span class="text-danger"> * </span>
                                    </label>
                                    <input type="date" name="day" class="form-control" value="{{ old('day') }}">
                                </div>



                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
