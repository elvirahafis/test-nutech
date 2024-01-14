<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url() ?>styel.css">
    <!-- Main css -->
 

</head>
<body>

    <div class="main">

        <!-- Sign in form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Silahkan Log in</h2>
                        <!-- <form method="POST" class="register-form" id="register-form"> -->
                           <!-- <form method="POST" class="register-form" id="login-form"> -->
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" onClick='Login()' class="form-submit" />
                            </div>
                        <!-- </form> -->
                    </div>
                    <div class="signup-image">
                        <img src="<?= base_url() ?>image/Frame98699.png"  alt="sing up image">
                       
                    </div>
                </div>
            </div>
        </section>



    </div>
    <!-- JS -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4/dist/css/bootstrap.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript">
  function Login() {
       email = $('#email').val();
       password = $('#password').val();
      console.log(email,password)
      //validasi
      if(email ==""){
        Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Silahkan Masukan Fullname'
            })
            return false;
      } else if (password ==""){
              Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Silahkan Masukan Password'
            })
            return false;
      }


      var formData = new FormData();
      formData.append('email', email);
      formData.append('password', password);
      $.ajax({
              url: '<?php echo base_url();?>login',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                var data1= JSON.parse(data);
                console.log(data1)
                    if (data1.status == 1) {
                    Swal.fire(
                        'Berhasil   !',
                        data1.pesan
                    ).then(function() {
                         location.href = "<?= site_url('home') ?>"    
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: data1.pesan
                    }).then(function() {
                     
                    });
                }
            
            }

        });
  }
</script>