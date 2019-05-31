jQuery(document).ready(function( $ ){
	$(".rm-form").submit(function(e){
		e.preventDefault(); // Stops the form from going to another page when submitted
		let fd = new FormData($(".rm-form")[0]);
		fd.append("action", "rm_enter_data");
		fd.append("security", ajax.nonce);
		$.ajax({ //jqajax for auto complete
			type: "post",
			url: ajax.url,
			data: fd,
			cache: false,
			processData: false,
			contentType: false,
			success: (response) => {
				//TODO: Provide Feedback
				console.log(response); // For Debugging
				window.location = $(this).attr('action');
			}
		});
	});
	
//TODO: change the name during duplication
	  let counter = 0; //Used to track individual repeatables
	$(document).on('click', '.next-ingredient', function (e) {
		e.preventDefault();
		// let $repeatable = $('.repeatable:last');
		let $repeatable = $(this).closest('.repeatable');
		let newHTML = $repeatable.prop('outerHTML');
		$(newHTML).insertAfter($repeatable);
		console.log($repeatable.next());
	});

	

	// $(document).on('click', '.next-ingredient', function (e) {
	//     e.preventDefault();
	//    $('.repeatable').parent('div.parent').append($('.parent').children('div:first').prop('outerHTML'));
	// });



	$(document).on('click', '.cookingInstruction', function (e) {
		e.preventDefault();
		let $nextInstruction = $(this).closest('.nextInstruction');
		let newHTMLS = $nextInstruction.prop('outerHTML');
		$(newHTMLS).insertAfter($nextInstruction);
		console.log($nextInstruction.next());
	//    $('.nextInstruction').parent('div.firstInstruction').append($('.firstInstruction').children('div:first').prop('outerHTML'));
	});
});