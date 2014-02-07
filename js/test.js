function onPlayerStateChange(event) 
{
    switch(event.data) 
    {
        case YT.PlayerState.ENDED:
            $("#player").hide();
	        $("#newest").show();
	        break;
    }
}

$(".preview").click(function() {
	var big = $(this).attr("id");
	$("#newest").hide();
	$("#player").show();
	$("#player").html("<iframe id='player_"+ big + "' width='630' height='450' src='http://www.youtube.com/embed/" + big +"?autoplay=1'></iframe>");

	new YT.Player('player_'+big, {
                events: 
                {
                    'onStateChange': onPlayerStateChange
                }
            });
});