
<!-- name: <input type="text" name="name"><br>
age: <input type="text" name="age"><br>
type : <input type="text" name="type">
<input type="submit" value="Submit">

 -->
{{Form::open(['route'=>'Users.resetpassword']);
}}
{{$User}}

{{Form::hidden('user', $User)}}

<div>
{{Form::label('Enter new password','Enter new password')}}

{{Form::text('password')}}

</div>
<div>
{{Form::label('retype password','retype password')}}

{{Form::text('rpassword')}}

</div>



<div>
{{Form::submit('yalla save')}}

</div>
{{Form::close()}}

