@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <span>创建新任务</span>
                    </div>

                    <div class="panel-body">
                        {!! Form::open(['url' => 'task', 'method' => 'POST', 'class'=>'form-groups from-horizontal']) !!}
                        <div class="row form-group{{ $errors->has('name')?' has-error':' ' }}">
                            <div class="col-md-3 col-md-offset-2">
                                {!! Form::label('name', '任务：', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                                @if($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors -> first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-4 form-group">
                            <button class="btn btn-primary form-control">
                                <span class="glyphicon glyphicon-plus"></span>创建
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <span>任务清单</span>
                    </div>

                    <div class="panel-body">
                        {{--@foreach($tasks as $task)--}}
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            {{--<h2>{{ $task -> name }}</h2>--}}
                                            <h2>第一个任务</h2>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-md-offset-2">
                                            {{--<small>{{ $task -> update_at }}</small>--}}
                                            <small>2017年4月21日</small>
                                        </div>
                                        <div class="col-md-3 col-md-offset-2">
                                            <a class="btn btn-danger" href="{{ url('task/') }}"><span class="glyphicon glyphicon-trash"></span>删除任务</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{--@endforeach--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
