@extends('layouts.app')

@section('content')
<h1>Program Hightlight</h1>
    <table>
        <tr>
            <td>
                <div class="container">
                    <a href="emotion.php">
                    <img src="emotion.jpeg" class="image">
                </div>
            </td>
            <td>
                <div class="container">
                    <a href="health.php">
                    <img src="healthLife.png" class="image">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="container">
                    <a href="summer.php">
                    <img src="summer.jpeg" class="image">
                </div>
            </td>
            <td>
                <div class="container">
                    <a href="/survey"><img src="survey.jpeg" class="image"></a>
                </div>
            </td>
        </tr>
    </table>
</div>

@endsection
