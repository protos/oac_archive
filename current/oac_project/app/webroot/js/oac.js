$(document).ready(function() {
    init();
});

/**
 * Attaches event handlers to display the 'other' text field if the
 * correct option is selected for 'record type' and 'compiler'
 */
function init() {
	var select_id = new Array("record_type_select", "other_compiler_select");
	
	for (var k = 0, i = select_id.length; k < i; k++) {

        if ($("#" + select_id[k])) {

            $("#" + select_id[k]).bind("change", function (event) {
				
                var target = event.currentTarget;
                var id = target.id;
				var fld = id.substring (0, id.length - 7);
			
                if (parseInt(target.length) - 1 == parseInt(target.selectedIndex)) {
					$("#" + fld).show();
				} else {
					$("#" + fld).hide();
				}

                if (id == "record_type_select") {
                    generateOacRefNo(event.currentTarget.selectedIndex);
                }
			});
		}		
	}
    var select = $("#record_type_select");

    if (select) {
        generateOacRefNo(select.attr("selectedIndex"));
    }
}

/**
 * Generates the correct oac reference code based on the
 * selectbox index selected.
 *
 * @param {Number} index The index selected.
 */
function generateOacRefNo(index) {
    var code = null;

    switch(parseInt(index)) {
        case(0) : 
            code = "CAS";
            break;
        case(1) : 
            code = "RTRMT";
            break;
        case(2) : 
            code = "RTRC";
            break;
        case(3) : 
            code = "LP78";
            break;
        case(4) : 
            code = "LP45";
            break;
        case(5) : 
            code = "LP33";
            break;
        case(6) : 
            code = "CD";
            break;
        case(7) : 
            code = "DVD";
            break;
        case(8) : 
            code = "DAT";
            break;
        case(9) : 
            code = "MD";
            break;
        case(10) : 
            code = "DR";
            break;
       case(11) : 
            code = "OTHER";
            break;
        default : 
            code = "OTHER";
    }

    $("#AudioAlbumOacRefNo").val(code);
}


