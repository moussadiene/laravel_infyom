@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Type Operation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($typeOperation, ['route' => ['typeOperations.update', $typeOperation->id], 'method' => 'patch']) !!}

                        @include('type_operations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection