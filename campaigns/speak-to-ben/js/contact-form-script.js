$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
       if($("input[name=\'agree'\]:checked").val() == 1)
		{
			
			$("#check").removeClass("has-error");
			
		}else{
			$("#check").addClass("has-error");
			
		}
        formError();
		
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
		$("#check").removeClass("has-error");
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var phone = $("#phone").val();

    $.ajax({
        type: "POST",
        url: "form-process.php",
        data: "name=" + name + "&phone=" + phone,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Message Submitted!")
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}