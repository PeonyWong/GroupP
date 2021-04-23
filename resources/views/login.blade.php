@extends('layouts.app')

@section('content')
<div class="border">
    <form method="post">
        <div>
            <h2>Dream Foundation</h2>
            <h3>Login System</h3>
            <table>
                <tr>
                    <!-- field to enter username-->
                    <td><label for="uName">Username: </label></td>
                    <td><input type="text" name="user" id="uName" size="20" required/></td>
                </tr>
                <tr>
                    <!-- field to enter password-->
                    <td><label for="password">Password: </label></td>
                    <td><input type="password" name="password" id="password" size="20" required/></td>
                </tr>
            </table>
            <p>
                <!--buttons to submit and clear data -->
                <input type="reset" name="reset" value="Clear" />
                <input type="submit" name="submit" value="Confirm" />
            </p>
            <p>Do not have account? <a href="/register">Register</a>
       </div>
    </form>
</div>
@endsection
