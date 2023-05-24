<!DOCTYPE html>
<html>

<head>
	<title>Course Selection</title>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
		integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
		integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<style>
		/* style for table input values*/
		body {
			/* background-image: url('./5621852.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			backdrop-filter: blur(); */
		}

		table {
			border-collapse: collapse;
			font-family: monospace;
			3
		}

		th,
		td {
			border: 1px solid black;
			padding: 8px;
		}

		#heading {

			text-align: center;
		}

		table,
		th,
		td {
			border: 1px solid black;
		}

		/* Style ends here */

		/* Style for uploading the files */
		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			margin-top: 50px;
		}

		.file-upload {
			position: relative;
			overflow: hidden;
			margin-top: 20px;
			margin-bottom: 20px;
			width: 200px;
			height: 50px;
			/* background: #0ae715; */
			color: #fff;
			font-size: 16px;
			line-height: 50px;
			text-align: center;
			cursor: pointer;
			border-radius: 5px;
		}

		.file-upload input[type=file] {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			width: 100%;
			height: 100%;
			opacity: 0;
			cursor: pointer;
		}

		.short-box {
			border: 1px solid #ccc;
			padding: 10px;
			margin-bottom: 20px;
			width: 300px;
			height: auto;
			overflow: auto;
			text-align: justify;
			line-height: 1.5;
			font-size: 14px;
			border-radius: 5px;
		}

		.remove-button {
			/* color: #f00; */
			cursor: pointer;

			/* margin-top: -190px; */
			/* position: absolute; */

		}

		.button-container {
			/* background-color: #0ae811; */
			/* color: #151212; */
			padding: 10px 30px;
			/* border: none; */
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 20px;
			margin-bottom: 50px;
			display: flex;
			justify-content: center;
			align-items: center;
			position: center;
		
		}




		#preview-selected-image {
			width: 250px;
		}

		/*style ending for uploadig the files */
	</style>
	<script language="JavaScript">
