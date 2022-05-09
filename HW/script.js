jQuery(document).ready(function(){

	forshow();
	jQuery(".save").click(function(){
		forInsert();
	});
	jQuery(".update").click(function(){
		forUpdate();
	});


});

function forInsert(){
	var id=jQuery("#id").val();
	var studentname=jQuery("#studentname").val();
	var sFatherName=jQuery("#sFatherName").val();
	var sMotherName=jQuery("#sMotherName").val();
	var sPhone=jQuery("#sPhone").val();
	var sAddress=jQuery("#sAddress").val();
		$.ajax({
		'url' : 'process.php',
		'type' : 'post',
		'data' : {
			'id':id,
			'studentname':studentname,
			'sFatherName':sFatherName,
			'sMotherName':sMotherName,
			'sPhone':sPhone,
			'sAddress':sAddress,
			'checker':'insert'
		},
		'success':function(result){
			jQuery("#id").val('');
			jQuery("#studentname").val('');
			jQuery("#sFatherName").val('');
			jQuery("#sMotherName").val('');
			jQuery("#sPhone").val('');
			jQuery("#sAddress").val('');
			jQuery(".msg").html(result).fadeIn();
			forshow();
			jQuery(".msg").html(result).fadeOut(2000);
		}
	});
}

function forshow(){
	$.ajax({
		'url' : 'process.php',
		'type' : 'post',
		'data' : {
			'checker':'showInformation'
		},
		'success':function(result){
			jQuery(".alldata").html(result).fadeIn();
		}
	});
}

function forupdatego(id){

	$.ajax({
		'url' : 'process.php',
		'type' : 'post',
		'data' : {
			'checker':'showforinput',
			'id':id
		},
		'success':function(result){
			var user =JSON.parse(result);
			jQuery("#id").val(user.id);
			jQuery("#studentname").val(user.studentname);
			jQuery("#sFatherName").val(user.sFatherName);
			jQuery("#sMotherName").val(user.sMotherName);
			jQuery("#sPhone").val(user.sPhone);
			jQuery("#sAddress").val(user.sAddress);
		}
	});
}


function forUpdate(){
	var id=jQuery("#id").val();
	var studentname=jQuery("#studentname").val();
	var sFatherName=jQuery("#sFatherName").val();
	var sMotherName=jQuery("#sMotherName").val();
	var sPhone=jQuery("#sPhone").val();
	var sAddress=jQuery("#sAddress").val();
	$.ajax({
		'url' : 'process.php',
		'type' : 'post',
		'data' : {
			'id':id,
			'studentname':studentname,
			'sFatherName':sFatherName,
			'sMotherName':sMotherName,
			'sPhone':sPhone,
			'sAddress':sAddress,
			'checker':'update'
		},
		'success':function(result){
			jQuery(".msg").html(result).fadeIn();
			forshow();
			jQuery("#id").val('');
			jQuery("#studentname").val('');
			jQuery("#sFatherName").val('');
			jQuery("#sMotherName").val('');
			jQuery("#sPhone").val('');
			jQuery("#sAddress").val('');
			jQuery(".msg").html(result).fadeOut(2000);
		}
	});
}
function forDelete(id){
	$.ajax({
		'url' : 'process.php',
		'type' : 'post',
		'data' : {
			'id':id,
			'checker':'delete'
		},
		'success':function(result){
			jQuery(".msg").html(result).fadeIn();
			forshow();
			jQuery(".msg").html(result).fadeOut(2000);
		}
	});
}