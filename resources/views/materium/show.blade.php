@extends('layouts.app')

@section('template_title')
    {{ $materium->name ?? 'Show Materium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Materium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materia.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Creditos:</strong>
                            {{ $materium->creditos }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Materia:</strong>
                            {{ $materium->nombre_materia }}
                        </div>
                        <div class="form-group">
                            <strong>Profesor:</strong>
                            {{ $materium->profesor }}
                        </div>
                        <div class="form-group">
                            <strong>Turno:</strong>
                            {{ $materium->turno }}
                        </div>
                        <div class="form-group">
                            <strong>Disponible:</strong>
                            {{ $materium->disponible }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
