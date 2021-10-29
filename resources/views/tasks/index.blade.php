@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All tasks</div>

                <div class="panel-body">
                    <!-- Отображение ошибок проверки ввода -->
                @include('common.errors')

                <!-- Форма новой задачи -->
                    <form action="{{ route('tasks.store') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">Задача</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="task" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i> Добавить задачу
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @if (count($tasks) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tasks
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped task-table">
                                <thead>
                                    <tr>
                                        <th>Task</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text">
                                            <div>{{ $task->name }}</div>
                                        </td>
                                        <td>
                                            <!-- TODO: Кнопка Удалить -->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
