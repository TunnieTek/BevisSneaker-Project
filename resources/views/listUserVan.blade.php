<table> 
    <thead>
        <th>STT</th>
        <th>userName</th>
        <th>userEmail</th>
        <th>userRole</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody>
        @foreach ($user as $key => $value) 
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $value -> user_name}}</td>
                <td>{{ $value -> user_email}}</td>
                <td>{{ $value -> role}}</td>
                <td>
                    <a href="{{ route('editUser', $value -> user_id) }}">Edit</a>
                </td>
                <td>
                    <a href="{{ route('deleteUser', $value -> user_id) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>