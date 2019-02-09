<?php

Route::get('admincp/core/addresses', ['as'=> 'admincp.core.addresses.index', 'uses' => 'Core\AddressController@index']);
Route::post('admincp/core/addresses', ['as'=> 'admincp.core.addresses.store', 'uses' => 'Core\AddressController@store']);
Route::get('admincp/core/addresses/create', ['as'=> 'admincp.core.addresses.create', 'uses' => 'Core\AddressController@create']);
Route::put('admincp/core/addresses/{addresses}', ['as'=> 'admincp.core.addresses.update', 'uses' => 'Core\AddressController@update']);
Route::patch('admincp/core/addresses/{addresses}', ['as'=> 'admincp.core.addresses.update', 'uses' => 'Core\AddressController@update']);
Route::delete('admincp/core/addresses/{addresses}', ['as'=> 'admincp.core.addresses.destroy', 'uses' => 'Core\AddressController@destroy']);
Route::get('admincp/core/addresses/{addresses}', ['as'=> 'admincp.core.addresses.show', 'uses' => 'Core\AddressController@show']);
Route::get('admincp/core/addresses/{addresses}/edit', ['as'=> 'admincp.core.addresses.edit', 'uses' => 'Core\AddressController@edit']);


Route::get('admincp/core/customers', ['as'=> 'admincp.core.customers.index', 'uses' => 'Core\CustomerController@index']);
Route::post('admincp/core/customers', ['as'=> 'admincp.core.customers.store', 'uses' => 'Core\CustomerController@store']);
Route::get('admincp/core/customers/create', ['as'=> 'admincp.core.customers.create', 'uses' => 'Core\CustomerController@create']);
Route::put('admincp/core/customers/{customers}', ['as'=> 'admincp.core.customers.update', 'uses' => 'Core\CustomerController@update']);
Route::patch('admincp/core/customers/{customers}', ['as'=> 'admincp.core.customers.update', 'uses' => 'Core\CustomerController@update']);
Route::delete('admincp/core/customers/{customers}', ['as'=> 'admincp.core.customers.destroy', 'uses' => 'Core\CustomerController@destroy']);
Route::get('admincp/core/customers/{customers}', ['as'=> 'admincp.core.customers.show', 'uses' => 'Core\CustomerController@show']);
Route::get('admincp/core/customers/{customers}/edit', ['as'=> 'admincp.core.customers.edit', 'uses' => 'Core\CustomerController@edit']);


Route::get('admincp/core/addresses', ['as'=> 'admincp.core.addresses.index', 'uses' => 'Core\AddressController@index']);
Route::post('admincp/core/addresses', ['as'=> 'admincp.core.addresses.store', 'uses' => 'Core\AddressController@store']);
Route::get('admincp/core/addresses/create', ['as'=> 'admincp.core.addresses.create', 'uses' => 'Core\AddressController@create']);
Route::put('admincp/core/addresses/{addresses}', ['as'=> 'admincp.core.addresses.update', 'uses' => 'Core\AddressController@update']);
Route::patch('admincp/core/addresses/{addresses}', ['as'=> 'admincp.core.addresses.update', 'uses' => 'Core\AddressController@update']);
Route::delete('admincp/core/addresses/{addresses}', ['as'=> 'admincp.core.addresses.destroy', 'uses' => 'Core\AddressController@destroy']);
Route::get('admincp/core/addresses/{addresses}', ['as'=> 'admincp.core.addresses.show', 'uses' => 'Core\AddressController@show']);
Route::get('admincp/core/addresses/{addresses}/edit', ['as'=> 'admincp.core.addresses.edit', 'uses' => 'Core\AddressController@edit']);


Route::get('admincp/core/customers', ['as'=> 'admincp.core.customers.index', 'uses' => 'Core\CustomerController@index']);
Route::post('admincp/core/customers', ['as'=> 'admincp.core.customers.store', 'uses' => 'Core\CustomerController@store']);
Route::get('admincp/core/customers/create', ['as'=> 'admincp.core.customers.create', 'uses' => 'Core\CustomerController@create']);
Route::put('admincp/core/customers/{customers}', ['as'=> 'admincp.core.customers.update', 'uses' => 'Core\CustomerController@update']);
Route::patch('admincp/core/customers/{customers}', ['as'=> 'admincp.core.customers.update', 'uses' => 'Core\CustomerController@update']);
Route::delete('admincp/core/customers/{customers}', ['as'=> 'admincp.core.customers.destroy', 'uses' => 'Core\CustomerController@destroy']);
Route::get('admincp/core/customers/{customers}', ['as'=> 'admincp.core.customers.show', 'uses' => 'Core\CustomerController@show']);
Route::get('admincp/core/customers/{customers}/edit', ['as'=> 'admincp.core.customers.edit', 'uses' => 'Core\CustomerController@edit']);



Route::get('admincp/core/relationAddresses', ['as'=> 'admincp.core.relationAddresses.index', 'uses' => 'Core\RelationAddressController@index']);
Route::post('admincp/core/relationAddresses', ['as'=> 'admincp.core.relationAddresses.store', 'uses' => 'Core\RelationAddressController@store']);
Route::get('admincp/core/relationAddresses/create', ['as'=> 'admincp.core.relationAddresses.create', 'uses' => 'Core\RelationAddressController@create']);
Route::put('admincp/core/relationAddresses/{relationAddresses}', ['as'=> 'admincp.core.relationAddresses.update', 'uses' => 'Core\RelationAddressController@update']);
Route::patch('admincp/core/relationAddresses/{relationAddresses}', ['as'=> 'admincp.core.relationAddresses.update', 'uses' => 'Core\RelationAddressController@update']);
Route::delete('admincp/core/relationAddresses/{relationAddresses}', ['as'=> 'admincp.core.relationAddresses.destroy', 'uses' => 'Core\RelationAddressController@destroy']);
Route::get('admincp/core/relationAddresses/{relationAddresses}', ['as'=> 'admincp.core.relationAddresses.show', 'uses' => 'Core\RelationAddressController@show']);
Route::get('admincp/core/relationAddresses/{relationAddresses}/edit', ['as'=> 'admincp.core.relationAddresses.edit', 'uses' => 'Core\RelationAddressController@edit']);


Route::get('admincp/core/vendors', ['as'=> 'admincp.core.vendors.index', 'uses' => 'Core\VendorController@index']);
Route::post('admincp/core/vendors', ['as'=> 'admincp.core.vendors.store', 'uses' => 'Core\VendorController@store']);
Route::get('admincp/core/vendors/create', ['as'=> 'admincp.core.vendors.create', 'uses' => 'Core\VendorController@create']);
Route::put('admincp/core/vendors/{vendors}', ['as'=> 'admincp.core.vendors.update', 'uses' => 'Core\VendorController@update']);
Route::patch('admincp/core/vendors/{vendors}', ['as'=> 'admincp.core.vendors.update', 'uses' => 'Core\VendorController@update']);
Route::delete('admincp/core/vendors/{vendors}', ['as'=> 'admincp.core.vendors.destroy', 'uses' => 'Core\VendorController@destroy']);
Route::get('admincp/core/vendors/{vendors}', ['as'=> 'admincp.core.vendors.show', 'uses' => 'Core\VendorController@show']);
Route::get('admincp/core/vendors/{vendors}/edit', ['as'=> 'admincp.core.vendors.edit', 'uses' => 'Core\VendorController@edit']);
