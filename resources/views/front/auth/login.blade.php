<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend_assets/login/style.css') }}">
</head>

<body>

    <section>
      
        <area class="back"></area>
        <h1>Emergency Help Center</h1>
        <form method="POST" action="{{ route('patient.login.form') }}">
            @csrf
            <h2>Log in</h2>
            <div>
                <label>User Name</label>
                <input type="text" autocomplete="username" name="username" id="email" placeholder="Enter User Name">
            </div>
            <div>
                <label>Password</label>
                <input type="password" autocomplete="new-password" name="password" placeholder="Enter Password">
            </div>
            <button class="btn" type="submit" value="Log in">Log in</button>
        </form>
    </section>
</body>

</html>