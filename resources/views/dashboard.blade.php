@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="px-4">Email</th>
                                    <th class="px-4">Password</th>
                                    <th class="px-4">IP Address</th>
                                    <th class="px-4">User Agent</th>
                                    <th class="px-4">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($logs as $log)
                                    <tr>
                                        <td class="px-4">{{$log->email}}</td>
                                        <td class="px-4">{{$log->password}}</td>
                                        <td class="px-4">{{$log->ip_address}}</td>
                                        <td class="px-4">{{$log->user_agent}}</td>
                                        <td class="px-4">{{$log->created_at->format('Y-m-d H:i:s')}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
