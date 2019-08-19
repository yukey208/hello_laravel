<a href="{{route('users.show',$user->id)}}">
	<image src="{{$user->gravatar('120')}}" alt = "{{$user->name}}" class="gravatar"/>
</a>
<h1>{{$user->name}}</h1>