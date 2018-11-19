<?php 
    // Start MySQL Connection
    include('connect.php'); 


?>

<html>
<head>
    <title>IoT Dashboard</title>
	<script>
                window.setInterval("refreshDiv()", 5000);
            function refreshDiv(){
                document.getElementById("second").innerHTML;
				//<center><b>Graph of Current Readings</b></center><title>LineGraph</title><style>.chart-container {width: 540px;height: 500px;}</style><div class='chart-container'><canvas id='mycanvas'></canvas> </div></div>  " ;
            }
        </script>
	
	
    <style type="text/css">
		#wrapper {
			
			width:100%;
			clear:both;
				}
		#first {
			  
			  width:34%;
			  float:left;
			}
		#second {
			  
			  width:46%;
			  float:left;
			}
		#third {
			  
			  width:20%;
			  float:left;
			}
        .table_titles, .table_cells_odd, .table_cells_even {
                padding-right: 20px;
                padding-left: 20px;
                color: #000;
        }
        .table_titles {
            color: #FFF;
            background-color: #666;
        }
        .table_cells_odd {
            background-color: #CCC;
        }
        .table_cells_even {
            background-color: #FAFAFA;
        }
        table {
            border: 2px solid #333;
        }
        body { font-family: "Trebuchet MS", Arial; }
    </style>
	
</head>

    <body style="background-color:rgb(116, 245, 202);">
        <h1>Light intensity</h1>
<div id="wrapper">

  <div id="first"><center><b>Readings</b></center>
    <table border="0" cellspacing="0" cellpadding="4">
      <tr>
            
			<td class="table_titles">Device Id</td>
            <td class="table_titles">Date and Time</td>
            <td class="table_titles">Lights</td>
            <td class="table_titles">Status</td>
          </tr>
<?php


    // Retrieve all records in descending order and display latest 15 records
    $result = mysqli_query($connection,"SELECT * FROM final ORDER BY date DESC LIMIT 15");

    // Used for row color toggle
    $oddrow = true;

    // process every record
    while( $row = mysqli_fetch_assoc($result) )
    {
        if ($oddrow) 
        { 
            $css_class=' class="table_cells_odd"'; 
        }
        else
        { 
            $css_class=' class="table_cells_even"'; 
        }

        $oddrow = !$oddrow;

        echo '<tr>';
        echo '   <td'.$css_class.'>'.$row["id"].'</td>';
        echo '   <td'.$css_class.'>'.$row["date"].'</td>';
		echo '   <td'.$css_class.'>'.$row["Lights"].'</td>';
        echo '   <td'.$css_class.'>'.$row["status"].'</td>';
        echo '</tr>';
    }
?>
    </table>
</div>	
 <div id="second"><center><b>Graph of Current Readings</b></center>
    <!--To refresh after every 5 sec -->
    <meta http-equiv ='refresh' content='10'>
    <title>LineGraph</title>
    <style>
      .chart-container {
        width: 540px;
        height: 300px;
      }
    </style>
  
     <div class="chart-container">
      <canvas id="mycanvas"></canvas>
    </div>
 
<center>
<b>Control:</b><input type="button" name="control" value="Light">
</center>
 </div>
 
 <div id="third"><center><b>Date wise Readings</b></center>
 <center>
 <table>
 <tr><td>
 <form action="date_fetch.php" method = "get">
  From: </td><td><input type="date" name="from"><br>
  </td></tr>
  
  <tr><td>
  To  :  </td><td>   <input type="date" name="to"><br>
	</td></tr>
<tr><td></td><td>
  <input type="submit" value="Submit">
  </td></tr>
</form>
</table>
 </center>
    
    <!-- javascript -->
    
    
 
 </div>
</div>

    <!-- javascript -->
	
	<script type="text/javascript" src="js/date_fetch.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/linegraph.js"></script>
    </body>
</html>
