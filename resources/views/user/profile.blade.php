<h1>Admin panel</h1>

<a href="{{ url('/create') }}">Add User</a>
<table border="1">
    <th>Name</th>
    <th>Password</th>
    <th>ID</th>
    <th>Email</th>
    <th>Email Verified At</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Update</th>
    <th>Delete</th>

@foreach($users as $user)
    <tr>
        <td>{{$user->name}} </td>
        <td>{{$user->password}}</td>
        <td>{{$user->id}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->email_verified_at}}    </td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->updated_at}}</td>
        <td><a href="{{url('/update?id=').$user->id}}">Update</a></td>
        <td><a href="{{ url('/delete?id=' . $user->id) }}" onclick="return confirm('Weet je zeker dat je deze gebruiker wilt verwijderen?')">Delete</a></td>
    </tr>
@endforeach
</table>