<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $address->id !!}</p>
</div>

<!-- Address 1 Field -->
<div class="form-group">
    {!! Form::label('address_1', 'Address 1:') !!}
    <p>{!! $address->address_1 !!}</p>
</div>

<!-- Address 2 Field -->
<div class="form-group">
    {!! Form::label('address_2', 'Address 2:') !!}
    <p>{!! $address->address_2 !!}</p>
</div>

<!-- Zipcode Field -->
<div class="form-group">
    {!! Form::label('zipcode', 'Zipcode:') !!}
    <p>{!! $address->zipcode !!}</p>
</div>

<!-- City Id Field -->
<div class="form-group">
    {!! Form::label('city_id', 'City Id:') !!}
    <p>{!! $address->city_id !!}</p>
</div>

<!-- Country Id Field -->
<div class="form-group">
    {!! Form::label('country_id', 'Country Id:') !!}
    <p>{!! $address->country_id !!}</p>
</div>

