function select_menu(option){
	if(option == 1){	
	 	$.post("structure/in_session.php",{ }, function(data){$('#container').fadeIn("slow").html(data);}); 
	}else if (option == 2){
		$.post("structure/register_user.php",{ }, function(data){$('#container').fadeIn("slow").html(data);}); 
	}else if (option == 3){
		$.post("structure/data_user.php",{ }, function(data){$('#container').fadeIn("slow").html(data);}); 
	}else if (option == 4){
		$.post("index.php",{ }, function(data){$('#container').fadeIn("slow").html(data);}); 
	}else if (option == 5){
		$.post("structure/help.php",{ }, function(data){$('#container').fadeIn("slow").html(data);}); 
	} 	

}