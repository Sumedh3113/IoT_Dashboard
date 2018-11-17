<?php 
    // Start MySQL Connection
    include('connect.php'); 


?>

<html>
<head>
    <title>IoT Dashboard</title>
    <style type="text/css">
		#wrapper {
			width:1000px;
			clear:both;
				}
		#first {
			  background-color:red;
			  width:200px;
			  float:left;
			}
		#second {
			  
			  width:500px;
			  float:left;
			}
		#third {
			  background-color:#bada55;
			  width:300px;
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

    <body>
        <h1>Light intensity</h1>
<div id="wrapper">

  <div id="first">first
    <table border="0" cellspacing="0" cellpadding="4">
      <tr>
            
            <td class="table_titles">Date and Time</td>
            <td class="table_titles">Lights</td>
          </tr>
<?php


    // Retrieve all records and display them
    $result = mysqli_query($connection,"SELECT * FROM final");

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
        echo '   <td'.$css_class.'>'.$row["date"].'</td>';
        echo '   <td'.$css_class.'>'.$row["Lights"].'</td>';
        echo '</tr>';
    }
?>
    </table>
</div>	
 <div id="second">second
  
    <!--To refresh after every 5 sec -->
    <meta http-equiv ='refresh' content='25'>
    <title>LineGraph</title>
    <style>
      .chart-container {
        width: 540px;
        height: 500px;
      }
    </style>
  
     <div class="chart-container">
      <canvas id="mycanvas"></canvas>
    </div>
 </div>
 <div id="third">third
 
 <form action="date_fetch.php" method = "get">
  From: <input type="date" name="from"><br>
  To: <input type="date" name="to"><br>
  <input type="submit" value="Submit">
</form>
 
 </div>
</div>
    <!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/linegraph.js"></script>
    </body>
</html>