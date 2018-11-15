$(document).ready(function(){
//making an ajax call to followersdata.php file
  $.ajax({
    url : "http://localhost/iot/date_fetch.php",
    type : "GET",
    success : function(data){
      console.log(data);

      var userid = [];
      var facebook_follower = [];
	  var facebook_follower2 = [];
     

      for(var i in data) {
        userid.push("UserID " + data[i].sequence);
        facebook_follower.push(data[i].value);
		facebook_follower2.push(data[i].value2)
          }

      var chartdata = {
        labels: userid,
        datasets: [
          {
            label: "sensor1",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(59, 89, 152, 0.75)",
            borderColor: "rgba(59, 89, 152, 1)",
            pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
            pointHoverBorderColor: "rgba(59, 89, 152, 1)",
            data: facebook_follower
          },
          {
            label: "sensor2",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(29, 202, 255, 0.75)",
            borderColor: "rgba(29, 202, 255, 1)",
            pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
            pointHoverBorderColor: "rgba(29, 202, 255, 1)",
            data: facebook_follower2
          }
          
        ]
      };

      var ctx = $("#mycanvas");

      var LineGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata
      });
    },
    error : function(data) {

    }
  });
});
