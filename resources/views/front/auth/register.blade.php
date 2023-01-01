<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend_assets/login/style.css') }}">
</head>

<body style="overflow: scroll;">
    <section>
        <area class="back"></area>
        <h1>Emergency Help Center</h1>

        <form method="POST" action="{{ route('patient.register.form') }}">
            @csrf
            <h2>Create New Account</h2>
            <div>
                <label>User Name</label>
                <input type="text" autocomplete="username" name="username" id="username"
                    placeholder="Enter User Name"><br>
                @error('username')
                    <span class="invalid-feedback" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <label>E-Mail</label>
                <input type="email" autocomplete="username" name="email" id="username" placeholder="Enter Email">
                <br>
                @error('email')
                    <span class="invalid-feedback" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <label>Password</label>
                <input type="password" autocomplete="new-password" name="password" placeholder="Enter Password">
                <br>
            </div>
            <button class="btn" type="submit" value="Log in">Create</button>
            <br>
        </form>
    </section>
</body>

</html>
