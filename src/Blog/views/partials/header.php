<!DOCTYPE html>
<html>
<head>
    <title><?= isset($title) ? $title : 'Mi onisup'; ?></title>
    <link rel="stylesheet" href="/css/main.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/domaines"> Domaines </a>
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
        </li>
    </ul>
</nav>

<div class="container">
