<h1>Login</h1>
<form action="/login" method="post">
    @csrf
    <table>
        <tr>
            <td>User name:</td>
            <td><input type="text" name="userName" placeholder="User name"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" placeholder="Password"></td>
        </tr>
        <tr>
            <td><button type="submit">Log in</button> </td>
        </tr>
    </table>

</form>

