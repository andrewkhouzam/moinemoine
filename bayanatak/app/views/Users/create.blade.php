
<!-- name: <input type="text" name="name"><br>
age: <input type="text" name="age"><br>
type : <input type="text" name="type">
<input type="submit" value="Submit">

 -->
{{Form::open(['route'=>'Users.store'])}}

<div>
{{Form::label('name','name')}}

{{Form::text('name')}}

</div>

<div>
{{Form::label('username','username')}}

{{Form::text('username')}}

</div>
<div>
{{Form::label('email','email')}}

{{Form::text('email')}}

</div>
<div>
{{Form::label('password','password')}}

{{Form::password('password')}}

</div>




<div>
{{Form::submit('yalla save')}}

</div>
{{Form::close()}}

