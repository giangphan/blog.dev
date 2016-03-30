


$doc = $(document);
$doc.ready( function() {
	checkWidth();
	$(window).resize(function() {
		checkWidth();
	});
	$('*[data-toggle=menubar]' ).click ( function() {
		$('body').toggleClass('site-menubar-unfold');
		$('body').toggleClass('site-menubar-hide');
		if($(window).width() < 768){
			$('.page').toggleClass('dimmed');
		}
	});

	var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#products"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
    	e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="col-md-3 form-row"><div class="input-wrapper"><label for="sanPham_'+x+'">Sản phẩm</label><input type="text" name="sanPham[]" id="sanPham_'+x+'" class="form-control"><span class="input-bar"></span></div></div><div class="col-md-2 form-row"><div class="input-wrapper"><label for="soLuong">Số lượng</label><input type="number" name="soLuong[]" class="form-control"><span class="input-bar"></span></div></div><div class="col-md-7 form-row"><div class="input-wrapper"><label for="ghiChuSanPham">Ghi chú sản phẩm</label><input type="text" name="ghiChuSanPham[]" class="form-control"><span class="input-bar"></span></div></div></div>'); //add input box
        }
    });
});

$doc.on('blur', 'input[type=text], input[type=password], textarea, input[type=number]', function (){
	$(this).parent().removeClass('input-focus');
});

$doc.on('focusin', 'input[type=text], input[type=password], textarea, input[type=number]', function (){
	$(this).parent().addClass('input-focus');
});

$(document).on('change', 'input[type=text], input[type=password], textarea, input[type=number]', function (){
	if ( $(this).val() == ""){
		$(this).parent().removeClass('input-filled');
	} else {
		$(this).parent().addClass('input-filled');
	}

});
$('input[type=text], input[type=password], textarea, input[type=number]').each(function(){ 
	if ( $(this).val() != ""){
		$(this).parent().addClass('input-filled');
	}
});

function checkWidth(){
	if ($(window).width() < 768) {
		$('body').removeClass('site-menubar-unfold').addClass('site-menubar-hide');
	}
	else{
		$('body').addClass('site-menubar-unfold').removeClass('site-menubar-hide');
	}
}
function toggleFullScreen() {
	if ((document.fullScreenElement && document.fullScreenElement !== null) ||
		(!document.mozFullScreen && !document.webkitIsFullScreen)) {
		if (document.documentElement.requestFullScreen) {
			document.documentElement.requestFullScreen();
		}
		else if (document.documentElement.mozRequestFullScreen) {
			document.documentElement.mozRequestFullScreen();
		}
		else if (document.documentElement.webkitRequestFullScreen) {
			document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
		}
	}
	else {
		if (document.cancelFullScreen) {
			document.cancelFullScreen();
		}
		else if (document.mozCancelFullScreen) {
			document.mozCancelFullScreen();
		}
		else if (document.webkitCancelFullScreen) {
			document.webkitCancelFullScreen();
		}
	}
}

$('#toggleFullscreen').click(function() {
	toggleFullScreen();
});

