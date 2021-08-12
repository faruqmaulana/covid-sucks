$('#search-prov').on('click', function () {

	$.ajax({
		url:'https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi',
		type:'get',
		dataType: 'json',
		data: {
			'provinsi': $('#search-input').val()
		},

		success: function (result) {
			console.log(result);
		}

	});

});




$(document).ready(function(){

	$('.number').counterUp({
		time: 1200
	});

});