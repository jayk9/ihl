<?php
  include('inc/dbconfig.php');
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <?php
      $sql=mysqli_query($conn,"select * from scores order by s_id desc");
      $tot=mysqli_affected_rows($conn);
    ?>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Players', 'Points'],
          <?php
            for($i=0;$i<$tot;$i++){
              $arr=mysqli_fetch_array($sql);
            ?>
            ["<?php echo $arr['s_player']; ?>", <?php echo $arr['s_playerscore']; ?>],    
            <?php
            }
          ?>
        ]);

        var options = {
          title: 'Chess opening moves',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'IHL - Player Stats',
                   subtitle: 'popularity by points' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Scores'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>