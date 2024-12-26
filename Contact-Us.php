<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Contact Us</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "sameAs": []
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Contact Us">
  <meta property="og:type" content="website">
</head>

<body class="u-body" style="background-color: white;">
  <?php
include "partials/_header.php";
  ?>
  <div class="">
    <form class="contact-form" action="contact_form_connect.php" method="POST">
      <h2 class="head"> REACH US </h2>
      <div class="row gutters" style="margin-right:10px">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="mb-3 ">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

          <div class="form-group">
            <label for="mob_num" class="form-label">Mobile Number</label>
            <input type="number" class="form-control" name="mob_num" id="mob_num">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"> </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="form-group">
            <label for="country" class="form-label">Country/Region</label>
            <input type="text" class="form-control" name="country" id="country">
          </div>
        </div>
      </div>
        
          <div class="form-group" style="margin-right: 10px;">
            <label for="Textarea" class="form-label">How can we help you?</label>
            <textarea class="form-control" name="helpdesk" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          
        
      </div>

      <center>
        <button type="submit" class="btn btn-primary">Submit</button>
      </center>
      <br>
    </form>
    </div>

    <?php
    include "partials/_footer.php";
    ?>
  </body>

</html>