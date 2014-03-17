@extends('layouts.master')

@section('title')
Store List
@stop

@section('content')
<body>
  <h1>Edit Location</h1>

{{ Form::model($store, ['method' => 'PATCH', 'class' => 'form-horizontal', 'role' => 'form', 'route' => ['stores.update', $store->id]]) }}
 
<!-- Store Number Field -->
@if ($errors->first('store_num'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_num', 'Store Number', ['class' => 'col-sm-2 control-label', 'for' => 'store_num']) }}
    <div class="col-sm-10">
    {{ Form::text('store_num', null, ['class' => 'form-control', 'id' => 'store_num']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_num') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_num', 'Store Number', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_num', null, ['class' => 'form-control', 'placeholder' => 'Usually the name of the town' ]) }}
    </div>
  </div>
@endif


<!-- Store Name Field -->
@if ($errors->first('store_name'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_name', 'Store Name', ['class' => 'col-sm-2 control-label', 'for' => 'store_name']) }}
    <div class="col-sm-10">
    {{ Form::text('store_name', null, ['class' => 'form-control', 'id' => 'store_name']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_name') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_name', 'Store Name', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_name', null, ['class' => 'form-control', 'id' => 'store_name', 'placeholder' => 'Usually the name of the town']) }}
    </div>
  </div>
@endif


<!-- Store Address Field -->
@if ($errors->first('store_address'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_address', 'Address', ['class' => 'col-sm-2 control-label', 'for' => 'store_address']) }}
    <div class="col-sm-10">
    {{ Form::text('store_address', null, ['class' => 'form-control', 'id' => 'store_address']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_address') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_address', 'Address', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_address', null, ['class' => 'form-control', 'id' => 'store_address', 'placeholder' => '123 Main Street']) }}
    </div>
  </div>
@endif

<!-- City Field - Let's go Mets! :) -->
@if ($errors->first('store_city'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_city', 'City', ['class' => 'col-sm-2 control-label', 'for' => 'store_city']) }}
    <div class="col-sm-10">
    {{ Form::text('store_city', null, ['class' => 'form-control', 'id' => 'store_city']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_city') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_city', 'City', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_city', null, ['class' => 'form-control', 'id' => 'store_city', 'placeholder' => 'City']) }}
    </div>
  </div>
@endif


<!-- State Field -->
@if ($errors->first('store_state'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_state', 'State', ['class' => 'col-sm-2 control-label', 'for' => 'store_state']) }}
    <div class="col-sm-10">
    {{ Form::text('store_state', null, ['class' => 'form-control', 'id' => 'store_state']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_state') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_state', 'State', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_state', null, ['class' => 'form-control', 'id' => 'store_state', 'placeholder' => 'Two character abbreviation: NY']) }}
    </div>
  </div>
@endif


<!-- Zipcode Field -->
@if ($errors->first('store_zip'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_zip', 'Zipcode', ['class' => 'col-sm-2 control-label', 'for' => 'store_zip']) }}
    <div class="col-sm-10">
    {{ Form::text('store_zip', null, ['class' => 'form-control', 'id' => 'store_zip']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_zip') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_zip', 'Zipcode', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_zip', null, ['class' => 'form-control', 'id' => 'store_zip', 'placeholder' => 'Zipcode']) }}
    </div>
  </div>
@endif


<!-- Telephone Number Field -->
@if ($errors->first('store_tel'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_tel', 'Telephone Number', ['class' => 'col-sm-2 control-label', 'for' => 'store_tel']) }}
    <div class="col-sm-10">
    {{ Form::text('store_tel', null, ['class' => 'form-control', 'id' => 'store_tel']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_tel') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_tel', 'Telephone Number', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_tel', null, ['class' => 'form-control', 'id' => 'store_tel', 'placeholder' => 'Enter the Main phone number without any dashes, like...5165551212']) }}
    </div>
  </div>
@endif


<!-- Fax Number Field -->
@if ($errors->first('store_fax'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_fax', 'Fax Number', ['class' => 'col-sm-2 control-label', 'for' => 'store_fax']) }}
    <div class="col-sm-10">
    {{ Form::text('store_fax', null, ['class' => 'form-control', 'id' => 'store_fax']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_fax') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_fax', 'Fax Number', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_fax', null, ['class' => 'form-control', 'id' => 'store_fax', 'placeholder' => 'Again, No Dashes please.']) }}
    </div>
  </div>
@endif


<!-- Store Landmark Field -->
@if ($errors->first('store_landmark'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_landmark', 'Landmark', ['class' => 'col-sm-2 control-label', 'for' => 'store_landmark']) }}
    <div class="col-sm-10">
    {{ Form::text('store_landmark', null, ['class' => 'form-control', 'id' => 'store_landmark']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_landmark') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_landmark', 'Landmark', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_landmark', null, ['class' => 'form-control', 'id' => 'store_landmark', 'placeholder' => 'Please provide a short nearby landmark if possible.']) }}
    </div>
  </div>
@endif


<!-- Store Dealer Code Field -->
@if ($errors->first('store_dealer_code'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_dealer_code', 'Store Dealer Code', ['class' => 'col-sm-2 control-label', 'for' => 'store_dealer_code']) }}
    <div class="col-sm-10">
    {{ Form::text('store_dealer_code', null, ['class' => 'form-control', 'id' => 'store_dealer_code']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_dealer_code') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_dealer_code', 'Store Dealer Code', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_dealer_code', null, ['class' => 'form-control', 'id' => 'store_dealer_code', 'placeholder' => 'Please provide the POS.com dealer code if possible.']) }}
    </div>
  </div>
@endif


<!-- Link to Store Map Field -->
@if ($errors->first('store_map'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_map', 'Link to Map', ['class' => 'col-sm-2 control-label', 'for' => 'store_map']) }}
    <div class="col-sm-10">
    {{ Form::text('store_map', null, ['class' => 'form-control', 'id' => 'store_map']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_map') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_map', 'Link to Map', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_map', null, ['class' => 'form-control', 'id' => 'store_map', 'placeholder' => 'Link to a Google Map for the location']) }}
    </div>
  </div>
@endif


<!-- Weekday Store Hours Field -->
@if ($errors->first('store_hours_mf'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_hours_mf', 'Weekday Store Hours M-F', ['class' => 'col-sm-2 control-label', 'for' => 'store_hours_mf']) }}
    <div class="col-sm-10">
    {{ Form::text('store_hours_mf', null, ['class' => 'form-control', 'id' => 'store_hours_mf']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_hours_mf') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_hours_mf', 'Weekday Store Hours M-F', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_hours_mf', null, ['class' => 'form-control', 'id' => 'store_hours_mf', 'placeholder' => 'Enter weekday store hours in the following format: 10:00 am - 8:00 pm.']) }}
    </div>
  </div>
@endif


<!-- Friday Store Hours Field -->
@if ($errors->first('store_hours_fri'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_hours_fri', 'Friday Hours', ['class' => 'col-sm-2 control-label', 'for' => 'store_hours_fri']) }}
    <div class="col-sm-10">
    {{ Form::text('store_hours_fri', null, ['class' => 'form-control', 'id' => 'store_hours_fri']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_hours_fri') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_hours_fri', 'Friday Hours', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_hours_fri', null, ['class' => 'form-control', 'id' => 'store_hours_fri', 'placeholder' => 'If this location has different hours on Friday, enter them here.']) }}
    </div>
  </div>
@endif


<!-- Saturday Store Hours Field -->
@if ($errors->first('store_hours_sat'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_hours_sat', 'Saturday Hours', ['class' => 'col-sm-2 control-label', 'for' => 'store_hours_sat']) }}
    <div class="col-sm-10">
    {{ Form::text('store_hours_sat', null, ['class' => 'form-control', 'id' => 'store_hours_sat']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_hours_sat') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_hours_sat', 'Saturday Hours', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_hours_sat', null, ['class' => 'form-control', 'id' => 'store_hours_sat', 'placeholder' => 'Enter SATURDAY store hours in the following format: 10:00 am - 8:00 pm.']) }}
    </div>
  </div>
@endif


<!-- Sunday Store Hours Field -->
@if ($errors->first('store_hours_sat'))
  <div class="form-group has-error has-feedback">
    {{ Form::label('store_hours_sun', 'Sunday Hours', ['class' => 'col-sm-2 control-label', 'for' => 'store_hours_sun']) }}
    <div class="col-sm-10">
    {{ Form::text('store_hours_sun', null, ['class' => 'form-control', 'id' => 'store_hours_sun']) }}
    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    {{ $errors->first('store_hours_sun') }}
    </div>
  </div>
@else
  <div class="form-group">  
    {{ Form::label('store_hours_sun', 'Sunday Hours', ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
    {{ Form::text('store_hours_sun', null, ['class' => 'form-control', 'id' => 'store_hours_sun', 'placeholder' => 'Enter SUNDAY store hours in the following format: 10:00 am - 8:00 pm..']) }}
    </div>
  </div>
@endif

<!-- Checkbox Field -->
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          Active <input type="checkbox"> 
        </label>
      </div>
    </div>
  </div>
 
<!-- Submit and Cancel Buttons   -->
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a class="btn btn-default" href="{{ URL::to('stores/') }}">Cancel</a>
      {{ Form::submit('Update Store', ['class' => 'btn btn-primary']) }}
    </div>
  </div>
{{ Form::close() }}
@stop