function Selectall(source) {
  checkboxes = document.getElementsByName('course_code[]');
  
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
</head>

<body>
	<h2 id="heading"><img
			src="https://vjit.ac.in/wp-content/uploads/2022/05/VJIT-Logo_FINAL07JAN-01-scaled-e1654076045812.jpg" alt=""
			srcset="" width="270px" class="col-5 "> </h2>
	<!-- <h4 id="heading"> <i>Aziz nagar-500075, Hyderabad.</i><h4> 
<h4 id="heading">(Approved by AICTE, New Delhi, Affiliated to JNTUH)</h4> -->
</body>

<form action="./upload.php" method="post" id="myform">
	<table style="width:50%;" align="center" class="table table-striped font-family: fantasy;">
		<tr>
			<td colspan="2" align="center">Student course Registration Form</td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" required></td>
		</tr>



		<tr>
			<td>Roll Number:</td>
			<td><input type="text" name="rollno" minlength="8" required></td>
		</tr>

		<tr>
			<td>Course:</td>

			<td>

				<select id="course" class="form-select" name="Course">
					<option value="">-- Select an option --</option>
					<option value="b.tech">B.Tech</option>
					<option value="m.tech">M.Tech</option>
					<option value="mba">MBA</option>
				</select>
			</td>
		</tr>


		<tr>
			<td>Year:</td>
			<td>
				<select id="year" class="form-select" name="year"></select>
				<script>

				</script>
			</td>
		</tr>


		<tr>
			<td>Semester:</td>

			<td>
				<select id="semester" class="form-select" name="sem">
					<option value="">-- Select an option --</option>
					<option value="1">I</option>
					<option value="2">II</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Branch:</td>

			<td>
				<select id="branch" class="form-select" name="branch">
					<!-- <option value="">-- Select an option --</option>
					<option value="CSE">CSE</option>
					<option value="CSE(DS)">CSE(DS)</option>
					<option value="AI">AI</option>
					<option value="CSE(AI&ML)">CSE(AI&ML)</option>
					<option value="AI&DS">AI&DS</option>
					<option value="IT">IT</option>
					<option value="ECE">ECE</option>
					<option value="ME">MECH</option>
					<option value="CE">Civil</option>
					<option value="EEE">EEE</option> -->
				</select>
			</td>
		</tr>
	</table>

	<br><br>
	<div style="text-align: center;">
		<a onclick="showSubjects()" class="btn btn-success">Show Subjects</a>
	</div>
	<!--checkbox for selecting all SUBJECTS  -->
     <div>
	 <input type='checkbox' class='form-check-input' id="select-all">
	 </div>
    <!--checkbox ends here-->
	<br><br>
	<div class="container">
		<table id="subjectTable" class="table table-striped p-1" style="margin: 0 auto; font-family: monospace;">
			<thead>
				
				<tr>
					<th>S.No</th>
					<th>Choose</th>
					<th>Course Code</th>
					<th>Course Title</th>
					<th>L</th>
					<th>T</th>
					<th>P</th>
					<th>Credits</th>

				</tr>
			</thead>
			<tbody id="subjectTableBody">
			<tr><input type="checkbox" class='form-check-input' style="" onClick="Selectall(this)"> <h3>Select All the courses</h3></tr>
			</tbody>
		</table>
	</div>


	<div class="container">
		<div class="row">
			<div class="col">
				<div class="file-upload bg-danger">

					<span>Upload Payment Details <br> Choose File </span>
					<input type="file" name="file" accept="image/*" onchange="previewImage(event); required" />
				</div>
			</div>
			<div class="col">
				<button class="remove-button btn btn-danger mt-4">X</button>
			</div>
			
				
			
		</div><br><input type="text" name="Upiref" placeholder="UPI reference number" required><br>
		<div class="short-box">
			<div class="preview">
				<img id="preview-selected-image" />
			</div>
			<!-- file content will be displayed here -->
		</div>
		<button class="btn btn-primary" id="submitfrom">Submit</button>
		<!-- <button class="print-button btn btn-outline-primary" id="printbtn">Print </button><br> -->
		<p id="output"></p>
	</div>
</form>
<div class="button-container">
<button  class="print-button btn btn-outline-primary" id="printbtn">Print </button><br>
</div>


<script>

	//script for selecting the course and year

	// Get references to the course and year select elements
	const courseSelect = document.getElementById('course');
	const yearSelect = document.getElementById('year');

	// Define a function to populate the year select element
	function populateYears(course) {
		// Clear the current options from the year select element
		yearSelect.innerHTML = '';

		// Create an array of possible years based on the selected course
		let years = [];
		if (course === 'b.tech') {
			years = ["--Select the Year--", 1, 2, 3, 4];
		} else if (course === 'm.tech') {
			years = ["--Select the Year--", 1, 2];
		} else if (course === 'mba') {
			years = ["--Select the Year--", 1, 2];
		}

		// Create an option element for each year and add it to the year select element
		years.forEach(year => {
			const option = document.createElement('option');
			option.value = year;
			option.textContent = year;
			yearSelect.appendChild(option);
		});
	}

	// Attach an event listener to the course select element
	courseSelect.addEventListener('change', function () {
		// Get the selected course value
		const selectedCourse = courseSelect.value;

		// Populate the year select element based on the selected course
		populateYears(selectedCourse);
	});

	//--------->script for course and branches----------------------->
	// Get references to the course and year select elements
	const courseSelected = document.getElementById('course');
	const branchSelected = document.getElementById('branch');

	// Define a function to populate the year select element
	function populatebranch(course) {
		// Clear the current options from the year select element
		branchSelected.innerHTML = '';

		// Create an array of possible years based on the selected course
		let branches = [];
		if (course === 'b.tech') {
			branches = ["--Select the branch--", "CSE", "CSE(DS)","AI","CSE(AI&ML)","AI&DS","IT","ECE","ME","CE","EEE"];
		} else if (course === 'm.tech') {
			branches = ["--Select the branch--","mtech1", "mtech2"];
		} else if (course === 'mba') {
			branches = ["--Select the branch--", "mba1", "mba2"];
		}

		// Create an option element for each year and add it to the year select element
		branches.forEach(branch => {
			const option = document.createElement('option');
			option.value = branch;
			option.textContent = branch;
			branchSelected.appendChild(option);
		});
	}
    //----------------select all course_code-------------
	// Attach an event listener to the course select element
	courseSelected.addEventListener('change', function () {
		// Get the selected course value
		const selectedCourse = courseSelected.value;

		// Populate the year select element based on the selected course
		populatebranch(selectedCourse);
	});
      
	// Get a reference to the "Select All" checkbox
const selectAllCheckbox = document.getElementById('select-all');

// Get references to all the checkboxes for each course code
const courseCodeCheckboxes = document.querySelectorAll('input[name="course_code[]"]');

// Add an event listener to the "Select All" checkbox
selectAllCheckbox.addEventListener('change', function() {
  // Loop through each course code checkbox
  courseCodeCheckboxes.forEach(function(checkbox) {
    // Set the checked state of the course code checkbox to match the "Select All" checkbox
    checkbox.checked = selectAllCheckbox.checked;
  });
});

//------------------------------------------------------------------------------


   //script for generating the table
	function addTableRow(tableBody, S_No, Choose, courseCode, coursetitle, L, T, P, Credits) {
		var row = tableBody.insertRow();
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1)
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
		var cell6 = row.insertCell(5);
		var cell7 = row.insertCell(6);
		var cell8 = row.insertCell(7);
		//var cell9 = newRow.insertCell(8);

		cell1.innerHTML = S_No;
		cell2.innerHTML = Choose;
		cell3.innerHTML = courseCode;
		cell4.innerHTML = coursetitle;
		cell5.innerHTML = L;
		cell6.innerHTML = T;
		cell7.innerHTML = P;
		cell8.innerHTML = Credits;

	}

	function showSubjects() {
		var course = document.getElementById("course").value;
		var year = document.getElementById("year").value;
		var semester = document.getElementById("semester").value;
		var branch = document.getElementById("branch").value;
		var tableBody = document.getElementById("subjectTableBody");
		tableBody.innerHTML = "";

		
		switch (course) {
			case "b.tech":
				switch (year) {
					case "1":
						switch (semester) {
							case "1":
								switch (branch) {
									case "CSE":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
										addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
										addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
										// insertRow();
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";







									 break;
									case "CSE(DS)":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
										addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
										addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";



										break;
									case "AI":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
										addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
										addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";

										break;
									case "CSE(AI&ML)":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
										addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
										addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";


										break;
									case "AI&DS":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
										addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
										addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";




										break;
									case "IT":

										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra & Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", "Programming for Problem Solving", "3", "0", "0", "3.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
										addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
										addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
										addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";



										break;
									case "ECE":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra& Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "3", "1", "0", "4.0");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", " C-Programming for Engineers Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", " English for Skill Enhancement", "2", "0", "0", "2.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221401'name='course_code[]'>", "A221401", "Elements of Electronics & Communication Engineering", "0", "0", "2", "1.0");
										addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "3", "1", "0", "4.0");
										addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
										addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";

										break;
									case "EEE":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221201'name='course_code[]'>", "A221201", "Elements of Electrical& Electronics Engineering", "0", "0", "2", "1.0");
										addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
										addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
										addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";


										break;
									case "ME":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221301'name='course_code[]'>", "A221301", "Elements of Mechanical Engineering", "0", "0", "2", "1.0");
										addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
										addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
										addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";

										break;
									case "CE":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab ", "0", "0", "3", "1.5");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab ", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221101'name='course_code[]'>", "A221101", "Elements of Civil Engineering", "0", "0", "2", "1.0");
										addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
										addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
										addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";


									default:
										console.log("Invalid branch");
								}
								break;

							case "2":
								switch (branch) {
									case "CSE":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
										addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";


										break;

									case "CSE(DS)":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
										addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";


										break;
									case "AI":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
										addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";



										break;
									case "CSE(AI&ML)":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
										addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";

										break;
									case "AI&DS":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
										addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";




										break;
									case "IT":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary DifferentialEquations & Vector Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
										addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";



										break;
									case "ECE":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II( Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
										addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
										addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";


										break;
									case "EEE":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222203'name='course_code[]'>", "A222203", "Electrical Circuits", "3", "1", "0", "4.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222282'name='course_code[]'>", "A222282", "Electrical Circuits Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
										addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";


										break;
									case "ME":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "1", "0", "4.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222305'name='course_code[]'>", "A222305", "Engineering Materials", "2", "0", "0", "2.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
										addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";

										break;
									case "CE":
										addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
										addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
										addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab ", "0", "0", "2", "1.0");
										addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "0", "0", "3.0");
										addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222102'name='course_code[]'>", "A222102", "Building Materials, Construction and Planning", "2", "0", "0", "2.0");
										addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
										addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
										addTableRow(tableBody, " ", " ", " ", "Total", "12", "4", "8", "20");
										var row = tableBody.insertRow();
										var cell = row.insertCell(0);
										cell.colSpan = "8";
										cell.innerHTML = "&nbsp;";
										var lastRow = tableBody.insertRow();
										var totalCell = lastRow.insertCell(0);

										// create cells for the three headings
										var headingCell1 = lastRow.insertCell(0);
										var headingCell2 = lastRow.insertCell(1);
										var headingCell3 = lastRow.insertCell(3);

										// set the contents of the cells to the headings
										headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
										headingCell1.colSpan = "3";
										headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										//totalCell.style.textAlign = "right";
										headingCell2.colSpan = "3";
										headingCell3.innerHTML = "<b> HOD SIGNATURE";
										headingCell3.colSpan = "3";


									default:
										console.log("Invalid branch");
								}
								break;
							default:
								console.log("Invalid Semester");
								break;
						}
						break;
					// case "2":
					// 	switch (semester) {
					// 		case "1":
					// 			switch (branch) {
					// 				case "CSE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
										
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>STUDENT SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
									
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";







					// 					break;
					// 				case "CSE(DS)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "AI":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CSE(AI&ML)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "AI&DS":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

									
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";




					// 					break;
					// 				case "IT":

					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", "Programming for Problem Solving", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

									
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "ECE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra& Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", " C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", " English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221401'name='course_code[]'>", "A221401", "Elements of Electronics & Communication Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

									
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "EEE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221201'name='course_code[]'>", "A221201", "Elements of Electrical& Electronics Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "ME":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221301'name='course_code[]'>", "A221301", "Elements of Mechanical Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab ", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab ", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221101'name='course_code[]'>", "A221101", "Elements of Civil Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 				default:
					// 					console.log("Invalid branch");
					// 			}
					// 			break;

					// 		case "2":
					// 			switch (branch) {
					// 				case "CSE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;

					// 				case "CSE(DS)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "AI":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "CSE(AI&ML)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "AI&DS":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
									
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";




					// 					break;
					// 				case "IT":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary DifferentialEquations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "ECE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II( Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
									
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "EEE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222203'name='course_code[]'>", "A222203", "Electrical Circuits", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222282'name='course_code[]'>", "A222282", "Electrical Circuits Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "ME":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222305'name='course_code[]'>", "A222305", "Engineering Materials", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab ", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222102'name='course_code[]'>", "A222102", "Building Materials, Construction and Planning", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "12", "4", "8", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 				default:
					// 					console.log("Invalid branch");
					// 			}
					// 			break;
					// 		default:
					// 			console.log("Invalid Semester");
					// 			break;
					// 	}
					// 	break;
					// case "3":
					// 	switch (semester) {
					// 		case "1":
					// 			switch (branch) {
					// 				case "CSE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
										
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";







					// 					break;
					// 				case "CSE(DS)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "AI":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

									
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
									
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CSE(AI&ML)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "AI&DS":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";




					// 					break;
					// 				case "IT":

					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", "Programming for Problem Solving", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "ECE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra& Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", " C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", " English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221401'name='course_code[]'>", "A221401", "Elements of Electronics & Communication Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "EEE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221201'name='course_code[]'>", "A221201", "Elements of Electrical& Electronics Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "ME":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221301'name='course_code[]'>", "A221301", "Elements of Mechanical Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab ", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab ", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221101'name='course_code[]'>", "A221101", "Elements of Civil Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

									
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 				default:
					// 					console.log("Invalid branch");
					// 			}
					// 			break;

					// 		case "2":
					// 			switch (branch) {
					// 				case "CSE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

									
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;

					// 				case "CSE(DS)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "AI":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "CSE(AI&ML)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "AI&DS":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";




					// 					break;
					// 				case "IT":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary DifferentialEquations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "ECE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II( Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "EEE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222203'name='course_code[]'>", "A222203", "Electrical Circuits", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222282'name='course_code[]'>", "A222282", "Electrical Circuits Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "ME":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222305'name='course_code[]'>", "A222305", "Engineering Materials", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab ", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222102'name='course_code[]'>", "A222102", "Building Materials, Construction and Planning", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "12", "4", "8", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 				default:
					// 					console.log("Invalid branch");
					// 			}
					// 			break;
					// 		default:
					// 			console.log("Invalid Semester");
					// 			break;
					// 	}
					// 	break;
					// case "4":
					// 	switch (semester) {
					// 		case "1":
					// 			switch (branch) {
					// 				case "CSE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
										
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";







					// 					break;
					// 				case "CSE(DS)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "AI":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CSE(AI&ML)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "AI&DS":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";




					// 					break;
					// 				case "IT":

					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", "Programming for Problem Solving", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

									
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
									
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "ECE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra& Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", " C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", " English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221401'name='course_code[]'>", "A221401", "Elements of Electronics & Communication Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

									
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "EEE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221201'name='course_code[]'>", "A221201", "Elements of Electrical& Electronics Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "ME":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221301'name='course_code[]'>", "A221301", "Elements of Mechanical Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

									
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab ", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab ", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221101'name='course_code[]'>", "A221101", "Elements of Civil Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 				default:
					// 					console.log("Invalid branch");
					// 			}
					// 			break;

					// 		case "2":
					// 			switch (branch) {
					// 				case "CSE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;

					// 				case "CSE(DS)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "AI":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "CSE(AI&ML)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "AI&DS":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";




					// 					break;
					// 				case "IT":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary DifferentialEquations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "ECE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II( Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "EEE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222203'name='course_code[]'>", "A222203", "Electrical Circuits", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222282'name='course_code[]'>", "A222282", "Electrical Circuits Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

									
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
									
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "ME":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222305'name='course_code[]'>", "A222305", "Engineering Materials", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab ", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222102'name='course_code[]'>", "A222102", "Building Materials, Construction and Planning", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "12", "4", "8", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
									
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 				default:
					// 					console.log("Invalid branch");
					// 			}
					// 			break;
					// 		default:
					// 			console.log("Invalid Semester");
					// 			break;
					// 	}
					// 	break;

					default:
						console.log("Invalid year");

				}
				break;

			case "m.tech":
				switch (year) {
					// case "1":
					// 	switch (semester) {
					// 		case "1":
					// 			switch (branch) {
					// 				case "CSE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
										
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

									
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";







					// 					break;
					// 				case "CSE(DS)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "AI":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CSE(AI&ML)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "AI&DS":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";




					// 					break;
					// 				case "IT":

					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", "Programming for Problem Solving", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "ECE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra& Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", " C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", " English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221401'name='course_code[]'>", "A221401", "Elements of Electronics & Communication Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "EEE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221201'name='course_code[]'>", "A221201", "Elements of Electrical& Electronics Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "ME":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221301'name='course_code[]'>", "A221301", "Elements of Mechanical Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab ", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab ", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221101'name='course_code[]'>", "A221101", "Elements of Civil Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 				default:
					// 					console.log("Invalid branch");
					// 			}
					// 			break;

					// 		case "2":
					// 			switch (branch) {
					// 				case "CSE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
									
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;

					// 				case "CSE(DS)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "AI":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
									
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "CSE(AI&ML)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "AI&DS":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";




					// 					break;
					// 				case "IT":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary DifferentialEquations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "ECE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II( Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "EEE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222203'name='course_code[]'>", "A222203", "Electrical Circuits", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222282'name='course_code[]'>", "A222282", "Electrical Circuits Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "ME":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222305'name='course_code[]'>", "A222305", "Engineering Materials", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab ", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222102'name='course_code[]'>", "A222102", "Building Materials, Construction and Planning", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "12", "4", "8", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 				default:
					// 					console.log("Invalid branch");
					// 			}
					// 			break;
					// 		default:
					// 			console.log("Invalid Semester");
					// 			break;
					// 	}
					// 	break;
					// case "2":
					// 	switch (semester) {
					// 		case "1":
					// 			switch (branch) {
					// 				case "CSE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
										
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";







					// 					break;
					// 				case "CSE(DS)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "AI":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CSE(AI&ML)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

									
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
									
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "AI&DS":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";




					// 					break;
					// 				case "IT":

					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", "Programming for Problem Solving", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "ECE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra& Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", " C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", " English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221401'name='course_code[]'>", "A221401", "Elements of Electronics & Communication Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

									
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "EEE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221201'name='course_code[]'>", "A221201", "Elements of Electrical& Electronics Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

									
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "ME":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221301'name='course_code[]'>", "A221301", "Elements of Mechanical Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab ", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab ", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221101'name='course_code[]'>", "A221101", "Elements of Civil Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 				default:
					// 					console.log("Invalid branch");
					// 			}
					// 			break;

					// 		case "2":
					// 			switch (branch) {
					// 				case "CSE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
									
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;

					// 				case "CSE(DS)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "AI":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

									
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "CSE(AI&ML)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "AI&DS":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";




					// 					break;
					// 				case "IT":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary DifferentialEquations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "ECE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II( Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "EEE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222203'name='course_code[]'>", "A222203", "Electrical Circuits", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222282'name='course_code[]'>", "A222282", "Electrical Circuits Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "ME":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222305'name='course_code[]'>", "A222305", "Engineering Materials", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab ", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222102'name='course_code[]'>", "A222102", "Building Materials, Construction and Planning", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "12", "4", "8", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

										
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

										
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
										
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 				default:
					// 					console.log("Invalid branch");
					// 			}
					// 			break;
					// 		default:
					// 			console.log("Invalid Semester");
					// 			break;
					// 	}
					// 	break;

						default:
						console.log("Invalid year");
						break;	
                    }
				break;

			case "mba":
				switch (year) {
					// case "1":
					// 	switch (semester) {
					// 		case "1":
					// 			switch (branch) {
					// 				case "CSE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					// insertRow();
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";







					// 					break;
					// 				case "CSE(DS)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "AI":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CSE(AI&ML)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "AI&DS":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";




					// 					break;
					// 				case "IT":

					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", "Programming for Problem Solving", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "ECE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra& Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", " C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", " English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221401'name='course_code[]'>", "A221401", "Elements of Electronics & Communication Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "EEE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221201'name='course_code[]'>", "A221201", "Elements of Electrical& Electronics Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "ME":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221301'name='course_code[]'>", "A221301", "Elements of Mechanical Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab ", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab ", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221101'name='course_code[]'>", "A221101", "Elements of Civil Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 				default:
					// 					console.log("Invalid branch");
					// 			}
					// 			break;

					// 		case "2":
					// 			switch (branch) {
					// 				case "CSE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;

					// 				case "CSE(DS)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "AI":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "CSE(AI&ML)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "AI&DS":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";




					// 					break;
					// 				case "IT":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary DifferentialEquations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "ECE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II( Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "EEE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222203'name='course_code[]'>", "A222203", "Electrical Circuits", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222282'name='course_code[]'>", "A222282", "Electrical Circuits Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "ME":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222305'name='course_code[]'>", "A222305", "Engineering Materials", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab ", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222102'name='course_code[]'>", "A222102", "Building Materials, Construction and Planning", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "12", "4", "8", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 				default:
					// 					console.log("Invalid branch");
					// 			}
					// 			break;
					// 		default:
					// 			console.log("Invalid Semester");
					// 			break;
					// 	}
					// 	break;
					// case "2":
					// 	switch (semester) {
					// 		case "1":
					// 			switch (branch) {
					// 				case "CSE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					// insertRow();
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";







					// 					break;
					// 				case "CSE(DS)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "AI":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CSE(AI&ML)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "AI&DS":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001' name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra and Calculus)", "3", "1", "0", "4.0");

					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221004'name='course_code[]'>", "A221004", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221083'name='course_code[]'>", "A221083", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input'value='A221202'name='course_code[]'>", "A221202", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input'value='A221281'name='course_code[]'>", "A221281", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221302'name='course_code[]'>", "A221302", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", " Programming for Problem Solving ", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "10", " ", "Induction Programme", " ", " ", " ", " ", " ");
					// 					addTableRow(tableBody, "", "", " ", "Total", "12", "2", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";




					// 					break;
					// 				case "IT":

					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I (Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221502'name='course_code[]'>", "A221502", "Programming for Problem Solving", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221582'name='course_code[]'>", "A221582", "Programming for Problem Solving Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221503'name='course_code[]'>", "A221503", "Elements of Computer Science & Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "ECE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra& Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", " C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", " English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221401'name='course_code[]'>", "A221401", "Elements of Electronics & Communication Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "EEE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221201'name='course_code[]'>", "A221201", "Elements of Electrical& Electronics Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "ME":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221301'name='course_code[]'>", "A221301", "Elements of Mechanical Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A221001'name='course_code[]'>", "A221001", "Mathematics-I(Linear Algebra & Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A221002'name='course_code[]'>", "A221002", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A221081'name='course_code[]'>", "A221081", "Applied Physics Lab ", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A221501'name='course_code[]'>", "A221501", "C-Programming for Engineers", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A221581'name='course_code[]'>", "A221581", "C-Programming for Engineers Lab ", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A221003'name='course_code[]'>", "A221003", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A221082'name='course_code[]'>", "A221082", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A221101'name='course_code[]'>", "A221101", "Elements of Civil Engineering", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "9", "<input type='checkbox' class='form-check-input' value='A221381'name='course_code[]'>", "A221381", "Engineering Workshop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "10", " ", " ", "Induction Programme", " ", " ", " ", " ");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "3", "12", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 				default:
					// 					console.log("Invalid branch");
					// 			}
					// 			break;

					// 		case "2":
					// 			switch (branch) {
					// 				case "CSE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;

					// 				case "CSE(DS)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "AI":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "CSE(AI&ML)":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "AI&DS":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222007'name='course_code[]'>", "A222007", "Applied Physics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222085'name='course_code[]'>", "A222085", "Applied Physics Lab", "0", "0", "3", "1.5");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222008'name='course_code[]'>", "A222008", "English for Skill Enhancement", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222086'name='course_code[]'>", "A222086", "English Language & Communication Skills Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices and Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222382'name='course_code[]'>", "A222382", "Engineering Work Shop", "0", "1", "3", "2.5");
					// 					addTableRow(tableBody, "", "", " ", "Total", "10", "5", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";




					// 					break;
					// 				case "IT":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics – II (Ordinary DifferentialEquations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";



					// 					break;
					// 				case "ECE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II( Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222204'name='course_code[]'>", "A222204", "Basic Electrical Engineering", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222283'name='course_code[]'>", "A222283", "Basic Electrical Engineering Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222402'name='course_code[]'>", "A222402", "Electronic Devices & Circuits", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "8", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "EEE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics–II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222203'name='course_code[]'>", "A222203", "Electrical Circuits", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222282'name='course_code[]'>", "A222282", "Electrical Circuits Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 					break;
					// 				case "ME":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222305'name='course_code[]'>", "A222305", "Engineering Materials", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "11", "4", "10", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";

					// 					break;
					// 				case "CE":
					// 					addTableRow(tableBody, "1", "<input type='checkbox' class='form-check-input' value='A222005'name='course_code[]'>", "A222005", "Mathematics– II (Ordinary Differential Equations & Vector Calculus)", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "2", "<input type='checkbox' class='form-check-input' value='A222006'name='course_code[]'>", "A222006", "Engineering Chemistry", "3", "1", "0", "4.0");
					// 					addTableRow(tableBody, "3", "<input type='checkbox' class='form-check-input' value='A222084'name='course_code[]'>", "A222084", "Engineering Chemistry Lab ", "0", "0", "2", "1.0");
					// 					addTableRow(tableBody, "4", "<input type='checkbox' class='form-check-input' value='A222304'name='course_code[]'>", "A222304", "Engineering Mechanics", "3", "0", "0", "3.0");
					// 					addTableRow(tableBody, "5", "<input type='checkbox' class='form-check-input' value='A222102'name='course_code[]'>", "A222102", "Building Materials, Construction and Planning", "2", "0", "0", "2.0");
					// 					addTableRow(tableBody, "6", "<input type='checkbox' class='form-check-input' value='A222303'name='course_code[]'>", "A222303", "Engineering Graphics & Modelling", "1", "0", "4", "3.0");
					// 					addTableRow(tableBody, "7", "<input type='checkbox' class='form-check-input' value='A222583'name='course_code[]'>", "A222583", "Python Programming Lab", "0", "2", "2", "3.0");
					// 					addTableRow(tableBody, " ", " ", " ", "Total", "12", "4", "8", "20");
					// 					var row = tableBody.insertRow();
					// 					var cell = row.insertCell(0);
					// 					cell.colSpan = "8";
					// 					cell.innerHTML = "&nbsp;";
					// 					var lastRow = tableBody.insertRow();
					// 					var totalCell = lastRow.insertCell(0);

					// 					// create cells for the three headings
					// 					var headingCell1 = lastRow.insertCell(0);
					// 					var headingCell2 = lastRow.insertCell(1);
					// 					var headingCell3 = lastRow.insertCell(3);

					// 					// set the contents of the cells to the headings
					// 					headingCell1.innerHTML = "<b>HOD SIGNATURE</b>";
					// 					headingCell1.colSpan = "3";
					// 					headingCell2.innerHTML = "<b>PARENT SIGNATURE</b>";
					// 					//totalCell.style.textAlign = "right";
					// 					headingCell2.colSpan = "3";
					// 					headingCell3.innerHTML = "<b> STUDENT SIGNATURE";
					// 					headingCell3.colSpan = "3";


					// 				default:
					// 					console.log("Invalid branch");
					// 			}
					// 			break;
					// 		default:
					// 			console.log("Invalid Semester");
					// 			break;
					// 	}
					// 	break;
						default:
						console.log("Invalid Year");
						break;
				}
				break;
			default:
			console.log("Invalid course");
				break;

		}

	}

	// uplading the images



	const fileUpload = document.querySelector('.file-upload input[type=file]');
	const shortBox = document.querySelector('.short-box');
	const removeButton = document.querySelector('.remove-button');
	const printButton = document.querySelector('.print-button');

	fileUpload.addEventListener('change', function (event) {
		const file = event.target.files[0];
		const reader = new FileReader();

		reader.onload = function (event) {
			shortBox.innerHTML = event.target.result;
		};

		reader.displayImage(file);

	});

	removeButton.addEventListener('click', function () {
		shortBox.innerHTML = '';
	});

	printButton.addEventListener('click', function () {
		window.print();
	});


	const previewImage = (event) => {
		/**
		 * Get the selected files.
		 */
		const imageFiles = event.target.files;
		/**
		 * Count the number of files selected.
		 */
		const imageFilesLength = imageFiles.length;
		/**
		 * If at least one image is selected, then proceed to display the preview.
		 */
		if (imageFilesLength > 0) {
			/**
			 * Get the image path.
			 */
			const imageSrc = URL.createObjectURL(imageFiles[0]);
			/**
			 * Select the image preview element.
			 */
			const imagePreviewElement = document.querySelector("#preview-selected-image");
			/**
			 * Assign the path to the image preview element.
			 */
			imagePreviewElement.src = imageSrc;
			/**
			 * Show the element by changing the display value to "block".
			 */
			imagePreviewElement.style.display = "block";
		}
	}; console.log(); console.log(); console.log(); console.log();
	$("#printbtn").hide();
	$("#myform").on("submit", function (event) {
		event.preventDefault();
		var form = $('#myform')[0];

		var data = new FormData(form);
		$("#submitfrom").prop("disable", true);

		$.ajax({
			type: "POST",
			enctype: 'multipart/form-data',
			url: "upload.php",
			data: data,
			processData: false,
			contentType: false,
			cache: false,
			timeout: 800000,
			success: function (data) {

				$("#output").html(data);
				console.log("SUCCESS : ", data);
				$("#submitfrom").hide();
				$("#printbtn").show();
			},
			error: function (e) {

				$("#output").html(e.responseText);
				console.log("ERROR : ", e);
				$("#submitfrom").prop("disabled", false);

			}
		});
	});

</script>

</body>

</html>