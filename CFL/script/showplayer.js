$(document).ready(function(){
	$.ajax({
		url: "/CFL/api/getplayer.php",
		dataType: 'json',
		success: function(playerList) {
			var table = "<table border=\"1\" style=\"width:100%\"><tr class=\"header\"><td>Mat</td><td>inns</td><td>Runs</td><td>Hs</td><td>Avg</td><td>SR</td><td>100</td><td>50</td><td>4s</td><td>6s</td></tr>"

			for (var i=0; i<playerList.length; i++) {
				table += "<tr>";
				table += "<td>";
				table += playerList[i].MAT;
				table += "</td>";
				table += "<td>";
				table += playerList[i].INNS;
				table += "</td>";
				table += "<td>";
				table += playerList[i].RUNS;
				table += "</td>";
				table += "<td>";
				table += playerList[i].HS;
				table += "</td>";
				table += "<td>";
				table += playerList[i].AVG;
				table += "</td>";
				table += "<td>";
				table += playerList[i].SR;
				table += "</td>";
				table += "<td>";
				table += playerList[i].HUN;
				table += "</td>";
				table += "<td>";
				table += playerList[i].FIFTY;
				table += "</td>";
				table += "<td>";
				table += playerList[i].FOUR;
				table += "</td>";
				table += "<td>";
				table += playerList[i].SIXS;
				table += "</td>";
				table += "<tr>";
			} 
        	table += "</table>";
			$(document).find(".playerStats").append(table);

			 table = "<table border=\"1\" style=\"width:100%\"><tr class=\"header\"><td>Mat</td><td>inns</td><td>Balls</td><td>Runs</td><td>Avg</td><td>SR</td><td>Wkts</td><td>BBI</td><td>Econ</td><td>4W</td><td>5W</td></tr>"

			for (var i=0; i<playerList.length; i++) {
				table += "<tr>";
				table += "<td>";
				table += playerList[i].MAT;
				table += "</td>";
				table += "<td>";
				table += playerList[i].INNS;
				table += "</td>";
				table += "<td>";
				table += playerList[i].BALLS;
				table += "</td>";
				table += "<td>";
				table += playerList[i].RUNS_G;
				table += "</td>";
				table += "<td>";
				table += playerList[i].B_AVG;
				table += "</td>";
				table += "<td>";
				table += playerList[i].B_SR;
				table += "</td>";
				table += "<td>";
				table += playerList[i].WKTS;
				table += "</td>";
				table += "<td>";
				table += playerList[i].BBI;
				table += "</td>";
				table += "<td>";
				table += playerList[i].ECON;
				table += "</td>";
				table += "<td>";
				table += playerList[i].FOURW;
				table += "</td>";
				table += "<td>";
				table += playerList[i].FIVEW	;
				table += "</td>";
				table += "<tr>";
			} 
        	table += "</table>";
			$(document).find(".playerStats1").append(table);

			table = "<table border=\"1\" style=\"width:100%\"><tr class=\"header\"><td>Mat</td><td>inns</td><td>Catchs</td><td>Stamping</td><td>Runout</td></tr>"

			for (var i=0; i<playerList.length; i++) {
				table += "<tr>";
				table += "<td>";
				table += playerList[i].MAT;
				table += "</td>";
				table += "<td>";
				table += playerList[i].INNS;
				table += "</td>";
				table += "<td>";
				table += playerList[i].CT;
				table += "</td>";
				table += "<td>";
				table += playerList[i].STMP;
				table += "</td>";
				table += "<td>";
				table += playerList[i].RUNOUT;
				table += "</td>";
				
				table += "</tr>";
			} 
        	table += "</table>";
			$(document).find(".playerStats2").append(table);
		},
		error: function() {
			alert("EEEEEEEEError!");
		}
	});
});
