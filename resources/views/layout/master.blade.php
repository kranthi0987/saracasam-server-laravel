<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="sarasacasm app">
    <meta name="author" content="sanjay">
    <title>Saracasam app</title>
    <!-- materlize Core CSS -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="Stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
{{----}}
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js" ></script>
</head>
<body id="page-top" class="index">

@include('layout.navigation')

@include('layout.header')

@yield('content')

@include('layout.footer')

</body>
</html>