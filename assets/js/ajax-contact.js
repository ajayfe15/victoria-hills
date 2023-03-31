$(document).ready(function () {

	$('#form1').on('click', function (e) {
		e.preventDefault();
		var name = $.trim($('#name1').val());
		var email = $.trim($('#email1').val());
		var mobile = $.trim($('#mobile1').val());
		var namePattern = /^([\s\.]?[a-zA-Z]+)+$/;
		var phonePattern = /^[0-9]*$/;
		var EmailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
		var flag = 0;
		var utm_source = $.trim($('#utm_source').val());
		var utm_medium = $.trim($('#utm_medium').val());
		var utm_campaign = $.trim($('#utm_campaign').val());
		var utm_term = $.trim($('#utm_term').val());


		if (name == null || name == '') {
			$('#name1_error').removeClass('error_msg');
			flag++;
		} else if (!namePattern.test(name)) {
			$('#name1_error').removeClass('error_msg');
			$('#name1_error').html('Please Enter Alphabet only');
			flag++;
		} else {
			$('#name1_error').addClass('error_msg');
		}

		if (email == null || email == '' || !EmailPattern.test(email)) {
			$('#email1_error').removeClass('error_msg');
			flag++;
		} else {

			$('#email1_error').addClass('error_msg');
		}

		if (mobile == null || mobile == '' || !phonePattern.test(mobile)) {
			$('#mobile1_error').removeClass('error_msg');
			flag++;
		} else if (mobile.length != 10) {
			$('#mobile1_error').removeClass('error_msg');
			$('#mobile1_error').html('Please Enter 10 Digit Mobile Number');
			flag++;
		} else {
			$('#mobile1_error').addClass('error_msg');
		}

		if (flag == 0) {
			$("#form1 span").html('Please Wait...');
			$('#form1').prop('disabled', true);
			// $('#otp-modal').modal('show');
			// sendOtp(mobile);

			// $('#verifyOTPBtn').on('click', function (e) {
			//     var first = $('#firstdigit').val();
			//     var second = $('#secondtdigit').val();
			//     var third = $('#thirddigit').val();
			//     var fourth = $('#fourdigit').val();

			//     var otp1 = $('#hiddenOTPField').val();
			//     var otp2 = first + second + third + fourth;

			//     otp1 = parseInt(otp1);
			//     otp2 = parseInt(otp2);

			//     if (first || second || third || fourth) {
			//         if (otp1 == otp2) {
			var data = {
				name: name,
				email: email,
				mobile: mobile,
				utm_source: utm_source,
				utm_medium: utm_medium,
				utm_campaign: utm_campaign,
				utm_term: utm_term
			};

			$.ajax({
				type: "POST",
				url: 'leads_save.php',
				data: data,
				beforeSend: function (result) {
					$('#form1').val('Wait..');
				},
				success: function (result) {

					if (result == 1) {
						// $('#otp-modal').modal('hide');
						window.location.replace("thank-you.php");
						//						$('#form1').prop('disabled', false);
					} else if (result == 0) {
						$('#form1').prop('disabled', false);
						$('#form1').val('Error');
						alert('Something went wrong');
					}
				},
				error: function () {
					$('#form1').val('Error');
					$('#form1').prop('disabled', false);
				}
			});
			//         } else {
			//             $('#otp_verification_msg').html(' ').append('Incorrect OTP');
			//         }
			//     } else {
			//         $('#otp_verification_msg').html(' ').append('Please Enter Otp');
			//     }
			// });
		}

	});


	$('#form2').on('click', function (e) {
		e.preventDefault();
		$('#form2').prop('disabled', true);
		var name = $.trim($('#name2').val());
		var email = $.trim($('#email2').val());
		var mobile = $.trim($('#mobile2').val());
		var EmailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
		var phonePattern = /^[0-9]*$/;
		var namePattern = /^([\s\.]?[a-zA-Z]+)+$/;
		var flag = 0;
		var utm_source = $.trim($('#utm_source').val());
		var utm_medium = $.trim($('#utm_medium').val());
		var utm_campaign = $.trim($('#utm_campaign').val());
		var utm_term = $.trim($('#utm_term').val());

		if (name == null || name == '') {
			$('#name2_error').removeClass('error_msg');
			flag++;
		} else if (!namePattern.test(name)) {
			$('#name2_error').removeClass('error_msg');
			$('#name2_error').html('Please Enter Alphabet only');
			flag++;
		} else {
			$('#name2_error').addClass('error_msg');

		}

		if (email == null || email == '' || !EmailPattern.test(email)) {
			$('#email2_error').removeClass('error_msg');
			flag++;
		} else {

			$('#email2_error').addClass('error_msg');
		}

		if (mobile == null || mobile == '' || !phonePattern.test(mobile)) {
			$('#mobile2_error').removeClass('error_msg');
			flag++;
		} else if (mobile.length != 10) {
			$('#mobile2_error').removeClass('error_msg');
			$('#mobile2_error').html('Please Enter 10 Digit Mobile Number');
			flag++;
		} else {
			$('#mobile2_error').addClass('error_msg');
		}

		if (flag == 0) {
			$("#form2 span").html('Please Wait...');
			$('#form2').prop('disabled', true);
			// $('#otp-modal').modal('show');
			// sendOtp(mobile);

			// $('#verifyOTPBtn').on('click', function (e) {
			//     var first = $('#firstdigit').val();
			//     var second = $('#secondtdigit').val();
			//     var third = $('#thirddigit').val();
			//     var fourth = $('#fourdigit').val();

			//     var otp1 = $('#hiddenOTPField').val();
			//     var otp2 = first + second + third + fourth;

			//     otp1 = parseInt(otp1);
			//     otp2 = parseInt(otp2);

			//     if (first || second || third || fourth) {
			//         if (otp1 == otp2) {

			var data = {
				name: name,
				email: email,
				mobile: mobile,
				utm_source: utm_source,
				utm_medium: utm_medium,
				utm_campaign: utm_campaign,
				utm_term: utm_term
			};

			$.ajax({
				type: "POST",
				url: 'leads_save.php',
				data: data,
				beforeSend: function (result) {
					$('#form2').val('Wait..');
				},
				success: function (result) {

					if (result == 1) {
						// $('#otp-modal').modal('hide');
						window.location.replace("thank-you.php");
						//						$('#form2').prop('disabled', false);
					} else if (result == 0) {
						$('#form2').prop('disabled', false);
						$('#form2').val('Error');
						alert('Something went wrong');
					}
				},
				error: function () {
					$('#form2').prop('disabled', false);
					$('#form2').val('Error');
				}
			});
			//         } else {
			//             $('#otp_verification_msg').html(' ').append('Incorrect OTP');
			//         }
			//     } else {
			//         $('#otp_verification_msg').html(' ').append('Please Enter Otp');
			//     }
			// });
		}
	});


	$('#form3').on('click', function (e) {
		e.preventDefault();
		var name = $.trim($('#name3').val());
		var email = $.trim($('#email3').val());
		var mobile = $.trim($('#mobile3').val());
		var EmailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
		var phonePattern = /^[0-9]*$/;
		var namePattern = /^([\s\.]?[a-zA-Z]+)+$/;
		var flag = 0;
		var utm_source = $.trim($('#utm_source').val());
		var utm_medium = $.trim($('#utm_medium').val());
		var utm_campaign = $.trim($('#utm_campaign').val());
		var utm_term = $.trim($('#utm_term').val());

		if (name == null || name == '') {
			$('#name3_error').removeClass('error_msg');
			flag++;
		} else if (!namePattern.test(name)) {
			$('#name3_error').removeClass('error_msg');
			$('#name3_error').html('Please Enter Alphabet only');
			flag++;
		} else {
			$('#name3_error').addClass('error_msg');

		}

		if (email == null || email == '' || !EmailPattern.test(email)) {
			$('#email3_error').removeClass('error_msg');
			flag++;
		} else {

			$('#email3_error').addClass('error_msg');
		}

		if (mobile == null || mobile == '' || !phonePattern.test(mobile)) {
			$('#mobile3_error').removeClass('error_msg');
			flag++;
		} else if (mobile.length != 10) {
			$('#mobile3_error').removeClass('error_msg');
			$('#mobile3_error').html('Please Enter 10 Digit Mobile Number');
			flag++;
		} else {
			$('#mobile3_error').addClass('error_msg');
		}

		if (flag == 0) {
			$("#form3 span").html('Please Wait...');
			$('#form3').prop('disabled', true);
			// $('#otp-modal').modal('show');
			// sendOtp(mobile);

			// $('#verifyOTPBtn').on('click', function (e) {
			//     var first = $('#firstdigit').val();
			//     var second = $('#secondtdigit').val();
			//     var third = $('#thirddigit').val();
			//     var fourth = $('#fourdigit').val();

			//     var otp1 = $('#hiddenOTPField').val();
			//     var otp2 = first + second + third + fourth;

			//     otp1 = parseInt(otp1);
			//     otp2 = parseInt(otp2);

			//     if (first || second || third || fourth) {
			//         if (otp1 == otp2) {

			var data = {
				name: name,
				email: email,
				mobile: mobile,
				utm_source: utm_source,
				utm_medium: utm_medium,
				utm_campaign: utm_campaign,
				utm_term: utm_term
			};

			$.ajax({
				type: "POST",
				url: 'leads_save.php',
				data: data,
				beforeSend: function (result) {
					$('#form3').val('Wait..');
				},
				success: function (result) {
					if (result == 1) {
						// $('#otp-modal').modal('hide');
						window.location.replace("thank-you.php");
						//						$('#form3').prop('disabled', false);
					} else if (result == 0) {
						$('#form3').prop('disabled', false);
						$('#form3').val('Error');
						alert('Something went wrong');
					}
				},
				error: function () {
					$('#form3').prop('disabled', false);
					$('#form3').val('Error');
				}
			});
			//         } else {
			//             $('#otp_verification_msg').html(' ').append('Incorrect OTP');
			//         }
			//     } else {
			//         $('#otp_verification_msg').html(' ').append('Please Enter Otp');
			//     }
			// });
		}
	});



});
