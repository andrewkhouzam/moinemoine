



{{Form::open(['route'=>'Users/resetlink'])}}




<div>
{{Form::label('username','username')}}

{{Form::text('username')}}

</div>
<div>
{{Form::label('email','email')}}

{{Form::text('email')}}

</div>



<div>
{{Form::submit('yalla save')}}

</div>
{{Form::close()}}

