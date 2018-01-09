$(document).ready(function() {
 $(function() {
 	$('#worked .add-day').click(function() {
 		var hariplus ='<tr><th>Hari</th><th>1</th><td><button type="button" class="btn btn-danger delete-row">-</button></td></tr>';
 		$('#worked tbody').append(hariplus);
 	});

 	$('#worked').on('click', '.delete-row', function () {
        $(this).parent().parent().remove();
    });

})
});