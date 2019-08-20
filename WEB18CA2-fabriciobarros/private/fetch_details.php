<?php

include "config.php";

$userid = $_POST['userid'];

$select_query = "SELECT * FROM series WHERE serie_id=".$userid;

$result = mysqli_query($con,$select_query);

$html = '<div>';
while($row = mysqli_fetch_array($result)){
    $title = $row['title'];
    $genre = $row['genre'];
    $createdby = $row['createdby'];
    $seasons = $row['seasons'];
    $executiveproducer = $row['executiveproducer'];
    $releasedate = $row['releasedate'];
    $rate = $row['rate'];
    $sinopsis = $row['sinopsis'];
    $ranking = $row['ranking'];

    $html .= "<span class='head'><b>Genre: </b></span><span>".$genre."</span><br/>";
    $html .= "<span class='head'><b>Created By: </b></span><span>".$createdby."</span><br/>";
    $html .= "<span class='head'><b>Seasons: </b></span><span>".$seasons."</span><br/>";
    $html .= "<span class='head'><b>Executive Producer: </b></span><span>".$executiveproducer."</span><br/>";
    //$html .= "<span class='head'><b>Release Date: </b></span><span>".$releasedate."</span><br/>";
    //$html .= "<span class='head'><b>Rate: </b></span><span>".$rate."</span><br/>";
    //$html .= "<span class='head'><b>Sinopsis: </b></span><span>".$sinopsis."</span><br/>";
    //$html .= "<span class='head'><b>Ranking: </b></span><span>".$ranking."</span><br/>";
}
$html .= '</div>';

echo $html;