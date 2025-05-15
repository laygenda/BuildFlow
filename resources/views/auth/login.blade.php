{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <!-- ✅ CSS Laravel asset() helper -->
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styleguide.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <div class="login-page">
      <div class="overlap-wrapper">
        <div class="overlap">
          <div class="BG">
            <div class="overlap-group">
              <div class="ellipse"></div>
              <div class="div"></div>
            </div>
            <img class="vector" src="{{ asset('img/vector.svg') }}" />
          </div>
          <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="username">
                <div class="overlap-2">
                  <div class="email">EMAIL</div>
                  <img class="user" src="{{ asset('img/user.svg') }}" />
                  <input type="email" name="email" required style="position:absolute;top:0;left:0;width:100%;height:100%;opacity:0;">
                </div>
              </div>
              <div class="password">
                <div class="overlap-2">
                  <div class="text-wrapper">PASSWORD</div>
                  <img class="lock" src="{{ asset('img/lock.svg') }}" />
                  <input type="password" name="password" required style="position:absolute;top:0;left:0;width:100%;height:100%;opacity:0;">
                </div>
              </div>
              <button class="login-btn" type="submit">
                <div class="login-wrapper"><div class="login">LOGIN</div></div>
              </button>
          </form>
          <p class="don-t-have-an">Don&#39;t have an account ?</p>
          <div class="text-wrapper-3">
            <a href="{{ route('register') }}" style="color: white; text-decoration: underline;">Register</a>
          </div>
          <div class="logo">
            <div class="overlap-3">
              <div class="overlap-4">
                <div class="text-wrapper-2">BuildFlow</div>
                <img class="line" src="{{ asset('img/line-7.svg') }}" />
              </div>
              <img class="img" src="{{ asset('img/line-6.svg') }}" />
            </div>
            <img class="line-2" src="{{ asset('img/line-8.svg') }}" />
          </div>
        </div>
      </div>
    </div>
</body>
</html> --}}







{{-- <!DOCTYPE html>
<html>
<head>
    <title>Login - BuildFlow</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-brown-800">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-brown-700 p-6 rounded-lg shadow-lg">
            <h1 class="text-white text-center text-2xl mb-4">BuildFlow</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-white">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-white">Password</label>
                    <input type="password" name="password" id="password" class="w-full p-2 rounded" required>
                </div>
                <button type="submit" class="w-full bg-orange-500 text-white p-2 rounded">LOGIN</button>
                <p class="text-white text-center mt-4">Don't have an account? <a href="{{ route('register') }}" class="text-orange-300">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html> --}}



<!DOCTYPE html>
<html>
<head>
    <title>Register - BuildFlow</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="relative">
    <div class="wave-bg"></div>
    <div class="flex items-center justify-center min-h-screen relative">
        <div class="form-container">
            <h1 class="logo">BuildFlow</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="input-label block">Email</label>
                    <input type="email" name="email" id="email" class="input-field" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="input-label block">Password</label>
                    <input type="password" name="password" id="password" class="input-field" required>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="input-label block">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="input-field" required>
                </div>
                <button type="submit" class="submit-btn">REGISTER</button>
                <p class="link-text">Do you have an account? <a href="{{ route('login') }}">Login</a></p>
            </form>
        </div>
        <div class="circle-bg circle-bg-1"></div>
        <div class="circle-bg circle-bg-2"></div>
    </div>
</body>
</html>