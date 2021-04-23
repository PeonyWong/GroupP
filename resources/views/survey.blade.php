@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <style>

        </style>
    </head>
    <body>
        <div>
            <form method="post">
                <table class="survey">
                    <tr>
                        <th></th>
                        <th>Very Disagree</th>
                        <th>Disagree</th>
                        <th>Medium</th>
                        <th>Agree</th>
                        <th>Very Agree</th>
                    </tr>
                    <tr>
                        <td>1. You prefer indoor activity?</td>
                        <td><input type="radio" style="text-align:center;" name="q1" value="1"></input></td>
                        <td><input type="radio" style="text-align:center;" name="q1" value="2"></input></td>
                        <td><input type="radio" style="text-align:center;" name="q1" value="3"></input></td>
                        <td><input type="radio" style="text-align:center;" name="q1" value="4"></input></td>
                        <td><input type="radio" style="text-align:center;" name="q1" value="5"></input></td>
                    </tr>
                    <tr>
                        <td>2. You prefer stay at home?</td>
                        <td><input type="radio" class="radiobtn" name="q2" value="1"></input></td>
                        <td><input type="radio" class="radiobtn" name="q2" value="2"></input></td>
                        <td><input type="radio" class="radiobtn" name="q2" value="3"></input></td>
                        <td><input type="radio" class="radiobtn" name="q2" value="4"></input></td>
                        <td><input type="radio" class="radiobtn" name="q2" value="5"></input></td>
                    </tr>
                    <tr>
                        <td>3. You prefer stay alone?</td>
                        <td><input type="radio" class="radiobtn" name="q3" value="1"></input></td>
                        <td><input type="radio" class="radiobtn" name="q3" value="2"></input></td>
                        <td><input type="radio" class="radiobtn" name="q3" value="3"></input></td>
                        <td><input type="radio" class="radiobtn" name="q3" value="4"></input></td>
                        <td><input type="radio" class="radiobtn" name="q3" value="5"></input></td>
                    </tr>
                    <tr>
                        <td>4. You prefer listen music instead of chat with friends</td>
                        <td><input type="radio" class="radiobtn" name="q4" value="1"></input></td>
                        <td><input type="radio" class="radiobtn" name="q4" value="2"></input></td>
                        <td><input type="radio" class="radiobtn" name="q4" value="3"></input></td>
                        <td><input type="radio" class="radiobtn" name="q4" value="4"></input></td>
                        <td><input type="radio" class="radiobtn" name="q4" value="5"></input></td>
                    </tr>
                    <tr>
                        <td>5. You will talk to starnger when you are in a party?</td>
                        <td><input type="radio" class="radiobtn" name="q5" value="1"></input></td>
                        <td><input type="radio" class="radiobtn" name="q5" value="2"></input></td>
                        <td><input type="radio" class="radiobtn" name="q5" value="3"></input></td>
                        <td><input type="radio" class="radiobtn" name="q5" value="4"></input></td>
                        <td><input type="radio" class="radiobtn" name="q5" value="5"></input></td>
                    </tr>
                    <tr>
                        <td>6. You will only spend a little time on social media?</td>
                        <td><input type="radio" class="radiobtn" name="q6" value="1"></input></td>
                        <td><input type="radio" class="radiobtn" name="q6" value="2"></input></td>
                        <td><input type="radio" class="radiobtn" name="q6" value="3"></input></td>
                        <td><input type="radio" class="radiobtn" name="q6" value="4"></input></td>
                        <td><input type="radio" class="radiobtn" name="q6" value="5"></input></td>
                    </tr>
                    <tr>
                        <td>7. You will seldom or never use online dating app?</td>
                        <td><input type="radio" class="radiobtn" name="q7" value="1"></input></td>
                        <td><input type="radio" class="radiobtn" name="q7" value="2"></input></td>
                        <td><input type="radio" class="radiobtn" name="q7" value="3"></input></td>
                        <td><input type="radio" class="radiobtn" name="q7" value="4"></input></td>
                        <td><input type="radio" class="radiobtn" name="q7" value="5"></input></td>
                    </tr>
                    <tr>
                        <td>8. You will never go to to somewhere you are not familiar?</td>
                        <td><input type="radio" class="radiobtn" name="q8" value="1"></input></td>
                        <td><input type="radio" class="radiobtn" name="q8" value="2"></input></td>
                        <td><input type="radio" class="radiobtn" name="q8" value="3"></input></td>
                        <td><input type="radio" class="radiobtn" name="q8" value="4"></input></td>
                        <td><input type="radio" class="radiobtn" name="q8" value="5"></input></td>
                    </tr>
                    <tr>
                        <td>9. You will never ask when you have difficulties?</td>
                        <td><input type="radio" class="radiobtn" name="q9" value="1"></input></td>
                        <td><input type="radio" class="radiobtn" name="q9" value="2"></input></td>
                        <td><input type="radio" class="radiobtn" name="q9" value="3"></input></td>
                        <td><input type="radio" class="radiobtn" name="q9" value="4"></input></td>
                        <td><input type="radio" class="radiobtn" name="q9" value="5"></input></td>
                    </tr>
                    <tr>
                        <td>10. Do you think you are an insider?</td>
                        <td><input type="radio" class="radiobtn"name="q10" value="1"></input></td>
                        <td><input type="radio" class="radiobtn"name="q10" value="2"></input></td>
                        <td><input type="radio" class="radiobtn"name="q10" value="3"></input></td>
                        <td><input type="radio" class="radiobtn"name="q10" value="4"></input></td>
                        <td><input type="radio" class="radiobtn"name="q10" value="5"></input></td>
                    </tr>
                </table>
            </form>
            <?php
                echo $message ?? ''
            ?>
        </div>
    </body>
</html>
<?php
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];

    $result = $q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10;

    $message = '';

    if($result <= 20) {
        $message = 'You enjoy outdoor activites!';
    } else if($result >= 21 and $result <= 35) {
        $message = 'You can try to participate more outdoor activities!';
    }else {
        $message = 'You should try to step out of comfort zone!';
    }
?>
@endsection
