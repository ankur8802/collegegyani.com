	$(document).ready(function(){
		//var domain_name=document.location.hostname;
		//var base_url = domain_name+'/fyi-new/';
		var base_url = 'https://admissions.imi-k.edu.in/';
		
        $('#otpVerficationDev').hide();
        $('#mobile_otp').keyup(function () {
            if ($(this).val() == '') {
                $('#otpVerficationDev').hide();
            } else {
                $('#otpVerficationDev').show();
            }
        });
		
		$("#select_programme").change(function(){
            var optionSelected = $(this).find("option:selected").val();
            if(optionSelected == ""){
				alert("Please enter programme.");
                $("#select_programme").focus();
                return false;
            }
			var url = base_url+'common/courseList';
            $.post(url, {programmeID: optionSelected}, function(data){
                $("#select_course").html(data);
            });
            return false;
        });
		
		$("#select_state").change(function(){
            var optionSelected = $(this).find("option:selected").val();
            if(optionSelected == ""){
                alert("Please Select State.");
                $("#select_state").focus();
                return false;
            }
			var url = base_url+'common/cityList';
            $.post(url, {stateID: optionSelected}, function(data){
                    $("#select_city").html(data);
            });
            return false;
        });
		
		$("#mobileVerfication").click(function() {
			var mobile_number = $('#mobile_number').val();
			if(mobile_number == ''){
				alert('Please Enter Mobile Number.');
				return false;
			}
			if(!mobile_number.match('[0-9]{10}'))  {
				alert("Please Enter 10 digit Mobile Number.");
				return false;
			}
			var data = {
				mobile_number:mobile_number,
				submit: 1
			};
			
			$.ajax({
				url: base_url+'lead/mobileOtpSend',
				type: 'post',
				dataType: "json",
				data: data,
				success: function(output) {
					if(output.responseType == 'fail'){
						alert(output.message);
					}else{
						alert(output.message);
						$("#otpVerfication").click(function() {
							var mobile_number = $('#mobile_number').val();
							if(mobile_number == ''){
								alert('Please Enter Mobile Number.');
								return false;
							}
							if(!mobile_number.match('[0-9]{10}'))  {
								alert("Please Enter 10 digit Mobile Number.");
								return false;
							}
							var otp = $('#mobile_otp').val();
							if(otp == ''){
								alert('Please Enter OTP.');
								return false;
							}
							if(!otp.match('[0-9]{4}'))  {
								alert("Please Enter 4 digit OTP.");
								return false;
							}
							var data = {
								mobile_number:mobile_number,
								otp:otp,
								submit: 1
							};
							$.ajax({
								url: base_url+'lead/mobileOtpVerify',
								type: 'post',
								dataType: "json",
								data: data,
								success: function(output1) {
									if(output1.responseType == 'fail'){
										alert(output1.message);
									}else{
										alert(output1.message);
									}	
								}
							});
							return false;  
						});	
						
					}
				}
			}); 
			return false; 
		});
    });
	
	