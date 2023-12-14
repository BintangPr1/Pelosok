@vite(['resources/css/register.css'])



  <div class="wrapper">
    <img class="corner-image" src="/images/bunga-2.png" alt="">
    <img class="corner-image2" src="/images/bunga-6.png" alt="">
    <h2>Register</h2>
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
    <form action="{{ route('register.post') }}" method="POST">
      @csrf
      <div class="input-box">
        <input type="text" placeholder="Enter your Username" name="name">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email">
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="password">
      </div>
      <div class="policy">
        <input type="checkbox" required>
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="{{ route('login') }}">Login now</a></h3>
      </div>
    </form>
  </div>


