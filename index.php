<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Installation</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <style>

@import url('https://fonts.googleapis.com/css?family=Roboto:300');

body {
  text-align:center;
  background:linear-gradient(141deg, #ccc 25%, #eee 40%, #ddd 55%);
  color:#555;
  font-family:'Roboto';
  font-weight:300;
  font-size:32px;
  padding-top:40vh;
  height:100vh;
  overflow:hidden;
   -webkit-perspective: 1000;
  -webkit-transform: translate3d(0,0,0);
}

.animate {
  display:inline-block;
  overflow:hidden;
  white-space:nowrap;
}

.animate:first-of-type {    /* For increasing performance 
                       ID/Class should've been used. 
                       For a small demo 
                       it's okaish for now */
  animation: showup 7s;
}

.animate:last-of-type {
  width:0px;
  animation: reveal 7s;
}

.animate:last-of-type span {
  margin-left:-255px;
  animation: slidein 7s;
}

@keyframes showup {
    0% {opacity:0;}
    20% {opacity:1;}
    80% {opacity:1;}
    100% {opacity:0;}
}

@keyframes slidein {
    0% { margin-left:-600px; }
    20% { margin-left:-600px; }
    35% { margin-left:0px; }
    100% { margin-left:0px; }
}

@keyframes reveal {
    0% {opacity:0;width:0px;}
    20% {opacity:1;width:0px;}
    30% {width:355px;}
    80% {opacity:1;}
    100% {opacity:0;width:355px;}
}


p {
  font-size:12px;
  color:#999;
  margin-top:200px;
}
    </style>


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="animate">QUICK </div>
            <div class="animate">
                <span>Installation Setup</span>
            </div>
             
        </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>