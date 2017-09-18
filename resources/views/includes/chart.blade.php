<div class="panel panel-default">
    <div class="panel-heading">
        Data Chart
    </div>
    <table class="table table-bordered table-chart" id="chart">
        <thead>
            <tr>
                <th class="table-left-column chart-left-header">Input Data</th>
                <th class="table-right-column chart-right-header" colspan="2">Chart Board</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="table-left-column hover-column chart-input-column">
                    <div class="chart-input">
                        <label class="chart-label">select column</label>
                        <div class="select-menu">
                            <ul class="selector row">
                                <span class="glyphicon glyphicon-menu-left selector-btn col-md-2" v-on:click="previousValue"></span>
                                    <li v-bind:target="target" class="col-md-8" v-bind:class="[ target == 0 ? 'active' : '' ]">
                                        <span>none</span>
                                    </li>
                                @foreach($information as $info)
                                    <li v-bind:target="target" class="col-md-8" v-bind:class="[ target == {{ $loop->index + 1 }} ? 'active' : '' ]">
                                        <span>{{ $info->column_name }} ({{ $info->udt_name }})</span>
                                    </li>
                                @endforeach
                                <span class="glyphicon glyphicon-menu-right selector-btn col-md-2" v-on:click="nextValue"></span>
                            </ul>
                        </div>
                    </div>
                </th>
                <td class="table-right-column chart-column" colspan="2" rowspan="5">
                    <div class="chart-box">
                        <span class="none-chart">Please, Input data</span>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="table-left-column hover-column chart-input-column">
                    <div class="chart-input">
                        <label class="chart-label">custom data</label>
                        <div class="addon-menu">
                            <ul class="addon row">
                                <li class="col-md-6">
                                    <input type="checkbox" value="chart_checkbox"><span>separator</span>
                                </li>
                                <li class="col-md-6">
                                    <input type="checkbox" value="chart_checkbox"><span>non-separator</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </th>
            </tr>
            <tr>
                <th class="table-left-column hover-column chart-input-column">
                    <div class="chart-input">
                        <label class="chart-label">exclusion data</label>
                        <div class="addon-menu">
                            <ul class="addon row">
                                <li class="col-md-4">
                                    <input type="checkbox" value="chart_checkbox"><span>flagment</span>
                                </li>
                                <li class="col-md-6">
                                    <input type="text" class="form-control" placeholder="input exclusion expression">
                                </li>
                            </ul>
                        </div>
                    </div>
                </th>
            </tr>
            <tr>
                <th class="table-left-column hover-column chart-input-column">
                    <div class="chart-input">
                        <label class="chart-label">chart style</label>
                        <div class="addon-menu">
                            <ul class="addon row">
                                <li class="col-md-6">
                                    <input type="checkbox" value="chart_checkbox"><span>histogram</span>
                                </li>
                                <li class="col-md-6">
                                    <input type="checkbox" value="chart_checkbox"><span>bar graph</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </th>
            </tr>
            <tr>
                <th class="table-left-column hover-column chart-input-column">
                    <button class="btn btn-success chart-btn">submit</button>
                </th>
            </tr>
            <tr>
                <th class="table-left-column hover-column" rowspan="3">stats</th>
                <td class="hover-column">
                    <span>valid data : </span>
                </td>
                <td class="table-right-column hover-column">
                    <span>invalid data : </span>
                </td>
            </tr>
            <tr>
                <td class="hover-column">
                    <span>max : </span>
                </td>
                <td class="table-right-column hover-column">
                    <span>min : </span>
                </td>
            </tr>
            <tr>
                <td class="hover-column">
                    <span>avg : </span>
                </td>
                <td class="table-right-column hover-column">
                    <span>var : </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
