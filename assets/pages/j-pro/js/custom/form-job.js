$(document).ready(function(){

			// Phone masking
			$('#phone').mask('99-9999-9999', {placeholder:'x'});

			// Validation
			$( "#j-pro" ).justFormsPro({
				rules: {
					first_name: {
						required: true
					},
					year: {
						required: true
					},
					course: {
						required: true
					},
					email: {

						required: false,
						email: false
					},
					phone: {
						required: true
					},
					country: {
						required: true
					},
					city: {
						required: true
					},
					post_code: {
						required: true
					},
					address: {
						required: true
					},
					position: {
						required: true
					},
					message: {
						required: false
					},
					file1: {
						validate: true,
						required: false,
						size: 1,
						extension: "xls|xlsx|docx|doc"
					},
					file2: {
						validate: true,
						required: false,
						size: 1,
						extension: "xls|xlsx|docx|doc"
					}
				},
				messages: {
					first_name: {
						required: "Add your Name"
					},
					year: {
						required: "Enter Year of Study"
					},
					course: {
						required: "Add Course"
					},
					email: {
						required: "Add your email",
						email: "Incorrect email format"
					},
					phone: {
						required: "Add your phone"
					},
					country: {
						required: ""
					},
					city: {
						required: "Add your city"
					},
					post_code: {
						required: "Add Course"
					},
					address: {
						required: "Add your address"
					},
					position: {
						required: "Select desired position"
					},
					message: {
						required: "Add your message"
					},
					file1: {
						size_extension: "File types: xls/xlsx/docx/doc. Size: 1Mb"
					},
					file2: {
						size_extension: "File types: xls/xlsx/docx/doc. Size: 1Mb"
					}
				},
				debug: true
			});
		});