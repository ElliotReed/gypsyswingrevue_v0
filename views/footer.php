<!--FOOTER-->

<?php
include("break-line.php")
?>



<a class="exit-off-canvas"></a>
</div>

<!--Foundation-->
<script src="/js/vendor/jquery.js"></script>
<script src="/js/vendor/fastclick.js"></script>
<script src="/js/foundation.min.js"></script>
<script src="/js/foundation/foundation.offcanvas.js"></script>

<script>
  $(document).foundation();
</script>

<!--My Scripts-->
<script type="text/javascript" src="/js/myscripts.js"></script>
<?php
if ($title == "Gypsy Swing Revue | Colorado's Premier Gypsy Jazz Swing Band! | Weddings and Events in the Denver and Boulder Area") {
  $add =  "<!--Slick Slider-->";
  $add = $add . "<script type='text/javascript' src='//code.jquery.com/jquery-1.11.0.min.js'></script>";
  $add = $add . "<script type='text/javascript' src='//code.jquery.com/jquery-migrate-1.2.1.min.js'></script>";
  $add = $add . "<script type='text/javascript' src='slick/slick.min.js'></script>";
}
$add = $add . "<!-- END Slick Slider-->";
?>
<?php echo $add; ?>
<!-- END FOOTER-->

</body>

</html>