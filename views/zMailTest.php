<!doctype html>


<head>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
  </script>
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/foundation.css" />
  <link href="../font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../css/app.css">
  <script src="../js/vendor/modernizr.js"></script>

</head>

<body>


  <div id="here">Test</div>



  <!--<a href="http://gypsyswingrevue.com" class="button"  data-reveal-id="myModal">
    Click Me For A Modal
</a>
<div id="myModal" class="reveal-modal" data-reveal><iframe width="100%" height="800" src="http://gypsyswingrevue.com/contact.php"></iframe>
</div>-->


  <form data-abide="ajax" id="myForm">
    <div class="name-field">
      <label>Your name <small>required</small>
        <input type="text" required pattern="[a-zA-Z]+">
      </label>
      <small class="error">Name is required and must be a string.</small>
    </div>
    <!--  <div class="email-field"> 
		<label>Email <small>required</small> 
			<input type="email" required> 
		</label> 
		<small class="error">An email address is required.</small> 
	</div>-->

    <button type="submit">Submit</button>

  </form>

  <script>
    $('#myForm').submit(function(e) {
      //prevent default form submitting.
      e.preventDefault()


      $(this).on('valid', function() {
        var name = $("input#name").val();
        //  var email = $("input#email").val();
        //var message = $("textarea#message").val();

        //Data for reponse
        var dataString = 'name=' + name; // +
        //      '&email=' + email +
        //'&message=' + message;

        //Begin Ajax call
        $.ajax({
          type: "POST",
          url: "php/mail.php",
          data: dataString,
          success: function(data) {
            document.getElementById("here").innerHTML = "Here";
            $('#myForm').html("<div id='thanks'></div>");
            $('#thanks').html("<h2>Thanks!</h2>")
              .append("<p>Dear " + name + ", I will get back to you as soon as I can ;)</p>")
              .hide()
              .fadeIn(1500);
          },
        }); //ajax call
        return false;
      });
    });
  </script>

  <!--Foundation-->
  <script src="../js/vendor/jquery.js"></script>

  <script src="../js/foundation.min.js"></script>


  <script>
    $(document).foundation();
  </script>


</body>

</html>