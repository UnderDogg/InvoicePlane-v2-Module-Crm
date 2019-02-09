<!-- Company Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_id', 'Company Id:') !!}
    {!! Form::number('company_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Relation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('relation_id', 'Relation Id:') !!}
    {!! Form::number('relation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Vendor No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vendor_no', 'Vendor No:') !!}
    {!! Form::text('vendor_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Coc No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coc_no', 'Coc No:') !!}
    {!! Form::text('coc_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Vat No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vat_no', 'Vat No:') !!}
    {!! Form::text('vat_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admincp.core.vendors.index') !!}" class="btn btn-default">Cancel</a>
</div>
