<?php
$_POST['$title'] = "Gypsy Swing Revue | Contact!";
include("../views/header.php");
?>


<?php
include("../views/background.php");
?>

<?php
include("../views/navigation.php");
?>

<!--FEATURES -->

<div class="row">
  <div class="medium-12 columns">
    <div class="panel mypanel">
      <div id="submitted">
        <h5>Contact Us!</h5>
        <p>
        <blockquote>
          For booking information, contact:<br>
          Elliot Reed at 303.745.7944
          or use the form.<br>
        </blockquote>
        </p>

        <form data-abide="ajax" id="myForm">
          <div class="name-field">
            <label for='name'>Your Name <small>required</small>
              <input type="text" name="name" id="name" required pattern="[a-zA-Z]+">
            </label>
            <small class="error">Name is required.</small>
          </div>

          <div class="email-field">
            <label for='email'>Email <small>required</small>
              <input type="email" name="email" id="email" required>
            </label>
            <small class="error">An email address is required.</small>
          </div>
          <div class="text">
            <label for='message'>Message <small>required</small>
              <textarea name="message" id="message" required pattern="[a-zA-Z]+"></textarea>
            </label>
            <small class="error">A message is required.</small>
          </div>

          <button type="submit">Send Message
          </button>

        </form>

        <script>
          $('#myForm').submit(function(e) {
            //prevent default form submitting.
            e.preventDefault()

            $(this).on('valid', function() {
              var name = $("input#name").val();
              var email = $("input#email").val();
              var message = $("textarea#message").val();

              //Data for reponse
              var dataString = 'name=' + name +
                '&email=' + email +
                '&message=' + message;

              //Begin Ajax call
              $.ajax({
                type: "POST",
                url: "../php/contact-handler.php",
                data: dataString,
                //cache: false,
                success: function(data) {
                  $('#submitted').html("<div id='thanks'></div>");
                  $('#thanks').html("<h4>Thank you for contacting Gypsy Swing Revue!</h4>")
                    .append("<p>Your message has been sent to Elliot Reed.<br/>You will be contacted shortly;)</p>")
                    .hide()
                    .fadeIn(1500);
                },
              }); //ajax call , for append Dear "+ name +", 
              return false;
            });
          });
        </script>
      </div>
    </div>
  </div>
</div>



<?php
include("../views/footer.php");
?>



<!-- END FOOTER-->


</body>

</html>