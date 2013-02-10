var timer;
var timer_count = 0;
var timer_on = false;
function timer_start() {
	timer_on = true;
	if (timer_count == 1) {
		timer_on = false;
		update('code');
	}
	else {
		timer_count++;
		timer = setTimeout('timer_start()', 500);
	}
};
function timer_reset() {
	timer_count = 0;
	if (timer_on == false) {
		timer_start();
	}
}; 
function popup_open(tag) {
	$('#pop_'+tag).show();
}
function popup_cancel(tag) {
	$('#pop_'+tag).hide();
	$('#'+tag+'_field').val('');
}
function update(field) {
	var data = $('#'+field).val();
	$('#'+field+'_output').html(data);
}

function upload() {
	var fileinput = document.getElementById('img_field');
	var file = fileinput.files[0];
	var ajax = new XMLHttpRequest();
	ajax.open('POST', '/assets/ajax/upload.php', true);
	ajax.setRequestHeader('X-File-Name', file.name);
	ajax.send(file);
	ajax.onreadystatechange=function() {
		if (ajax.readyState == 4 && ajax.status == 200) {
			insert('img',ajax.responseText)
		}
	}
}

function insert(tag,data) {
	if (data == undefined) {
		data = '';
	}
	$('#pop_'+tag).hide();
	$('#a_field').val();
	if (tag == 'a') {
		var otag = '<a href="'+data+'">';
		var ctag = '</a>';
	}
	else if (tag == 'img') {
		var otag = '<img src="'+data+'"/>';
		var ctag = '';
	}
	else {
		var otag = '<'+tag+'>';
		var ctag = '</'+tag+'>';
	}
	
	var code = $('textarea').val();
	var start = $('textarea')[0].selectionStart;
	var end = $('textarea')[0].selectionEnd;
	var front = code.substring(0,start);
	var middle = code.substring(start,end);
	var back = code.substring(end,$('textarea').val().length);
	
	if ((middle.indexOf(otag) >= 0) && (middle.indexOf(ctag) >= 0)) {
		middle = middle.replace(otag,'');
		middle = middle.replace(ctag,'');
		$('textarea').val(front+middle+back);
	}
	
	else {
		$('textarea').val(front+otag+middle+ctag+back);
	}
	
	update('code');
}