




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>report</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<h1>Report Sexual Harrasment and any other form of work bullying Sasa</h1>

<form action="#" method="post" id="report">
  <div>
  <p>
    <label>
      Full names / Majina Kamili <br>
    <input type="text" id="file" placeholder="Placeholder" value="full names">
    </label>
  </p>

  <p>
    <label>
    Identification  number / Kitabulisho<br>
    <input type="number" placeholder="123456789">
    </label>
  </p>
  <p>
    <label>
      Work place name / Majina ya mahali pa kazi<br>
    <input type="email" placeholder="@email.com">
    </label>
  </p>

  <p>
    <label>
      telephone line / nambari ya simu <br>
    <input type="tel" placeholder="(254) 456-7890">
    </label>
  </p>

  <p>
    <label>
      Case report here / andika ripoti hapa:<br>
      <textarea rows="5" cols="40" placeholder="Case report here ....."></textarea>
    </label>
  </p>
  <p>
    <label>
      date  of incidence / siku ya kisa <br>
    <input type="date">
    </label>
  </p>
    <label>
      month / mwezi<br>
    <input type="month">
    </label>
  </p>
  <p>
    <label>
      week / wiki <br>
    <input type="week">
    </label>
  </p>
  <p>
    <label>
      time / masaa <br>
    <input type="time">
    </label>
  </p>
  <p>
    <label>
      select town /unatoka wapi <br>
      <select>
					<option value="" disabled selected>Selected town..</option>
          <option>Nakuru</option>
          <option>Nairobi</option>
          <option>Kisumu</option>
          <option>Mombasa</option>
      </select>
    </label>
  </p>


  <p>
    <input type="file" name="file id / kitambulisho " id="file">
  </p>
  <br>
  <br>
  <p>
    <input type="submit">
  </p>
  <p>
    <input type="reset">
  </p>

</form>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
<script>

var fileList = [];

$('#file').on('change', function (event) {

	fileList = [];

	// Append files to fileList
	for (var i = 0; i < this.files.length; i++) {
		fileList.push(this.files[i]);
	}
});

sendFile = function (file) {

	// Create Ajax Request
	$.ajax({
		url: ' ../.php',
		type: 'POST',
		data: new FormData($('form')[0]),
		cache: false,
		contentType: false,
		processData: false
	});
}

$('#report').on('submit', function (event) {
	event.preventDefault();

	//Asynchronous Transfer
	sendFile(file);
});
</script>
</body>
</html>
