<ul>
@foreach($users as $user)
    <li> {{$user->email}} | {{$user->name}} | {{$user->name}}</li>
    @endforeach
</ul>