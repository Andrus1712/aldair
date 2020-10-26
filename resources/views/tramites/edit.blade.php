@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tramite
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tramite, ['route' => ['tramites.update', $tramite->id], 'method' => 'patch']) !!}

                        @include('tramites.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection