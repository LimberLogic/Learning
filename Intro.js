/**
 * Adds one to the argument
 * @param arg Integer to add one to
 * @return Integer of arg + 1
 */
function testFN(arg) {
	if(typeof arg != 'number')
		return 0;
	
	return arg + 1;
}

var obj = {};

obj.test = 5;
obj.isTrue = false;
obj.fp = 3.1;
obj.arr = ['element 0', 'element 1', 'element 2'];
obj.fn = function() { console.log('I\'m an anonymous function', arguments); };

obj.fn(1,2,3,4);

// console.log('Object is:', obj);

document.getElementById('js');

// Here be the jQuery

var cache = '';

function refreshData() {
	$.ajax({
		url: '/ajax.php',
		type: 'GET',
		success: function(data) {
// 			console.log('Data received from server:', data);
			
			// bail if we receive the same data as last time
			stringified = JSON.stringify(data);
			if(cache == '' || cache != stringified)
				cache = stringified;
			else
				return;
			
			$('#ajax').html('');
			data.forEach(function(element) {
				$('#ajax').append('<tr><td>' + element.email + '</td><td>' + element.name + '</td><td><a href="#" class="btn btn-danger delete">Delete</a></td></tr>');
			});
			
			$('.delete').click(function(){
				$(this).parent().parent().fadeOut('slow');
				cache = '';
			});
		}
	});
}

function clearAndReloadData() {
	refreshData();
}

$(document).ready(function(){
	refreshData();
	
	$('#reload').click(clearAndReloadData);
	setInterval(clearAndReloadData, (10 * 1000));
});

console.log('You see this first due to async!');