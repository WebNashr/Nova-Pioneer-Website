function yrmBackend() {
	
}

yrmBackend.prototype.init = function() {
	
	this.deleteAjaxRequest();
};

yrmBackend.prototype.deleteAjaxRequest = function() {

	jQuery('.yrm-delete-link').bind('click', function (e) {
		e.preventDefault();

		var confirmStatus = confirm('Are you shure?');

		if(!confirmStatus) {
			return;
		}

		var id = jQuery(this).attr('data-id');

		var data = {
			action: 'delete_rm',
			readMoreId: id
		};

		jQuery.post(ajaxurl, data, function(response,d) {
			window.location.reload();
		});

	});
};

jQuery(document).ready(function() {
	
	var obj = new yrmBackend();
	obj.init();
});