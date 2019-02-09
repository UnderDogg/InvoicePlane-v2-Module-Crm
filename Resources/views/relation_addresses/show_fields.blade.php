<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $relationAddress->id !!}</p>
</div>

<!-- Relation Id Field -->
<div class="form-group">
    {!! Form::label('relation_id', 'Relation Id:') !!}
    <p>{!! $relationAddress->relation_id !!}</p>
</div>

<!-- Address Id Field -->
<div class="form-group">
    {!! Form::label('address_id', 'Address Id:') !!}
    <p>{!! $relationAddress->address_id !!}</p>
</div>

<!-- Is Active Field -->
<div class="form-group">
    {!! Form::label('is_active', 'Is Active:') !!}
    <p>{!! $relationAddress->is_active !!}</p>
</div>

<!-- Address Type Field -->
<div class="form-group">
    {!! Form::label('address_type', 'Address Type:') !!}
    <p>{!! $relationAddress->address_type !!}</p>
</div>

