@extends('Layout.index')

@section('content')

@foreach ($projects as $project)
    

        <div class="col-md-12 col-xl-12 ">

                <div class="card app-design">

                    <div class="card-block">
                        <button class="btn btn-warning f-right"><i class="ti-control-record"></i>{{ $project->status }}</button>
                        <h6 class="f-w-400 text-muted"></h6>
                        <p class="text-c-blue f-w-400"><font size = "4">{{ $project->nombre }}</font></p>
                        <p class="text-muted">{{ $project->descripcion }}.</p>
                        <div class="design-description d-inline-block m-r-40">
                            <h3 class="f-w-400">{{ $project->fecha_registro }}</h3>
                            <p class="text-muted">Fecha & Hora de Publicación</p>
                        </div>

                        <div class="design-description d-inline-block">
                            <h3 class="f-w-400">{{ $project->monto }}</h3>
                            <p class="text-muted">Presupuesto del Proyecto</p>
                        </div>

                       <div class="team-box p-b-20">
                            <p class="d-inline-block m-r-20 f-w-400"></p>
                            <div class="team-section d-inline-block">
                                <button class ="btn btn-info">{{ $project->funciones }}</button>
                            </div>
                       </div>
                        <div>
                            
                        </div>

                       <a href="projects/{{ $project->id }}">
                        <button class ="btn btn-inverse f-right"><b><i class ="ti-eye"></i>Ver Proyecto</b></button>
                       </a>
                        
                    </div>

                </div>

        </div>
            
 @endforeach
 

@endsection