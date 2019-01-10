@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Reglage
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($reglage, ['route' => ['reglages.update', $reglage->id], 'method' => 'patch']) !!}

                        @include('reglages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection