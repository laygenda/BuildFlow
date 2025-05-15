<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="register-page">
      <div class="overlap-wrapper">
        <div class="overlap">
          <div class="BG">
            <div class="overlap-group">
              <div class="ellipse"></div>
              <div class="div"></div>
            </div>
            <img class="vector" src="img/vector.svg" />
          </div>
          <div class="username">
            <div class="overlap-2">
              <div class="email">EMAIL</div>
              <img class="user" src="img/user.svg" />
            </div>
          </div>
          <div class="password">
            <div class="overlap-2">
              <div class="text-wrapper">PASSWORD</div>
              <img class="lock" src="img/lock.svg" />
            </div>
          </div>
          <div class="overlap-group-wrapper">
            <div class="overlap-2">
              <div class="confirm-password">CONFIRM PASSWORD</div>
              <img class="lock" src="img/image.svg" />
            </div>
          </div>
          <button class="login-btn">
            <div class="register-wrapper"><div class="register">REGISTER</div></div>
          </button>
          <p class="p">Do you have any account ?</p>
          <div class="text-wrapper-2">Login</div>
          <div class="logo">
            <div class="overlap-3">
              <div class="overlap-4">
                <div class="text-wrapper-3">BuildFlow</div>
                <img class="line" src="img/line-7.svg" />
              </div>
              <img class="img" src="img/line-6.svg" />
            </div>
            <img class="line-2" src="img/line-8.svg" />
          </div>
        </div>
      </div>
    </div>
  </body>
</html> 

<!DOCTYPE html>
<html>
<head>
    <title>Register - BuildFlow</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-brown-800">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-brown-700 p-6 rounded-lg shadow-lg">
            <h1 class="text-white text-center text-2xl mb-4">BuildFlow</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-white">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-white">Password</label>
                    <input type="password" name="password" id="password" class="w-full p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-white">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 rounded" required>
                </div>
                <button type="submit" class="w-full bg-orange-500 text-white p-2 rounded">REGISTER</button>
                <p class="text-white text-center mt-4">Do you have an account? <a href="{{ route('login') }}" class="text-orange-300">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>