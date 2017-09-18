<form method="POST" action="/settings/table/{{ $id }}">
    {{ method_field('PUT') }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th class="table-left-column">Database Configurations</th>
                <th class="table-right-column">Set Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="table-left-column">Database Vendor</th>
                <td class="table-right-column">{{ $vendor }}</td>
            </tr>
            <tr>
                <th class="table-left-column">Database Host</th>
                <td class="table-right-column">{{ $host }}</td>
            </tr>
            <tr>
                <th class="table-left-column">Database Port</th>
                <td class="table-right-column">{{ $port }}</td>
            </tr>
            <tr>
                <th class="table-left-column">Database Name</th>
                <td class="table-right-column">{{ $database }}</td>
            </tr>
            <tr>
                <th class="table-left-column table-label-column">
                    <label for="targetTable">Target Table</label>
                </th>
                <td class="table-right-column table-input-column">
                    <input type="text" class="form-control" id="targetTable" name="table" placeholder="please, input table" value="{{ $table }}">
                </td>
            </tr>
            <tr>
                <td class="table-bottom-column table-btn-column" colspan="2">
                    <button type="submit" class="btn btn-info">Apply</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>
