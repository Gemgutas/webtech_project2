<!-- Country Field -->
<div class="col-sm-12">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $weatherAPI->country }}</p>
</div>

<!-- Celsius Field -->
<div class="col-sm-12">
    {!! Form::label('celsius', 'Celsius:') !!}
    <p>{{ $weatherAPI->celsius }}</p>
</div>

<!-- Fahrenheit Field -->
<div class="col-sm-12">
    {!! Form::label('fahrenheit', 'Fahrenheit:') !!}
    <p>{{ $weatherAPI->fahrenheit }}</p>
</div>

<!-- Longitude Field -->
<div class="col-sm-12">
    {!! Form::label('longitude', 'Longitude:') !!}
    <p>{{ $weatherAPI->longitude }}</p>
</div>

<!-- Latitude Field -->
<div class="col-sm-12">
    {!! Form::label('latitude', 'Latitude:') !!}
    <p>{{ $weatherAPI->latitude }}</p>
</div>

