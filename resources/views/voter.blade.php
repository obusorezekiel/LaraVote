@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{url('/vote')}}">
    <h2>ACES Election 2018</h2>
    {{csrf_field()}}
    
    <label>President</label>
    <select class="form-control" name="president">
        <option value="">...</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select><br/>

        <label> Vice President Academics</label>
    <select class="form-control" name="vp_acad">
        <option value="">...</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select><br/>

        <label>Vice President Administration</label>
    <select class="form-control" name="vp_admin">
        <option value="">...</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select><br/>
    
    
        <label>General Secretary</label>
    <select class="form-control" name="gen_sec">
        <option value="">...</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select><br/>

    
        <label>Assistant Secretary/Treasurer</label>
    <select class="form-control" name="ass_sec">
        <option value="">...</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select><br/>

    
        <label>Financial Secretary</label>
    <select class="form-control" name="fin_sec">
        <option value="">...</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select><br/>

    
        <label>Director of Welfare</label>
    <select class="form-control" name="welfare">
        <option value="">...</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select><br/>

    
        <label>Prayer Co-ordinator</label>
    <select class="form-control" name="prayer">
        <option value="">...</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select><br/>

    
        <label>ITT HEAD</label>
    <select class="form-control" name="itt">
        <option value="">...</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select><br/>

    
        <label>RET HEAD</label>
    <select class="form-control" name="ret">
        <option value="">...</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select><br/>

    
        <label>VYBES HEAD</label>
    <select class="form-control" name="vybes">
        <option value="">...</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select><br/>

    
        <label>MNT HEAD</label>
    <select class="form-control" name="mnt">
        <option value="">...</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select><br/>


    <input type="submit" class="btn btn-primary" value="Vote" name="vote"/>
    </form>
</div>


@endsection