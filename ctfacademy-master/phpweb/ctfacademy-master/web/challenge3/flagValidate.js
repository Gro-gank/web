

function hex2a(hexx) {
    var hex = hexx.toString();//force conversion
    var str = '';
    for (var i = 0; (i < hex.length && hex.substr(i, 2) !== '00'); i += 2)
        str += String.fromCharCode(parseInt(hex.substr(i, 2), 16));
    return str;
}


function buttonFunction() {
      
	   
var sql = document.getElementById("password").value;

var sqlUpper = sql.toUpperCase();

var firstIndex = sqlUpper.indexOf("' OR '");

var firstIndexEnd = firstIndex + 6;

var subIndex1 = sqlUpper.substring(firstIndex, firstIndexEnd);


var secIndex = sqlUpper.indexOf("'='");

var secIndexEnd = secIndex + 3;

var subIndex2 = sqlUpper.substring(secIndex, secIndexEnd);

var sqlLength = sqlUpper.length;


var ranVarOne = sqlUpper.substring(0, firstIndex);

var ranVarTwo = sqlUpper.substring(firstIndexEnd, secIndex);

var ranVarThree = sqlUpper.substring(secIndexEnd, sqlLength);

var username = document.getElementById("username").value;

var myalert = "637466617b73657175656c7d";


	var valid = false;
	
	var admin = "admin";
	
 var myString = hex2a(myalert);
 
if (sql !== "") {
	
if (username == admin) {
	
	if (firstIndex >= 0) {
		var valid = true;
		
		if (secIndex >= 0) {
			var valid = true;
			
			if (ranVarTwo == ranVarThree) {
				
				valid = true;
				
				$("#loginFeedback").html("Làm tốt lắm! Cờ cần tìm bên dưới.");
				
				$("#loginFeedback").css("color", "#28a745");
				
				$("#signin").css("transition-duration", "1.0s");
		
				$("#signin").css("background-color", "#28a745");
				
				$("#username").css("transition-duration", "1.0s");
				
				$("#username").css("border-color", "#28a745");
				
				$("#password").css("transition-duration", "1.0s");
				
				$("#password").css("border-color", "#28a745");
				
				
				$("#flagDiv").addClass("loginFlag myLightBox p-4 my-4");
				
				$("#successFlag").html(myString);
				
			}
				
		}
	   
	   
   }
}

}

else {
	
	
	$("#loginFeedback").html("Sai Username/Password. Hãy thử lại.");
	
	
		
		$("#loginFeedback").css("color", "#dc3545");
		
		$("#signin").css("transition-duration", "1.0s");
		
		$("#signin").css("background-color", "#dc3545");
		
		$("#username").css("transition-duration", "1.0s");
		
		$("#username").css("border-color", "#dc3545");
		
		$("#password").css("transition-duration", "1.0s");
		
		$("#password").css("border-color", "#dc3545");
	
	
}
	   
	   
}




function q1 (){
	
	var flag = $('#flag1').val();
	
	var flagHash = "567904efe9e64d9faf3e41ef402cb568";
		
	var flagCheck = hashCheck(flag, flagHash);
	
	
	if (flagCheck == true) {
		
		
		$("#flagFeedback1").html("Làm tốt lắm! Hãy đến với câu hỏi tiếp theo.");
		
		$("#flagFeedback1").css("color", "#28a745");
		
		$("#submit1").css("transition-duration", "1.0s");
		
		$("#submit1").css("background-color", "#28a745");
		
		$("#flag1").css("transition-duration", "1.0s");
		
		$("#flag1").css("border-color", "#28a745");
		
	}
	else {
		
		$("#flagFeedback1").html("Sai rồi, hãy thử lại.");
		
		$("#flagFeedback1").css("color", "#dc3545");
		
		$("#submit1").css("transition-duration", "1.0s");
		
		$("#submit1").css("background-color", "#dc3545");
		
		$("#flag1").css("transition-duration", "1.0s");
		
		$("#flag1").css("border-color", "#dc3545");
		
	}

}




function myFlag (){
	
	var flag = $('#flag').val();
	
	var flagHash = "db6a35a30a1a770f07d6ba9d73e85251";
		
	var flagCheck = hashCheck(flag, flagHash);
	
	
	if (flagCheck == true) {
		
		
		$("#flagFeedback").html("Tốt lắm! <a href='answer3.php'>Nhấn vào đây để xem giải thích.</a>");
		
		$("#flagFeedback").css("color", "#28a745");
		
		$("#submit").css("transition-duration", "1.0s");
		
		$("#submit").css("background-color", "#28a745");
		
		$("#flag").css("transition-duration", "1.0s");
		
		$("#flag").css("border-color", "#28a745");
		
		
		
	}
	else {
		
		$("#flagFeedback").html("Sai rồi, hãy thử lại.");
		
		$("#flagFeedback").css("color", "#dc3545");
		
		$("#submit").css("transition-duration", "1.0s");
		
		$("#submit").css("background-color", "#dc3545");
		
		$("#flag").css("transition-duration", "1.0s");
		
		$("#flag").css("border-color", "#dc3545");
		
	}

}