@extends('layouts.app')

@section('content')
<html>
    <head>
        <style>
            div.gallery {
              margin: 5px;
              border: 1px solid #ccc;
              float: left;
              width: 180px;
            }

            div.gallery:hover {
              border: 1px solid #777;
            }

            div.gallery img {
              width: 100%;
              height: auto;
            }

            div.desc {
              padding: 15px;
              text-align: center;
            }
        </style>
    </head>
    <body>

        <div class="gallery">
            <a target="_blank" href="album1.jpg"><img src="img_5terre.jpg" alt="activity1" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="album2.jpg"><img src="album2.jpg" alt="activity2" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="album3.jpg"><img src="album3.jpg" alt="activity3" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="album4.jpg"><img src="album4.jpg" alt="activity4" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </body>
</html>
@endsection
