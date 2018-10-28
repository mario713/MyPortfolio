@extends('layouts.app')

@section('content')
    <div class="title"><h5>Logs</h5></div>

    <!-- Headings -->

        <div class="body">
            <!-- Static table with resizable columns -->
            <div class="widget">
                <div class="head"><h5 class="iFrames">Logs</h5></div>
                <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic resize">
                    <thead>
                    <tr>
                        <td width="6%">ID</td>
                        <td width="10%">Type</td>
                        <td width="6%">User ID</td>
                        <td width="48%">Log</td>
                        <td width="15%">Client IP</td>
                        <td width="15%">Date</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($logs as $log)
                        <tr style="text-align: center;">
                            <td>{{ $log['id'] }}</td>
                            <td>{{ $log['type'] }}</td>
                            <td><a href="{{ url('/admin/users/'.$log['user_id']) }}">{{ $log['user_id'] }}</a></td>
                            <td>{{ $log['log'] }}</td>
                            <td>{{ $log['client_ip'] }}</td>
                            <td>{{ $log['date'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <ul class="pages">
                    {{ $logs->links() }}
                </ul>
            </div>
        </div>

@endsection