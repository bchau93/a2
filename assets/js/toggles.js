function toggle(toggleWhat)
{
    window.location = toggleWhat.value;
}
function toggleEdit(editSwitch)
{
    window.location = editSwitch.value;
}

    $(".editToggle").click(function()
    {
        if($('.editFields').is("visible")){
            $('.editFields').hide();
        } else {
            $('.editFields').show();
        }
    });
    
    function makeAjaxCall(){
	$.ajax({
                type: "post",
		url: "Welcome/showTeam",
		cache: false,
                data: { team: $("select#team").val() },
		success: function(data){
                    try{
                        $('#result').html(data);
                    }catch(e) {		
                        //alert('Exception while request..');
                    }		
		},
		error: function(){						
			//alert('Error while request..');
		}
        });
    }

