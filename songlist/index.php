<?php
$_POST['$title'] = "Gypsy Swing Revue | Song List!";
include("../views/header.php");
?>
<?php
include("../views/background.php");
?>
<?php
include("../views/navigation.php");
?>


<!--The BAND-->
<div class="row">
  <div class="medium-8 medium-centered columns">
    <div class="panel mypanel">


      <?php
      include("../php/connect.php");
      ?>

      <h4 class="text-center">Gypsy Swing Revue Song List</h4>

      <ol>
        <?php
        $result = mysqli_query($con, "SELECT * FROM tblSongs WHERE ProjectID=6 AND Archive = False ORDER BY SongTitle");
        while ($row = mysqli_fetch_array($result)) :
        ?>

          <?php echo "<li> " . $row['SongTitle'] . "</li>"; ?>

        <?php endwhile; ?>
      </ol>

      <?php
      include("../php/connect-close.php");
      ?>

    </div>
  </div>
</div>
<!--END GENRE-->


<?php
include("../views/footer.php");
?>