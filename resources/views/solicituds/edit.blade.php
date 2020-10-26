@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Solicitud
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($solicitud, ['route' => ['solicituds.update', $solicitud->id], 'method' => 'patch']) !!}

                        @include('solicituds.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection