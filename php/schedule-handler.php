
<?php

// Create connection
$con = mysqli_connect("localhost", "elliotre", "iyn5x6I10P", "elliotre_elliotreedmusic");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$contentVar = $_POST['contentVar'];

if ($contentVar == "Upcoming") {
	$Heading = "Upcoming Performances";
	$count = mysqli_query($con, "SELECT count(*) FROM WebSchedule WHERE event_status_id=7");
	$result = mysqli_query($con, "SELECT * FROM WebSchedule WHERE event_date>=CURDATE() AND event_status_id=5 ORDER BY event_date ASC");
} else if ($contentVar == "2weeks") {
	$Heading = "Upcoming Performances";
	$result = mysqli_query($con, "SELECT * FROM WebSchedule WHERE event_date BETWEEN CURDATE() AND CURDATE() + INTERVAL '2' WEEK AND event_status_id=5 ORDER BY event_date ASC");
} else if ($contentVar !== "Upcoming" or $contentVar !== "2weeks") {
	switch ($contentVar) {
		case "Clubs":
			$Heading = "Clubs";
			$gigType = 1;
			break;
		case "Concerts":
			$Heading = "Concerts";
			$gigType = 2;
			break;
		case "Corporate":
			$Heading = "Corporate";
			$gigType = 10;
			break;
		case "Dances":
			$Heading = "Dances";
			$gigType = 5;
			break;
		case "Parties":
			$Heading = "Parties";
			$gigType = 4;
			break;
		case "Weddings":
			$Heading = "Weddings";
			$gigType = 6;
			break;
	}
	$count = mysqli_query($con, "SELECT count(*) FROM WebSchedule WHERE event_type_id=" . $gigType . " AND (event_status_id=5 OR event_status_id=7) AND event_date<CURDATE()");
	$result = mysqli_query($con, "SELECT * FROM WebSchedule WHERE event_type_id=" . $gigType . " AND (event_status_id=5 OR event_status_id=7) ORDER BY event_date DESC");
}

if (isset($count)) {
	$row = mysqli_fetch_row($count);
	$num = $row[0];
}

echo "<div class='row'>";
echo " 	  <div class='medium-12 columns'>";
echo "    	<div class='panel mypanel'>";
echo "<div class='row'><div class='medium-6 columns'><h4>" . $Heading . "</h4></div>";

if ($contentVar == "2weeks") {
	echo "<div class='medium-6 columns font-75'><small>(in the next 2 weeks)</small></div></div>";
	echo "<ul class='accordion' style='margin-left:0; margin-bottom: 1em;' data-accordion>";
} else if ($contentVar !== "2weeks") {
	// VALUE NOT CORRECT TODO
	// echo "<div class='medium-6 columns font-75'>" . $num . " performances so far!</div></div>";
	echo "<div class='medium-6 columns font-75'></div></div>";
	echo "<ul class='accordion' style='margin-left:0;' data-accordion>";
}



$ctr = 1;
$active = "content active";

while ($row = mysqli_fetch_array($result)) {

	$panel = "id='panel" . $ctr . "a'";
	$numpanel = "'#panel" . $ctr . "a'";

	echo "<li class='accordion-navigation'>";
	echo "<a href=" . $numpanel . ">";
	echo "<div class='row font-75'>";
	echo "<div class='medium-6 columns'><i class='fa fa-toggle-down fa-opacity'></i>&nbsp;  " . Date("l", strtotime($row['event_date'])) . ", " . date("F d, Y", strtotime($row['event_date']));
	echo "</div>";
	echo "<div class='medium-6 columns'>" . $row['event_name'];
	echo "</div>";
	echo "</div>";
	echo "</a>";

	if ($ctr > 1) {
		$active = "content";
	}

	echo "<div " . $panel . "class='" . $active . " font-75'>";
	echo date("g:i A", strtotime($row['event_start'])) . " to " . date("g:i A", strtotime($row['event_end']));
	echo "</br>";

	if ($row['public_event']) {
		echo $row['Address'] . ", " . $row['City'] . ", " . $row['State'];
		echo " " . $row['Zipcode'];
	} else {
		echo "Private Event";
	}
	echo "</div>";
	echo "</li>";
	$ctr = $ctr + 1;
}

mysqli_close($con);

echo "</ul>";

if ($contentVar == "2weeks") {
	echo "<div class='row'>";
	echo "  <div class='medium-9 columns'>";
	echo "  <p>See our full schedule!</p>";
	echo "  </div>";

	echo "  <div class='medium-3 columns'>";
	echo "  	<a href='/schedule' class='radius button right'>Schedule</a>";
	echo "  </div>";
	echo "</div>";
}

echo "      </div>";
echo "		</div>";
echo "	</div>";
?>
