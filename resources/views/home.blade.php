@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to the Election Portal {{ Auth::user()->name}}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br/><br/>

                    <a href="/vote" class="btn btn-primary">Click Here to start Voting</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
