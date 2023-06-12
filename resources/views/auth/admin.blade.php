<!--Fonts Google-->
<html lang="en">
<head>
<title>Admin Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
        background: #ffccff;
    }
    .box{
        width: 300px;
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #191919;
        text-align: center;
        border-radius: 50px;
        box-shadow: 10px 10px 20px #000000;
    }
    .box h1{
        color: white;
        text-transform: uppercase;
        font-weight: 300px;
    }
    .box input[type="text"]{
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #800080;
        padding: 14px 10px;
        width: 200px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
    }
    .box input[type="password"]{
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #990099;
        padding: 14px 10px;
        width: 200px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
    }
    .box input[type="text"]:focus{
        width: 280px;
        border-color: #ff99ff;
    }
    .box input[type="password"]:focus{
        width: 280px;
        border-color: #ff99ff;
    }
    .box input[type="submit"]{
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #990099;
        padding: 14px 40px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
    }
    .box input[type="submit"]:hover{
        background: #ff99ff;
    }
</style>
<body>
<form class="box" method="POST" action="{{ route('login') }}">
    @csrf
    <h1>Login</h1>
    <input type="text" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <input type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Password">
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <input type="submit" class="submit" value="Login">
</form>
</body>
</html>
