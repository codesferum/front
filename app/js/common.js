$(function() {

	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "../mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Thanks for the request. Soon we will contact you");
			$("#form").trigger("reset");
		});
		return false;
	});

});
