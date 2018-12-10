@extends('Layout.index')

@section('content')

<div class="col-md-12 col-xl-12">
                                <!-- Invoice card start -->
                                <div class="card">
                                    <div class="row invoice-contact">
                                        <div class="col-md-8">
                                            <div class="invoice-box row">
                                                <div class="col-sm-12">
                                                    <table class="table table-responsive invoice-table table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td><img src="{{ asset('assets/images/logo-blue.png')}}" class="m-b-10" alt=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                        <font  size ="3">
                                                                    Nombre del Proyecto:
                                                                        </font>
                                                                </td>
                                                            </tr>
                                                            <tr><td>
                                                                    <font COLOR="blue" size ="5">
                                                                {{ $project->nombre }}
                                                                    </font>
                                                            </td>
                                                            </tr>
                                                           
                                                            <tr>
                                                                <td></td>
                                                            </tr>
                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row invoive-info">
                                            <div class="col-md-4 col-xs-12 invoice-client-info">
                                                <h6> Requerimientos de implementación del Proyecto:</h6>
                                                <button class ="btn btn-info"><strong>{{ $project->funciones }}</strong></button>
                                               
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <h6>Detalles:</h6>
                                                <table class="table table-responsive invoice-table invoice-order table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th>Date & Hour:</th>
                                                            <td>{{ $project->fecha_registro }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Status:</th>
                                                            <td>
                                                                <span class="label label-warning">{{ $project->status }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Id :</th>
                                                            <td>
                                                                #{{ $project->id }}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <h6 class="m-b-20">Presupuesto: <span> </span></h6>
                                                <h6 class="text-uppercase text-primary">Total :
                                                    <span>{{ $project->monto }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h6>Descripción del Proyecto:</h6>
                                                <p>{{ $project->descripcion }}</p>
                                            </div>
                                        </div>
                                        <button class = "btn btn-danger">
                                        <a href ="/projects"><b>Atras</b></a>
                                        </button>
                                        
                                    </div>
                                </div>
                                <!-- Invoice card end -->

                               
                                                            
                                @if ($project->tasks->count()>=0)
                                    
                                <div class = "box">
                                    @foreach ($project->tasks as $task)

                                    <div class=" card">
                                        
                                        <form method = "POST" action ="/tasks/{{ $task->id }}" class ="form-group">
                                            @method('PATCH')
                                            @csrf

                                            <label  {{ $task->complete}} for="completed">
                                        <!-- <input name ="completed" onChange = "this.form.submit()">-->
                                            {{ $task->comentario }}
                                            </label>
                                        </form>
                                    
                                    </div>
                                        
                                    @endforeach
            {{-- add  comentario(Propuesta) --}}

            <form  class ="box" method ="POST" action ="/projects/{{ $project->id }}/tasks" >
                @csrf
                <div class ="field">
                    
                    <!--<div class="form-group">
                        <input type = "text" class ="" name = "description" placeholder="New Task "/>
                    </div>-->
                    <div class="form-group">
                            <label for="comment">Propuesta:</label>
                            <textarea class="form-control" name ="comentario" rows="3" id="comment"></textarea>
                    </div>

                </div>
        
        
                <div class = "field">
                    <div class = "control">
                        <button type = "submit" class ="btn btn-primary">Añadir</button>
                    </div>
                </div>
                
               
                
        
        
        
            </form>
        
</div>
@endif



                   
                           
</div>
@endsection