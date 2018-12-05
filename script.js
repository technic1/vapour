src="https://code.jquery.com/jquery-3.1.1.js"

function showhide(id){
	var e = document.getElementById(id);
	e.style.display = (e.style.display == 'block') ? 'none' : 'block';
   }

function show()  
        {  
            $.ajax({  
            	type: "POST",
                url: "form.php",  
                cache: false,  
                data: $("#"+client_form).serialize(),
                dataType: "html",
                success: function(data){  
                	if(data!='success')	{alert('Данные успешно получены!');}
                    $("#div_result").html(data);  
                }  
            });  
        }  