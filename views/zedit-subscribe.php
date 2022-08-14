<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<head>
  <meta http-equiv="pragma" content="no-cache" />
  <meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
  <link rev="made" href="mailto:info%40phplist.com" />
  <link rel="home" href="http://www.phplist.com" title="phplist homepage" />
  <link rel="copyright" href="http://phplist.com" title="Copyright" />
  <link rel="license" href="http://www.gnu.org/copyleft/gpl.html" title="GNU General Public License" />
  <meta name="Author" content="Michiel Dethmers - http://www.phplist.com" />
  <meta name="Copyright" content="Michiel Dethmers, phpList Ltd - http://phplist.com" />
  <meta name="Powered-By" content="phpList version 3.0.12" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="SHORTCUT ICON" href="../images/phplist.ico" />
  <title>Subscribe to our Newsletters</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="apple-touch-icon" href="../images/phplist-touch-icon.png" />
  <link rel="apple-touch-icon-precomposed" href="../images/phplist-touch-icon.png" />

  <?php
  include("header.php");
  ?>

  <title>Gypsy Swing Revue | Colorado's Premier Gypsy Jazz Band!</title>
</head>

<body>
  <?php
  include("background.php");
  ?>

  <?php
  include("navigation.php");
  ?>

  <div class="row">
    <div class="medium-12 columns">
      <div class="panel mypanel">
        <h5>Subscribe to the Gypsy Swing Revue Mail List!
        </h5>




        <script language="Javascript" type="text/javascript">
          function checkform() {
            for (i = 0; i < fieldstocheck.length; i++) {
              if (eval("document.subscribeform.elements['" + fieldstocheck[i] + "'].type") == "checkbox") {
                if (document.subscribeform.elements[fieldstocheck[i]].checked) {} else {
                  alert("Please enter your " + fieldnames[i]);
                  eval("document.subscribeform.elements['" + fieldstocheck[i] + "'].focus()");

                  return false;
                }
              } else {
                if (eval("document.subscribeform.elements['" + fieldstocheck[i] + "'].value") == "") {
                  alert("Please enter your " + fieldnames[i]);
                  eval("document.subscribeform.elements['" + fieldstocheck[i] + "'].focus()");

                  return false;
                }
              }
            }
            for (i = 0; i < groupstocheck.length; i++) {
              if (!checkGroup(groupstocheck[i], groupnames[i])) {
                return false;
              }
            }


            return true;
          }

          var fieldstocheck = new Array();
          var fieldnames = new Array();

          function addFieldToCheck(value, name) {
            fieldstocheck[fieldstocheck.length] = value;
            fieldnames[fieldnames.length] = name;
          }
          var groupstocheck = new Array();
          var groupnames = new Array();

          function addGroupToCheck(value, name) {
            groupstocheck[groupstocheck.length] = value;
            groupnames[groupnames.length] = name;
          }

          function compareEmail() {
            return (document.subscribeform.elements["email"].value == document.subscribeform.elements["emailconfirm"].value);
          }

          function checkGroup(name, value) {
            option = -1;
            for (i = 0; i < document.subscribeform.elements[name].length; i++) {
              if (document.subscribeform.elements[name][i].checked) {
                option = i;
              }
            }
            if (option == -1) {
              alert("Please enter your " + value);

              return false;
            }

            return true;
          }
        </script>

        <form method="post" action="http://www.gypsyswingrevue.com/lists/?p=subscribe" name="signup" target="windowName" onsubmit="window.open('', this.target,
'dialog,modal,scrollbars=no,resizable=no,width=550,height=300,left=0,top=0');">

          <div class="attributename">First Name</div>
          <input type="text" name="attribute2" class="attributeinput" size="40" value="" />

          <div class="attributename">Last Name</div>
          <input type="text" name="attribute3" class="attributeinput" size="40" value="" />

          <div class="required">Email Address</div>
          <input type=text name=email value="" size="40" />
          <script language="Javascript" type="text/javascript">
            addFieldToCheck("email", "Email Address");
          </script>
          <input type="hidden" name="htmlemail" value="1" />


          <div class="required">State</div>
          <!--0--><select name="attribute1" class="attributeinput">
            <option value="1">Alabama
            <option value="2">Alaska
            <option value="3">Arizona
            <option value="4">Arkansas
            <option value="5">California
            <option value="6" selected="selected">Colorado
            <option value="7">Connecticut
            <option value="8">Delaware
            <option value="9">Florida
            <option value="10">Georgia
            <option value="11">Hawaii
            <option value="12">Idaho
            <option value="13">Illinois
            <option value="14">Indiana
            <option value="15">Iowa
            <option value="16">Kansas
            <option value="17">Kentucky
            <option value="18">Louisiana
            <option value="19">Maine
            <option value="20">Maryland
            <option value="21">Massachusetts
            <option value="22">Michigan
            <option value="23">Minnesota
            <option value="24">Mississippi
            <option value="25">Missouri
            <option value="26">Montana
            <option value="27">Nebraska
            <option value="28">Nevada
            <option value="29">New Hampshire
            <option value="30">New Jersey
            <option value="31">New Mexico
            <option value="32">New York
            <option value="33">North Carolina
            <option value="34">North Dakota
            <option value="35">Ohio
            <option value="36">Oklahoma
            <option value="37">Oregon
            <option value="38">Pennsylvania
            <option value="39">Rhode Island
            <option value="40">South Carolina
            <option value="41">South Dakota
            <option value="42">Tennessee
            <option value="43">Texas
            <option value="44">Utah
            <option value="45">Vermont
            <option value="46">Virginia
            <option value="47">Washington
            <option value="48">West Virginia
            <option value="49">Wisconsin
            <option value="50">Wyoming
          </select><input type="hidden" name="list[2]" value="signup" /><input type="hidden" name="listname[2]" value="Gypsy Swing Revue Mail List" />
          <div style="display:none"><input type="text" name="VerificationCodeX" value="" size="20"></div>
          <p>

            <button type=submit name="subscribe" onClick="return checkform();">Subscribe</button>
          </p>

        </form>
        <br />
        <br />
        <p>
          <a href="http://www.gypsyswingrevue.com/lists/?p=unsubscribe&id=1">Unsubscribe</a>
        </p>
        <p class="poweredby">
          <a href="http://www.phplist.com/poweredby?utm_source=pl3.0.12&amp;utm_medium=poweredhostedimg&amp;utm_campaign=phpList" title="visit the phpList website">
            <img src="http://powered.phplist.com/images/3.0.12/power-phplist.png" width="70" height="30" title="powered by phpList version 3.0.12, &copy; phpList ltd" alt="powered by phpList 3.0.12, &copy; phpList ltd" border="0" />
          </a>
        </p>
      </div>



    </div>

    <?php
    include("footer.php");
    ?>

</body>

</html>