		@include('layouts.header')

	
		<!-- @if(Session::has('global'))
			<p>{{Session::get('global')}}</p>
		@endif -->
		@yield('content')
	</body>
</html>