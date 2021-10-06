<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible"content="IE=edge">

<meta name="viewport"content="width=device-width, initial-scale=1">

<meta name="description"content="">

<meta name="author"content="">

<meta http-equiv="Content-Type"content="text/html; charset=UTF-8">

<meta name="csrf-token"content="{{ csrf_token() }}">

<link rel="icon"type="image/png" sizes="16x16"href="{{ asset('assets/images/favicon.png') }}">

<title>Task Management</title>
    <title>Shopping Cart</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

<div style="float: right; margin-right: 30px;">
    @if (session()->has('user'))
    <a href="#">{{ session()->get('user')->name }}</a> |
    @endif
    <a href="dashboard.php">Home</a> | <a href="{{ url('/view-cart') }}">View Cart</a> | <a href="{{ url('/logout') }}">Logout</a>
</div>

