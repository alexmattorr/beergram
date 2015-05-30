$(document).ready(function() {
	function modal() {
		var modalBtn = $(".modal-btn");
		var modalBg = $(".modal-bg");
		var modalClose = $(".modal-close");

		modalBtn.click(function() {
			modalBg.fadeIn();
		});

		modalClose.click(function() {
			modalBg.fadeOut();
		})
	}

	function init() {
		modal();
	}

	init();
});