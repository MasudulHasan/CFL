$(document).ready(function(){
	$(document).on('click','.link',function(){
                $this = $(this);
                var name = $(this).parent().parent().find(".hidden").html();
                
                console.log(name);

                $.ajax({
                        method: "POST",
                        url: "/CFL/showplayer.php",
                        data: {name: name},
                        dataType: 'json',
                        //window.location ="/CFL/showplayer.php";
                        /*success: function(result) {
                                //console.log(result['message']);
                                alert(result['message']);
                                window.location ="/CFL/showplayer.php";
                                
                        },
                        error: function(xhr, status, error) {
                          var err = eval("(" + xhr.responseText + ")");
                          console.log(err.Message);
                        }*/
                });
        });

        $(document).on('click','#logout',function(){
                window.location ="/CFL/logout.php";
                
                
                
        });




        $.ajax({
		url: "/CFL/api/userprofile.php",
		dataType: 'json',
		success: function(result) {
			/*var table = "<table><tr><td>Name</td></tr>";
			for (var i=0; i<userList.length; i++) {
				table += "<tr>";
				table += "<td>";
				table += userList[i].NAME;
				table += "</td>";
				table += "<tr>";
			} 
        	table += "</table>";*/
        	
        	//var n="myImage";
        	//var num=1;
        	//var t=n.concat(num);
            var userList=result['userList'];
        	for (var i=0; i<userList.length; i++) {
        		var n="myImage";
        		var l="link";
                        var w="hidden";
        		var t=n.concat(i+1);
        		var tt=l.concat(i+1);
                        var ww=w.concat(i+1);
        		console.log(tt);
		        	
	        	document.getElementById(t).src = userList[i].URL;
	        	document.getElementById(tt).innerHTML =userList[i].NAME;
	        	//document.getElementById(tt).setAttribute("href", "http://www.facebook.com");
                        document.getElementById(ww).innerHTML =userList[i].P_ID; 
	        	//tt.setAttribute('href', "http://facebook.com");
        	}
        	for (var i=0; i<userList.length; i++) {
        		var n="mImage";
        		var l="mlink";
        		var h="hd";
                        var w="hidden";
        		var t=n.concat(i+1);
        		var tt=l.concat(i+1);
        		var hh=h.concat(i+1);
                        var ww=w.concat(i+1);
        		console.log(hh);
		        	
	        	document.getElementById(t).src = userList[i].URL;
	        	document.getElementById(hh).innerHTML =userList[i].NAME;
	        	document.getElementById(tt).setAttribute("href", "http://www.facebook.com");
                        document.getElementById(ww).innerHTML =userList[i].P_ID; 
	        	//tt.setAttribute('href', "http://facebook.com");
        	}
        	/*document.getElementById("myImage2").src = userList[1].URL;
        	document.getElementById('link2').innerHTML =userList[1].NAME;
        	link2.setAttribute('href', "http://facebook.com");

        	document.getElementById("myImage3").src = userList[2].URL;
        	document.getElementById('link3').innerHTML =userList[2].NAME;
        	link3.setAttribute('href', "http://facebook.com");

        	document.getElementById("myImage4").src = userList[3].URL;
        	document.getElementById('link4').innerHTML =userList[3].NAME;
        	link4.setAttribute('href',"http://facebook.com");

        	document.getElementById("myImage5").src = userList[4].URL;
        	document.getElementById('link5').innerHTML =userList[4].NAME;
        	link5.setAttribute('href', "http://facebook.com");
        	
        	document.getElementById("myImage6").src = userList[5].URL;
        	document.getElementById('link6').innerHTML =userList[5].NAME;
        	link6.setAttribute('href', "http://facebook.com");

        	document.getElementById("myImage7").src = userList[6].URL;
        	document.getElementById('link8').innerHTML =userList[6].NAME;
        	link7.setAttribute('href', "http://facebook.com");

        	document.getElementById("myImage8").src = userList[3].URL;
        	document.getElementById('link8').innerHTML =userList[3].NAME;
        	link8.setAttribute('href',"http://facebook.com");*/

                
                
			//$(document).find(".left1").append(table);
		},
		error: function() {
			alert("Error!");
		}
	});
    
    $.ajax({
        url: "/CFL/api/userprofile.php",
        dataType: 'json',
        success: function(result) {
                var name=result['userdt'][0].USERNAME;
                console.log(name);
                $(document).find(".USERName").append(name);
                
                var tname=result['userdt'][0].USER_TEAM_NAME;
                console.log(name);
                $(document).find(".team").append(tname);
                
                var point=result['point'];
                console.log(point);
                $(document).find("#point").append(point);
                
                /*var b=result['userdt'][0].BUDGET;
                $(document).find("#budget").append(b);
                
                var s=result['userdt'][0].NUMBER_OF_SUBSTITUTION;
                console.log(name);
                $(document).find("#sub").append(s);*/

            },
        error: function() {
            alert("Errrrrror!");
        }

            
    });
    

    


});
