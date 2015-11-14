$(document).ready(function(){
	$(document).on('click','#add',function(){

		$this = $(this);
		
		var m_Id=$("#m_Id").val();
		var teamname = $("#namePlayer").val();
		var run = $("#run").val();
		var ball =$("#ball").val();
		var four=$("#four").val();
		var six=$("#six").val();
		var sr =$("#sr").val();
		var wc=$("#wc").val();
		var bball=$("#bball").val();
		var r_g=$("#R_G").val();
		var eco=$("#eco").val();
		var ct=$("#ct").val();
		var st=$("#st").val();
		var rout=$("#rout").val();
		console.log(m_Id);
		$.post("/CFL/api/addmatch.php",{m_Id:m_Id,teamname:teamname,run:run,ball:ball,four:four,six:six,sr:sr,wc:wc,bball:bball,r_g:r_g,eco:eco,ct:ct,st:st,rout:rout});
		window.location ="/CFL/addmatch.php";
		/*var teamname1 =$(this).parent().find("select[name='team1']").val();
		if(teamname1!=teamname) {
			$.post("/CFL/api/addmatch.php",{teamname:teamname,teamname1:teamname1});
			
			alert(teamname);
			window.location ="/CFL/addmatchplayer.php";
		
		else {
			alert("Two Team Must Be Different!");
		}*/
	});
});