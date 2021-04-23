@extends('layouts.app')

@section('content')

<div>
    <h2>Member Register</h2>
    <form method="post">
        <table>
            <tr>
                <td>
                    <label for="fname">First Name:<sup>*</sup> </label>
                </td>
                <td>
                    <input type="text" name="fname" pattern="[a-zA-Z]{2,20}" size="40" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="lname">Last Name:<sup>*</sup> </label>
                </td>
                <td>
                    <input type="text" name="lname" pattern="[a-zA-Z]{2,20}" size="40" required/>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="gender">Gender:<sup>*</sup> </label>
                </td>
                <td>
                    <select name="gender" id="gender">
                        <option value="male">M</option>
                        <option value="female">F</option>
                        <option value="">Doesn't matter</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:<sup>*</sup> </label>
                </td>
                <td>
                    <input type="email" name="email" size="40" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mobile">Mobile:<sup>*</sup> </label>
                </td>
                <td>
                    <input type="tel" name="mobile" pattern="[0-9]{8}" required/>
                </td>
            </tr>


        </table><br>
        <input type="submit" name="submit" value="Submit" />
        <input type="reset" name="reset" Value="Clear" />
    <form>
</div>
@endsection
