$(window).on('load', function() {
	$('#loading').hide();

	$("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
	
    $('#dtBasicExample').DataTable();
	$('.dataTables_length').addClass('bs-select');
});