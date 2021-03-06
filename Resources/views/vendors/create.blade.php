@extends('core::layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Vendor
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admincp.core.vendors.store']) !!}

                        @include('admincp.core.vendors.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
