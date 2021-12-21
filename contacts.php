<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- faviocn link css -->
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Sthyain | ContactUS</title>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/style.css">
  <style>
    .contacth3 {
      font-size: 45px;
      font-weight: bold;
    }

    .btn {
      font-size: 20px;
    }
    .btn:hover{
      background-color:#fff;
      color:Red;
      font-weight: 600;
    }

    .contactformtext {
      font-size: 18px;
    }
    
    @media only screen and (max-width: 600px)
    {
      .contactformtext {
      font-size: 20px;
    } 
    .contacth3 {
      font-size: 35px;
    }
    }
  </style>

<body onload="loader()">
<div id="loading"></div> 

  <?php $page='contacts'; include ('header.php') ?>

  <div class="">
    <div class="backimg ">
      <h2 class="backimg_h backimgabout"> ❯ Contact <em style="font-size:70px">Us</em> </h2>
      <a href="index.php" class="backimg_a">Home ❯ </a> <span class="text-white backimg_s">Contact us</span>
    </div>
  </div>

  <!-- <section class="contact_section mt-1 mb-1 "> -->
    <!-- <div class="contactsi p-5 pb-5 bg-dark" id="contacts"> -->
    <!-- <div class="container contact-form">
      <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
      </div>
      <form action="form.php" method="post" autocomplete="off">
        <img src="img/us-amico.png" class="img-fluid" alt=""> -->
        <!-- <h3 class="contacth3">Drop Us a Message</h3> -->

        <!-- <div class="row contacttext">

          <div class="col-md-6">
            <div class="form-group ">
              <input type="text" id="name" name="mname" class="form-control contactformtext" placeholder="Your Name *" value=""  required/>
            </div>
            <div class="form-group">
              <input type="email" id="email" name="memail" class="form-control contactformtext" placeholder="Your Email *" value="" required />
            </div>    
            <div class="form-group">
              <input type="text" id="phone" name="mphone" class="form-control contactformtext" placeholder="Your Ph. No. *" value="" minlength="10" maxlength="10"   required />
          </div>        
          </div>

          <div class="col-md-6">
          <div class="form-group">
              <textarea name="mmsg" id="msg" class="form-control" placeholder="Your Message *"
                style="width: 100%; height: 150px;" required></textarea>
            </div>
          </div>
                   
          
          <div class="form-group ml-3">
              <input type="submit" name="btnSubmit" class="btn btn-danger submit" value="Submit" id="submits" />
          </div>
            
        </div> -->

      <!-- </form> -->
      <!-- </div> -->
<!-- 
    </div>
  </section> -->

  <section class="contact_section mt-1 mb-1 ">
    <!-- <div class="contactsi p-5 pb-5 bg-dark" id="contacts"> -->
    <div class="container contact-form">
      <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
      </div>
      <form action="form.php" method="post" autocomplete="off">
        <h3 class="contacth3">Drop Us Message</h3>
        <div class="row contacttext">

          <div class="col-md-6 order-lg-1 order-2">
            <div class="form-group ">
              <input type="text" id="name" name="mname" class="form-control contactformtext" placeholder="Your Name *" value=""
                required />
            </div>
            <div class="form-group">
              <input type="email" id="email" name="memail" class="form-control contactformtext" placeholder="Your Email *"
                value="" required />
            </div>
            <div class="form-group">
              <input type="text" id="phone" name="mphone" class="form-control contactformtext" placeholder="Your Ph. No. *"
                value="" minlength="10" maxlength="10" required />
            </div>
            <div class="form-group">
              <textarea name="mmsg" id="msg" class="form-control contactformtext" placeholder="Your Message *"
                style="width: 100%; height: 150px;" required></textarea>
            </div>
            <div class="form-group ml-1  ">
              <input type="submit" name="btnSubmit" class="btn btn-danger btn-sm submit" value="Submit" id="submits" />
            </div>
          </div>

          <div class="col-md-6 order-lg-2 order-1 ">
            <img src="img/us-amico.png" class="img-fluid" alt="">
          </div>
        </div>
      </form>
      <!-- </div> -->

    </div>
  </section>

  <script src="script/script.js"></script>

  <script>

    $("#submits").click(function () {

      var name = $("#name").val();
      var email = $("#email").val();
      var phone = $("#phone").val();
      var mmsg = $("#msg").val();


      if (name == '' || email == '' || phone == '' || mmsg == '') {
        // console.log(name + email + mmsg + phone)
        //  swal({
        //     title: "fill the data",
        //     text: "You Drop us a massage!",
        //     icon: "error",
        //     timer: 2000,
        //      });
      }
      else {
        swal({
          title: "Your message sucessfully submitted!",
          text: "Thank You! For Giving Your Valuable Time",
          icon: "success",
          timer: 2000,
        });
      }
    });

  </script>


  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <?php include ('footer.php') ?>

</body>

</html>



