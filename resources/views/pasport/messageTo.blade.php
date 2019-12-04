<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>

</head>
<body>
   <h3>{{$Subject}}</h3>
   <p>{{$body}}</p>
   <img src="{{asset('storage/image/$img')}}" alt="QR" title="QR" style="display:block; margin-left: auto; margin-right: auto;" width="200" height="200" data-auto-embed="attachment"/>   
</body>
</html>