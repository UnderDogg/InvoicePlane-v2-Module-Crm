<!-- Address 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_1', 'Address 1:') !!}
    {!! Form::text('address_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Address 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_2', 'Address 2:') !!}
    {!! Form::text('address_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Zipcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zipcode', 'Zipcode:') !!}
    {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
</div>

<!-- City Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city_id', 'City Id:') !!}
    {!! Form::number('city_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', 'Country Id:') !!}
    {!! Form::number('country_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admincp.core.addresses.index') !!}" class="btn btn-default">Cancel</a>
</div>
