<?php
$_POST['$title'] = "Gypsy Swing Revue | Schedule!";
include("../views/header.php");
?>
<?php
include("../views/background.php");
?>
<?php
include("../views/navigation.php");
?>

<!-- BANNER  -->
<div class="row hidden-for-small-down">
	<div class="medium-12 columns ">
		<h4 class="text-center" style="color: rgba(255, 255, 255, 0.75); background:rgba(124,200,121,0.25); height:5em;">Performance Schedule</h4>
	</div>
</div>

<div class="row hidden-for-small-down">
	<div class="medium-12 columns">
		<hr />
	</div>
</div>
<!--END BANNER -->


<!--FEATURES -->

<div class="row">

	<div class="medium-12 columns">
		<div class="panel mypanel">

			<ul class="button-group radius even-7 hidden-for-small-down">
				<li><a href="#" class="small button" onClick="javascript:swapSchedule('Upcoming');">Upcoming</a></li>
				<li><a href="#" class="small button" onClick="javascript:swapSchedule('Clubs');">Clubs</a></li>
				<li><a href="#" class="small button" onClick="javascript:swapSchedule('Concerts');">Concerts</a></li>
				<li><a href="#" class="small button" onClick="javascript:swapSchedule('Corporate');">Corporate</a></li>
				<li><a href="#" class="small button" onClick="javascript:swapSchedule('Dances');">Dances</a></li>
				<li><a href="#" class="small button" onClick="javascript:swapSchedule('Parties');">Parties</a></li>
				<li><a href="#" class="small button" onClick="javascript:swapSchedule('Weddings');">Weddings</a></li>
			</ul>
			<!--HIDE Temporarily-->
			<!-- <div class="hidden-for-small-down">
				<p>
				<blockquote>You can find us every Wednesday at The Irish Snug, 8-11pm!
				</blockquote>
				</p>
			</div> -->


			<div class="hidden-for-medium-up">

				<ul class="button-group radius even-3">

					<li><a href="#" class="tiny button" onClick="javascript:swapSchedule('Clubs');">Clubs</a></li>
					<li><a href="#" class="tiny button" onClick="javascript:swapSchedule('Concerts');">Concerts</a></li>
					<li><a href="#" class="tiny button" onClick="javascript:swapSchedule('Corporate');">Corporate</a></li>

				</ul>

				<ul class="button-group radius even-3 ">

					<li><a href="#" class="tiny button" onClick="javascript:swapSchedule('Dances');">Dances</a></li>
					<li><a href="#" class="tiny button" onClick="javascript:swapSchedule('Parties');">Parties</a></li>
					<li><a href="#" class="tiny button" onClick="javascript:swapSchedule('Weddings');">Weddings</a></li>
				</ul>

				<ul class="button-group radius even-3">
					<li></li>
					<li><a href="#" class="tiny button" onClick="javascript:swapSchedule('Upcoming');">Upcoming</a></li>
					<li></li>

				</ul>

			</div>


		</div>
	</div>
</div>

<!--SCHEDULE-->
<ul class="accordion" data-accordion></ul>
<!--false call to make accordion work-->
<div id="schedule"></div>
<!--schedule place holder-->
<script>
	$(function schedule() {
		$("#schedule").html("<i class='fa fa-spinner fa-pulse'></i>").show();
		var type = "Upcoming";
		var url = "../php/schedule-handler.php";
		$.post(url, {
			contentVar: type
		}, function(data) {
			$("#schedule").html(data).show();
		});
	})
</script>
<!--END SCHEDULE-->

<!--MAIL LIST-->
<div class="row">
	<div class="medium-12 columns">
		<div class="panel mypanel">
			<h4></i>Join Our Mail List!</h4>
			<div class="row">
				<div class="medium-9 columns">
					<p>We'll keep you up to date on special shows!</p>
				</div>
				<div class="medium-3 columns">
					<a href="../views/subscribe.php" class="radius button right">Subscribe</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--END MAIL LIST-->

<?php
include("../views/footer.php");
?>