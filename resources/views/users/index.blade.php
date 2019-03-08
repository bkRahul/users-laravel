<!DOCTYPE html>
<html>
<head>
	<title>Users Document</title>
</head>
<body>
<h1>All Uers</h1>
@foreach($users as $user)
	<li>{{$user->name}}</li>
@endforeach

<h2>Add Users</h2>
<form method="POST" action="/users">
{{ csrf_field() }}
<p><input type="text" name="name" placeholder="Name" required></p>
<p><input type="email" name="email" placeholder="Email" required></p>
<p><input type="password" name="password" placeholder="Password" required></p>
<button>Add User</button>
</form>
</body>
</html>