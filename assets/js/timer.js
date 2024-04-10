function makeTimer() {
	var endTime = new Date("23 February 2023 10:00:00 GMT+3:00");			
	endTime = (Date.parse(endTime) / 1000);
	var now = new Date();
	now = (Date.parse(now) / 1000);
	var timeLeft = endTime - now;
	var days = Math.floor(timeLeft / 86400); 
	var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
	var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
	var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
	if (hours < "10") { hours = "0" + hours; }
	if (minutes < "10") { minutes = "0" + minutes; }
	if (seconds < "10") { seconds = "0" + seconds; }
	$("#days").html(days + "<span>Days</span>");
	$("#hours").html(hours + "<span>Hours</span>");
	$("#minutes").html(minutes + "<span>Minutes</span>");
	$("#seconds").html(seconds + "<span>Seconds</span>");
	
	if( endTime < now) { 
		$("#days").html("");
		$("#hours").html("");
		$("#minutes").html("");
		$("#seconds").html("");
	}
}
setInterval(function() { makeTimer(); }, 1000);



function isCounterElementVisible($element) {
	var topView = $(window).scrollTop();
	var botView = topView + $(window).height();
	var topElement = $element.offset().top;
	var botElement = topElement + $element.height();
	return ((botElement <= botView) && (topElement >= topView));
}

$(window).scroll(function() {
	$(".count").each(function() {
		isOnView = isCounterElementVisible($(this));
		if (isOnView && !$(this).hasClass('visibled')) {
			$(this).addClass('visibled');
			$(this).prop('Counter', 0).animate({
				Counter: $(this).text()
				}, {
				duration: 6000,
				easing: 'swing',
				step: function(now) {
					$(this).text(Math.ceil(now));
				}
			});
		}
	});
});
