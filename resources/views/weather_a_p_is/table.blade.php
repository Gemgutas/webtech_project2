<div class="table-responsive">
    <table class="table" id="weatherAPIs-table">
        <thead>
            <tr>
                <th>Country</th>
        <th>Celsius</th>
        <th>Fahrenheit</th>
        <th>Longitude</th>
        <th>Latitude</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($weatherAPIs as $weatherAPI)
            <tr>
                <td>{{ $weatherAPI->country }}</td>
            <td>{{ $weatherAPI->celsius }}</td>
            <td>{{ $weatherAPI->fahrenheit }}</td>
            <td>{{ $weatherAPI->longitude }}</td>
            <td>{{ $weatherAPI->latitude }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['weatherAPIs.destroy', $weatherAPI->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('weatherAPIs.show', [$weatherAPI->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('weatherAPIs.edit', [$weatherAPI->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
