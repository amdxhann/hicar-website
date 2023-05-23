<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('web/css/singup.css') }}" />
    <link rel="shortcut icon" href="{{ asset('web/css/images/car-sport.svg') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <script src="{{ asset('web/js/validasi_signup.js') }}"></script>
  </head>
  
</head>
  <body>
    <div class="container">
      <div class="jumbopict"><img src="{{ asset('web/images/login-admin.gif') }}"  style="margin-left: 100px; margin-top: 60px;"></div>
      <div class="login">
        <div class="signin">
          <a href="/index" class="back" aria-label="Profile">
            <ion-icon name="arrow-undo-circle-outline"></ion-icon>
          </a>
          <h1 style="margin-bottom: 50px;">Create an account</h1>
        </div>

        <div class="forms">
          <form action="/web.login.signUpAdmin" id="form" method="POST">  
            @csrf            
            <div class="input-control">
              <label for="email">Email Adress</label>
              <input type="email" name="email" id="email" required/>
              <div class="error"></div>
            </div>
            <div class="input-control">
              <label for="nama">Username</label>
              <input type="text" name="nama" id="nama" required/>
              <div class="error"></div>
            </div>
            <div class="input-control">
              <label for="alamat">Alamat</label>
              <input type="text" name="alamat" id="alamat" required/>
              <div class="error"></div>
            </div>
            <div class="input-control">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" id="tanggal_lahir" required/>
              <div class="error"></div>
            </div>
            <div class="input-control">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select id="jenis_kelamin" name="jenis_kelamin" class="input-control" required style="  border: 2px solid #f0f0f0; border-radius: 4px; display: block; font-size: 12px; padding: 10px; width: 104%;">
                <option value="KTP">Pria</option>
                <option value="SIM">Wanita</option>
              </select>
            </div> <br>
            <div class="input-control">
              <label for="password">Password</label>
              <input type="Password" name="password" id="password" required/>
              <div class="error"></div>
            </div>
            <div class="termsOfUse">
              <p style="margin-bottom: 0px;">Already have an account? 
                <a href="/loginAdmin">Login</a>
              </p>
              <p>
                By creating an account, you aggre to our
                <a href="">Terms of Use</a> and <a href="">Privacy Policy</a>
              </p>
            </div>
            <button type="submit" class="btn-submit">Create an account</button>
          </form>
        </div>
      </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
