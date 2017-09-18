<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YURBISS | YoUR Business IS Shopping</title>

  <link rel="shortcut icon" type="image/x-icon" href="assets/img/yb-favicon.jpg">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,800,900" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


   @yield('content')


   <button onclick="scrolltotop()" id="back_to_top" class="btn btn-info" title="Go to Top">
       <span class="glyphicon glyphicon-chevron-up"></span>
     </button>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.min.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>

    <!-- back_to_top -->
    <script>
      $(document).ready(function() {
        $(window).scroll(function() {
          if ($(window).scrollTop() >= 10) {
            $('#back_to_top').fadeIn();
          } else {
            $('#back_to_top').fadeOut();
          }
        });
      });

      function scrolltotop() {
        $('html, body').animate({
          scrollTop: 0
        }, 500);
      }
    </script>

   <!-- bootstrap validation -->
  <script>
    $(document).ready(function() {
      $('#form_register').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
          membership: {
            validators: {
              notEmpty: {
                message: 'Silahkan pilih membership Anda.'
              }
            }
          },
          friend_code: {
            validators: {
              stringLength: {
                min: 5,
                max: 12,
                message: 'kode referal min 5 sampai 12 karakter'
              },
              notEmpty: {
                message: 'Silahkan masukkan kode referal Anda.'
              },
              regexp: {
                regexp: /^[a-zA-Z0-9]+$/,
                message: 'Hanya bisa huruf dan angka.'
              }
            }
          },
          username: {
            validators: {
              stringLength: {
                min: 5,
                max: 12,
                message: 'username min 5 sampai 12 karakter.'
              },
              notEmpty: {
                message: 'Silahkan masukkan username Anda.'
              },
              regexp: {
                regexp: /^[a-zA-Z0-9]+$/,
                message: 'username hanya bisa huruf dan angka.'
              }
            }
          },
          name: {
            validators: {
              notEmpty: {
                message: 'Silahkan masukkan Nama Lengkap Anda.'
              },
              stringLength: {
                min: 5,
                max: 12,
                message: 'username min 5 sampai 12 karakter.'
              },
              regexp: {
                regexp: /^[a-zA-Z0-9]+$/,
                message: 'username hanya bisa huruf dan spasi.'
              }
            }
          },
          email: {
            validators: {
              notEmpty: {
                message: 'Silahkan masukkan Email Anda.'
              },
              emailAddress: {
                message: 'Alamat email tidak valid'
              }
            }
          },
          password: {
            validators: {
              notEmpty: {
                message: 'Silahkan masukkan password Anda.'
              },
              stringLength: {
                min: 6,
                message: 'Kata sandi min 6 karakter.'
              }
            }
          },
          password_confirmation: {
            validators: {
              stringLength: {
                min: 6,
                message: 'Kata sandi min 6 karakter.'
              },
              notEmpty: {
                message: 'Silahkan ulangi password Anda.'
              }
            }
          },
          mobile: {
            validators: {
              stringLength: {
                min: 10,
                max: 15,
                message: 'No Hp min 10 karakter.'
              },
              notEmpty: {
                message: 'Silahkan masukkan no Handphone Anda.'
              },
              regexp: {
                regexp: /^[0-9]+$/,
                message: 'Hanya bisa diisi dengan Angka.'
              }
            }
          },
          gender: {
            validators: {
              notEmpty: {
                message: 'Silahkan pilih jenis kelamin Anda.'
              }
            }
          }
        }
      })
      .on('success.form.bv', function (e) {
        $('#contact_form').data('bootstrapValidator').resetFrom();
      });
    });
  </script>
</body>

</html>
