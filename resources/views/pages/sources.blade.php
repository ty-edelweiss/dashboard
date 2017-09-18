@extends('layouts.app')

@section('content')
    <div class="panel panel-primary panel-wall">
        <div class="panel-heading linear-container">
            <h4 class="linear-item-left">{{ $table }}</h4>
            <div class="dropdown linear-item-right">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    {{ $display }}
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                    @for ($i = 1; $i <= 10; $i++)
                        <li class="display-value">
                            <a href="/sources/7/?display={{ $i*10 }}">{{ $i*10 }}</a>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                    @foreach($information as $info)
                        <th>{{ $info->column_name }} ({{ $info->udt_name }})</th>
                    @endforeach
                    </tr>
                </thead>
                <tbody>
                @foreach($sources as $source)
                    <tr>
                        <th scope=row>{{ $loop->index + $sources->firstItem() }}</th>
                    @foreach($information as $info)
                        <td>{{ $source->{$info->column_name} }}</td>
                    @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container page-container">
        <nav class="page-container" aria-label="pagination">
            <ul class="pager">
                <li class="previous {{ $sources->currentPage() == 1 ? 'disabled' : '' }}"><a href="{{ $sources->previousPageUrl() }}"><span aria-hidden="true">&larr;</span> Older</a></li>
                <li class="next"><a href="{{ $sources->nextPageUrl() }}">Newer <span aria-hidden="true">&rarr;</span></a></li>
            </ul>
            <div class="page-number">{{ $sources->currentPage() }}</div>
        </nav>
    </div>
@endsection