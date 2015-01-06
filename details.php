
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>i DESK</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript">
</script>

</head>

<body>
  <link rel='stylesheet' type='text/css' href='parallax.css' />
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript" src="js/jquery-1.9.1.js"></script>

  <div class="demo__info">
   <div class="nav">
      <ul id="nav">
        <?php
          include('db_conn.php');
          $event = $_GET['event'];
          $query = "SELECT * FROM details WHERE event_name = '$event'";
          $result = mysql_query($query);
                            
          while ($row = mysql_fetch_array($result)) {
          echo "<li class='home'><a href='".'#'. $row['sub_cat'] ."'>" . $row['sub_cat'] ."</a></li>";
          }

        ?>
      </ul>
    </div>
  </div>
  <div class="demo__map">
  <div style="overflow:hidden;height:350px;width:500px;"><div id="gmap_canvas" style="height:350px;width:500px;border: 2px solid;
    border-radius: 25px"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">http://www.trivoo.net/</a></div>
</div>


  <div class="parallax">

    <?php
    $swap = 0;
        $query = "SELECT * FROM details WHERE event_name = '$event'";
        $result = mysql_query($query);
        while ($row = mysql_fetch_array($result)) {
          echo "<div id='" . $row['sub_cat'] ."' class='parallax__group'>";
          if($swap == 0)
          {
          echo '<div class="parallax__layer parallax__layer--base" style="background: rgb(102,204,102);">';
          $swap=1;
        }
        else if($swap==1)
        {
          echo '<div class="parallax__layer parallax__layer--base" style="background: rgb(102,104,102);">';
          $swap=2;
        }
        else if($swap==2)
        {
          echo '<div class="parallax__layer parallax__layer--base" style="background: rgb(102,204,02);">';
          $swap=3;
        }
        else
          echo '<div class="parallax__layer parallax__layer--base" style="background: rgb(302,204,102);">';
          echo '<div class="row">';
          echo '<div class="col-md-6 move ">';
          echo '<h3><b>';
          echo '<h1><b>';echo $row['event_name'];echo '</b></h1>';
          echo $row['sub_cat'];
          echo '</h3></b><br><br>';
          echo $row['description'];
          echo '</div>';
          echo '<div class="col-md-6 move2">';
          echo '</div>';
          
          echo '</div>';
          echo '</div>';
          echo '</div>';



          }
    ?>
    
    

    <script type="text/javascript"> function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(13.0110026,80.23539879999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(13.0110026, 80.23539879999998)});infowindow = new google.maps.InfoWindow({content:"<b>Contraptions</b><br/>Red Building<br/>600025 Chennai" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});}google.maps.event.addDomListener(window, 'load', init_map);</script>

 </div>
</body>
</html>


