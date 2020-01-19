@extends('layout')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-4 mx-auto d-block" style="margin-top: 10%">
            @if(session('loginError'))
                <div class="alert alert-danger">
                    <p> <i class="fas fa-dizzy" style='font-size:20px; padding-top: 10px;'></i> {{ session('loginError')  }} </p>
                </div>
            @endif
            <form class="form-horizontal" method="post" action="{{  route('admin.post.login')  }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="userName" class="col-sm-12 control-label">username</label>
                    <div class="col-sm-12">
                        <input type="password" class="form-control" name="userName" id="userName">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Password" class="col-sm-2 control-label">password</label>
                    <div class="col-sm-12">
                        <input type="Password" class="form-control" name="Password" id="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-12 col-sm-12 text-center">
                        <button type="submit" class="btn btn-success">Enter</button>
                    </div>
                </div>
        </form>
        </div>
    </div>
@stop