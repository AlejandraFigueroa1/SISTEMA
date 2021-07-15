@extends('layouts.app')

@section('template_title')
    Update Materium
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Materium</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('materia.update', $materium->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('materium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
