@extends('core::layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Relation Address
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($relationAddress, ['route' => ['admincp.core.relationAddresses.update', $relationAddress->id], 'method' => 'patch']) !!}

                        @include('admincp.core.relation_addresses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection