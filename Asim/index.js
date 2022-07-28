	var a=1;
		var b=2;
		var c=a+b;
		console.log(c);
		
		function getDate(){
			var date = new Date();
			var par= document.getElementById("current_date");
			par.innerHTML=date;
			par.style.color="red";
		}
		