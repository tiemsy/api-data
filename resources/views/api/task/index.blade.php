@extends('layouts.app')
@section('title', 'Tasks list')

@section('content')
    <div class="container-fluid">
        <div class="col-12 justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tasks Table</h3>

                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>User</th>
                                <th>Registered At</th>
                                <th>Modify</th>
                            </tr>
                            @php
                                for($i = 0; $i < 10; $i++)
                                {
                            @endphp
                            <tr>
                                <td>{{ $tasks['tasks'][$i]['id'] }}</td>
                                <td>{{ $tasks['tasks'][$i]['name'] }}</td>
                                <td>{{ $tasks['tasks'][$i]['description'] }}</td>
                                <td>
                                    @if($tasks['tasks'][$i]['status'] == 1)
                                        Open
                                    @else
                                        Close
                                    @endif
                                </td>
                                <td>
                                    @if(!empty($tasks['tasks'][$i]['user']))
                                        {{ $tasks['tasks'][$i]['user']['name'] }}
                                    @endif
                                </td>
                                <td>
                                    @php
                                        echo date('M D Y', strtotime($tasks['tasks'][$i]['user']['created_at']));
                                    @endphp
{{--                                    format('MMMM Do YYYY')--}}
                                </td>
                                <td>
                                    <a href="#" id="add.task.id">
                                        <i class="fa fa-edit blue"></i>
                                    </a> |
                                    <a href="#" id="del.task.id">
                                        <i class="fa fa-trash red"></i>
                                    </a>
                                </td>
                            </tr>
                            @php
                                }
                            @endphp
                        </tbody>
                    </table>
                </div>

            </div>

{{--            @forelse($tasks as $task)--}}
{{--                {{ dump($task) }}--}}
{{--            @empty--}}
{{--                <h2>No task available</h2>--}}
{{--            @endforelse--}}
        </div>
    </div>
@endsection
