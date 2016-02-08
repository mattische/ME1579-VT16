<?php
  $mysqli = new mysqli("localhost", "root", "", "record_company");

  $res = $mysqli->query("SELECT artist.firstname, artist.lastname, song.name FROM  artist , song WHERE artist.id = song.artist_id");

  while($row = $res->fetch_assoc()) {
    
    echo " firstname = " . $row['firstname'] . "<br/>";
    echo " lastname = " . $row['lastname'] . "<br/>";
    echo " song =  " . $row['name'] . "<br/><br />";
  }
?>