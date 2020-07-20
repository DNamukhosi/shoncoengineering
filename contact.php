<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company</title>

  <link href="https://fonts.googleapis.com/css2?family=Aleo&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/style3.css">
  <link rel="stylesheet" href="css/rellax.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

</head>

<body>

  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">

      <div class="row" style="height:100vh;">

        <div class="col-4 col-md-4">
          <div id="dismiss">
            <img src="images/signs.svg" alt="">

            <!-- <i class="fas fa-times"></i> -->
          </div>
        </div>
        <div class="col-8 col-md-8 text-center">
          <ul class="list-unstyled components">
            <!-- <p>Dummy Heading</p> -->
            <!-- <li class="active">
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                  <a href="#">Home 1</a>
                </li>
                <li>
                  <a href="#">Home 2</a>
                </li>
                <li>
                  <a href="#">Home 3</a>
                </li>
              </ul>
            </li> -->

            <!-- <li> -->
            <!-- <a href="#">About</a> -->
            <!-- <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                  <a href="#">Page 1</a>
                </li>
                <li>
                  <a href="#">Page 2</a>
                </li>
                <li>
                  <a href="#">Page 3</a>
                </li>
              </ul> -->
            <!-- </li> -->
            <li>
              <a href="index">Home</a>
            </li>

            <li>
              <a href="company">Our Company</a>
            </li>

            <li>
              <a href="services">Services</a>
            </li>

            <li>
              <a href="products">Products</a>
            </li>

            <li>
              <a href="#">Contact Us</a>
            </li>
          </ul>
        </div>

      </div>




    </nav>

    <nav class="navbar specialNav">

      <span id="sidebarCollapse">
        <!-- <i class="fas fa-bars"></i> -->
        <img src="images/menu.svg" alt="">
      </span>

    </nav>

  </div>


  <!-- MAIN NAVBAR -->

  <nav class="navbar mainNav fixed-top">
    <a class="navbar-brand" href="index">
      <img src="images/logo.png" alt="logo" id="logo">
    </a>

    <div class="collapse navbar-collapse">

    </div>
  </nav>


  <div class="container contact mb-5">

    <h1>Contact Us</h1>

    <p class="my-4 text-center">For more information on any of our products and to place an order or set up <br> an account, please call, email or complete the form below.</p>

    <div class="row justify-content-md-center">
      <div class="col-md-10">

        <div class="row contactInfo">

          <div class="col-md-6 border-right text-right pt-2">
            <p>Ngara Road</p>
            <p>Nairobi, Kenya</p>
          </div>

          <div class="col-md-6 pt-2">

            <p><strong>T:</strong> +254 7098765</p>
            <p><strong>E:</strong> info@shoncoeng@gmail.com</p>
            <p><strong>W:</strong> www.shoncoengineering.com</p>

          </div>
        </div>

      </div>
    </div>



    <div class="row justify-content-md-center">
      <div class="col-md-6">
        <form class="needs-validation" id="" action="mail.php" method="post">

          <div class="form-group">
            <label for="fullName">Full Name <span>*</span> </label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
          </div>


          <div class="form-group">
            <label for="companyName">Company Name <span>*</span> </label>
            <input type="text" class="form-control" id="companyName" name="companyName" required>
          </div>

          <div class="row">
            <div class="col-md-7">
              <div class="form-group">
                <label for="email"> Email <span>*</span> </label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="phone"> Phone Number <span>*</span> </label>
                <input type="text" class="form-control" id="phone" name="phone" required>
              </div>
            </div>
          </div>


          <div class="form-group">
            <label for="comments">Comments</label>
            <textarea class="form-control" id="comments" rows="3" name="comments" required></textarea>
          </div>


          <!-- Notifications for 'error' Or 'successfully'-->
          <div class="mailResponse" style="display:none;">
            <div class="alert alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
              <p class="mailResponseText"></p>
            </div>
          </div>

          <button class="btn submitBtn mt-3" type="submit">SUBMIT</button>


        </form>
      </div>
    </div>



  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#sidebar").mCustomScrollbar({
        theme: "minimal"
      });

      $('#dismiss, .overlay').on('click', function() {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
      });

      $('#sidebarCollapse').on('click', function() {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });
    });
  </script>
</body>

</html>
