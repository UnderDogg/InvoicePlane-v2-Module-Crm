<?php

Route::get('staffcp/addresses', ['as'=> 'crm::addresses.index', 'uses' => 'AddressController@index']);
Route::post('staffcp/addresses', ['as'=> 'crm::addresses.store', 'uses' => 'AddressController@store']);
Route::get('staffcp/addresses/create', ['as'=> 'crm::addresses.create', 'uses' => 'AddressController@create']);
Route::put('staffcp/addresses/{addresses}', ['as'=> 'crm::addresses.update', 'uses' => 'AddressController@update']);
Route::patch('staffcp/addresses/{addresses}', ['as'=> 'crm::addresses.update', 'uses' => 'AddressController@update']);
Route::delete('staffcp/addresses/{addresses}', ['as'=> 'crm::addresses.destroy', 'uses' => 'AddressController@destroy']);
Route::get('staffcp/addresses/{addresses}', ['as'=> 'crm::addresses.show', 'uses' => 'AddressController@show']);
Route::get('staffcp/addresses/{addresses}/edit', ['as'=> 'crm::addresses.edit', 'uses' => 'AddressController@edit']);


Route::get('staffcp/customers', ['as'=> 'crm::customers.index', 'uses' => 'CustomerController@index']);
Route::post('staffcp/customers', ['as'=> 'crm::customers.store', 'uses' => 'CustomerController@store']);
Route::get('staffcp/customers/create', ['as'=> 'crm::customers.create', 'uses' => 'CustomerController@create']);
Route::put('staffcp/customers/{customers}', ['as'=> 'crm::customers.update', 'uses' => 'CustomerController@update']);
Route::patch('staffcp/customers/{customers}', ['as'=> 'crm::customers.update', 'uses' => 'CustomerController@update']);
Route::delete('staffcp/customers/{customers}', ['as'=> 'crm::customers.destroy', 'uses' => 'CustomerController@destroy']);
Route::get('staffcp/customers/{customers}', ['as'=> 'crm::customers.show', 'uses' => 'CustomerController@show']);
Route::get('staffcp/customers/{customers}/edit', ['as'=> 'crm::customers.edit', 'uses' => 'CustomerController@edit']);


Route::get('staffcp/addresses', ['as'=> 'crm::addresses.index', 'uses' => 'AddressController@index']);
Route::post('staffcp/addresses', ['as'=> 'crm::addresses.store', 'uses' => 'AddressController@store']);
Route::get('staffcp/addresses/create', ['as'=> 'crm::addresses.create', 'uses' => 'AddressController@create']);
Route::put('staffcp/addresses/{addresses}', ['as'=> 'crm::addresses.update', 'uses' => 'AddressController@update']);
Route::patch('staffcp/addresses/{addresses}', ['as'=> 'crm::addresses.update', 'uses' => 'AddressController@update']);
Route::delete('staffcp/addresses/{addresses}', ['as'=> 'crm::addresses.destroy', 'uses' => 'AddressController@destroy']);
Route::get('staffcp/addresses/{addresses}', ['as'=> 'crm::addresses.show', 'uses' => 'AddressController@show']);
Route::get('staffcp/addresses/{addresses}/edit', ['as'=> 'crm::addresses.edit', 'uses' => 'AddressController@edit']);


Route::get('staffcp/customers', ['as'=> 'crm::customers.index', 'uses' => 'CustomerController@index']);
Route::post('staffcp/customers', ['as'=> 'crm::customers.store', 'uses' => 'CustomerController@store']);
Route::get('staffcp/customers/create', ['as'=> 'crm::customers.create', 'uses' => 'CustomerController@create']);
Route::put('staffcp/customers/{customers}', ['as'=> 'crm::customers.update', 'uses' => 'CustomerController@update']);
Route::patch('staffcp/customers/{customers}', ['as'=> 'crm::customers.update', 'uses' => 'CustomerController@update']);
Route::delete('staffcp/customers/{customers}', ['as'=> 'crm::customers.destroy', 'uses' => 'CustomerController@destroy']);
Route::get('staffcp/customers/{customers}', ['as'=> 'crm::customers.show', 'uses' => 'CustomerController@show']);
Route::get('staffcp/customers/{customers}/edit', ['as'=> 'crm::customers.edit', 'uses' => 'CustomerController@edit']);



Route::get('staffcp/relationAddresses', ['as'=> 'crm::relationAddresses.index', 'uses' => 'RelationAddressController@index']);
Route::post('staffcp/relationAddresses', ['as'=> 'crm::relationAddresses.store', 'uses' => 'RelationAddressController@store']);
Route::get('staffcp/relationAddresses/create', ['as'=> 'crm::relationAddresses.create', 'uses' => 'RelationAddressController@create']);
Route::put('staffcp/relationAddresses/{relationAddresses}', ['as'=> 'crm::relationAddresses.update', 'uses' => 'RelationAddressController@update']);
Route::patch('staffcp/relationAddresses/{relationAddresses}', ['as'=> 'crm::relationAddresses.update', 'uses' => 'RelationAddressController@update']);
Route::delete('staffcp/relationAddresses/{relationAddresses}', ['as'=> 'crm::relationAddresses.destroy', 'uses' => 'RelationAddressController@destroy']);
Route::get('staffcp/relationAddresses/{relationAddresses}', ['as'=> 'crm::relationAddresses.show', 'uses' => 'RelationAddressController@show']);
Route::get('staffcp/relationAddresses/{relationAddresses}/edit', ['as'=> 'crm::relationAddresses.edit', 'uses' => 'RelationAddressController@edit']);


Route::get('staffcp/vendors', ['as'=> 'crm::vendors.index', 'uses' => 'VendorController@index']);
Route::post('staffcp/vendors', ['as'=> 'crm::vendors.store', 'uses' => 'VendorController@store']);
Route::get('staffcp/vendors/create', ['as'=> 'crm::vendors.create', 'uses' => 'VendorController@create']);
Route::put('staffcp/vendors/{vendors}', ['as'=> 'crm::vendors.update', 'uses' => 'VendorController@update']);
Route::patch('staffcp/vendors/{vendors}', ['as'=> 'crm::vendors.update', 'uses' => 'VendorController@update']);
Route::delete('staffcp/vendors/{vendors}', ['as'=> 'crm::vendors.destroy', 'uses' => 'VendorController@destroy']);
Route::get('staffcp/vendors/{vendors}', ['as'=> 'crm::vendors.show', 'uses' => 'VendorController@show']);
Route::get('staffcp/vendors/{vendors}/edit', ['as'=> 'crm::vendors.edit', 'uses' => 'VendorController@edit']);
