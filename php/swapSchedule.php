<script>
	function swapSchedule(cv) {
		$("#schedule").html("<i class='fa fa-spinner fa-pulse'></i>").show();
		var url = "../php/schedule-handler.php";
		$.post(url, {
			contentVar: cv
		}, function(data) {
			$("#schedule").html(data).show();
		});
	}
</script>