@extends('layouts.app')

@section('content')
<div>
    <h2>Contact Us</h2>
    <p>Address: No.2, G/F, Sau On House, Sau Mau Ping Estate, Kowloon<br>Tel: 2990-1122</p>
    <p>If you want to get more information, please fill in the below form to let us know, we will reply within 2 - 3 working days.</p>
    <form action="post">
        <table>
            <tr>

                <td>
                    <!-- field to enter firstname-->
                    <label for="fname">First Name:<sup>*</sup></label>
                </td>
                <td>
                    <label for="lname">Last Name:<sup>*</sup></label>
                </td>
            </tr>
            <tr>
                <td>
                    <!-- field to enter lastname-->
                    <input type="text" name="fname" id="fname" size="20" required/>

                </td>
                <td>
                    <input type="text" name="lname" id="lname" size="20" required/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <!-- field to enter email-->
                    <label for="email">Email:<sup>*</sup></label><br>
                    <input type="email" name="eamil" id="email" size="40" required/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <!-- field to enter message-->
                    <label for="message">Message:<sup>*</sup> </label><br>
                    <textarea id="message" name="message" rows="6" cols="50">Please fill in the message if you have anything to tell us!</textarea>
                </td>
            </tr>
        </table>
        <input type="reset" name="reset" value="Clear" />
        <input type="submit" name="submit" value="Confirm"/>
    </form>

           </div>
@endsection
