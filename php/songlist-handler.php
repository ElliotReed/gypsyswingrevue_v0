$result = mysqli_query($con,"SELECT * FROM tblSongs WHERE ProjectID=6 AND Archive = False ORDER BY SongTitle");

while($row = mysqli_fetch_array($result)) {

echo $row['SongTitle']."<br>";
}

echo "</h5>
</div>";