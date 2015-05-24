$('#registermodal').easyModal({
	top: 200,
	overlay : 0.2
});

$('#loginmodal').easyModal({
	overlay : 0.4,
	overlayClose: false
});

$('#open-registermodal').click(function(e){
	$('#registermodal').trigger('openModal');
});

$('#open-loginmodal').click(function(e){
	$('#loginmodal').trigger('openModal');
	e.preventDefault();
});