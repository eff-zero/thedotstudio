@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-row flex-wrap">
            <div class="col-md-12">
                <x-tableStyled class-table="table-sm">
                    <x-slot name="inputSearch">
                        <div class="d-flex flex-row flex-wrap align-items-center justify-content-between">
                            <h2 class="title-view mb-0">Capacitaciones</h2>
                            <div class="col-md-4 d-flex flex-row justify-content-end">
                                <a href="{{ route('trainings.create') }}" role="button" class="btn btn-primary btn">Crear</a>
                            </div>

                        </div>
                        @include('layouts.alerts')
                    </x-slot>
                    <x-slot name="thead">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cupos</th>
                                <th scope="col">Hora de Inicio</th>
                                <th scope="col">Hora de Fin</th>
                                <th scope="col">Día</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                    </x-slot>
                    <x-slot name="tbody">
                        <tbody>
                            @foreach ($trainings as $training)
                                <tr>
                                    <td>{{ $training->name }}</td>
                                    <td>{{ $training->quotas }}</td>
                                    <td>{{ $training->start_hour }}</td>
                                    <td>{{ $training->end_hour }}</td>
                                    <td>{{ $training->day }}</td>
                                    <td class="d-flex fle-nowrap justify-content-center gap-2">

                                        <a href="{{ route('trainings.subscribe', $training->id) }}"
                                            class="btn btn-secondary btn-sm"> Suscribirse </a>

                                        <a href="{{ route('trainings.show', $training->id) }}"
                                            class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>

                                        @if (auth()->user()->id == 1)
                                            <a href="{{ route('trainings.edit', $training->id) }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="fas fa-pencil"></i>
                                            </a>
                                            <form action="{{ route('trainings.destroy', $training->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger"> <i
                                                        class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </x-slot>
                </x-tableStyled>
            </div>
        </div>
    </div>
@endsection
