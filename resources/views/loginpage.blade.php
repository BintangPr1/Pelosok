@vite(['resources/css/login.css'])



  <div class="wrapper">
    <img class="corner-image" src="/images/bunga-2.png" alt="">
    <img class="corner-image2" src="/images/bunga-6.png" alt="">
    <h2>Login</h2>
    <div class="container">
      <div class="mt-5">
        @if($errors->any())
          <div class="col-12">
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
          </div>
          @endif

          @if(session()->has('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
          @endif

          @if(session()->has('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
          @endif
      </div>
    </div>
    <form action="{{ route('login.post') }}" method="POST">
      @csrf
      <div class="input-box">
        <input type="text" placeholder="Username" name="name">
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name= "password">
      </div>
      <div class="text">
        <h3>Create <a href="{{ route('register') }}">Account</a></h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Login">
      </div>

    </form>
  </div>


