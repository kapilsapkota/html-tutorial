
	
 	var a=1;
 	var b=2;
 	var c=a+b;
 	let bike = ["kawasaki","bmw","honda", "ducati" ,"suzuki" ];
 	
 	 function person(){
 	

 	const person={
 		name : "Anish",
 		age :20,
 		gender : "Male",
 	};
 	document.getElementById("persondata").innerHTML ="your name is:" +person.name+ 
 	"<br>your age is:" +person.age+
 	"<br>your gender is:" +person.gender;
 }


 	console.log(person.name);
 	


function getdate(){
	var date= new Date();
	var par= document.getElementById("current_date");
		console.log(par);
	par.innerHTML = date;
		par.style.color = "red";
}
function displayMessage(){
	var age = document.getElementById("age").value;
	if (age>=18){
			message= "eligible for voting";

	}
	else{
		message="not eligible for voting";
	}
	document.getElementById("message").innerHTML = message;
}
alert(message)
document.getElementById("message").innerHTML=message;
let day;
console.log(new Date().getDay())
switch(new Date().getDay())
{
	case 0:
	day="sunday";
	break;
	case 1:
	day="monday";
	break;
	case 2:
	day="tuesday";
	break;
	case 3:
	day="wednesday";
	break;
	case 4:
	day="thurday";
	break;
	case 5:
	day="friday";
	break;
	case 6:
	day="saturday";
}
alert("Today is "+day)
document.getElementById("day").innerHTML= "today is "+day;
function repeatname(){


for(var a=1;a<=5;a++){
	alert("loop " +a);
}
}