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

