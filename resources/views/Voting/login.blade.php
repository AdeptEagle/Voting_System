<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
  <link rel="stylesheet" href="{{ asset('Css/login.css') }}">
</head>
<body>
  <div class="container">
    <div class="left-side">
      <h1>Hello, welcome!</h1>


      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
                @endforeach
          </ul>
        </div>
      @endif


      <form method="POST" action="{{ route('Voting.Home') }}">
      @csrf
      <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="username">
      </div>
      <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="*******">
      </div>
      <div class="checkbox">
          <input type="checkbox" id="remember-me">
          <label for="remember-me">Remember me</label>
      </div>
      <button type="submit" class="button">Login</button>
      <div id="error-message"></div>
      </form>

    </div>
    <div class="right-side">
      <div class="shape"></div>
      <img src="{{ asset('Images/LOGO.jpg') }}" alt="Image" class="login-image">
    </div>
  </div>
</body>
</html>