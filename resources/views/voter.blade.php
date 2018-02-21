@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{url('/vote')}}">
    <h2> Voter Authentication</h2>
    {{csrf_field()}}
    <label>User_ID</label>
    <input type="text" class="form-control" name="user" placeholder="User_ID">
    
    <label>Token Input</label>
    <input type="password" class="form-control" name="token" placeholder="User_ID"><br/>
    
    <input type="submit" class="btn btn-primary" value="Enter & Vote" name="vote"/>
    </form>
</div>


@endsection