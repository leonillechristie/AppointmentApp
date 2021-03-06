<!-- DETAILED INFORMATION OF THE DOCTORS -->
<!DOCTYPE html>
<?php 

session_start();

?>
<html lang="en">

<head>
	<?php
		require('head.php');
	?>
</head>

<body>

	<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
	</div>
    <?php 
        echo '<input type="text" id="doc_id" value="'.$_GET['docid'].'" hidden>';
        echo '<input type="text" id="user_id" value="'.$_GET['userid'].'" hidden>';
        echo '<input type="text" id="clin_name" value="'.$_GET['clinname'].'" hidden>';
        echo '<input type="text" id="clin_add" value="'.$_GET['clinadd'].'" hidden>';
        echo '<input type="text" id="doc_fname" value="'.$_GET['docfname'].'" hidden>';
        echo '<input type="text" id="doc_mname" value="'.$_GET['docmname'].'" hidden>';
        echo '<input type="text" id="doc_lname" value="'.$_GET['doclname'].'" hidden>';
        echo '<input type="text" id="clin_start" value="'.$_GET['start'].'" hidden>';
        echo '<input type="text" id="clin_end" value="'.$_GET['end'].'" hidden>';
       
    ?>
	<div id="page">		
		<?php
			require('header.php');
		?>

	<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="index.php">Home ></a></li>
					<li><a href="http://localhost/AppointmentApp/ver2/list-2.php?search=&radio_search=all">Doctor List ></a></li>
					<li>Book an Appointment</li>
				</ul>
			</div>
		</div>

		<div class="container margin_60">
			<div class="row">
				
				<aside class="col-xl-3 col-lg-4" id="sidebar">
					<div class="box_profile">
                        <?php 
						echo '<small>'.$_GET['specialization'].'</small>
								<h1>Dr. '.$_GET['docfname'].' '.$_GET['doclname'].'</h1>
                                <div>
                                    <img style="max-height: 100px; width: auto;" src="uploads/'.$_GET['profpic'].'">
                                </div>
                                <ul class="statistic">
                                    <li>Clinic Hours: '.$_GET['start'].' - '.$_GET['end'].'</li><br>
                                    <li style="background-color: red;">Medical License: '.$_GET['medlicense'].'</li>
                                </ul>
                                <ul class="contacts">
                                    <li><h6>Clinic Name</h6>'.$_GET['clinname'].'</li>
								    <li><h6>Clinic Address</h6>'.$_GET['clinadd'].'</li>                                    
                                    <li><h6>Business Permit Number</h6>'.$_GET['permitnum'].'</li>
                                    <li><h6>Telephone Number</h6><a>'.$_GET['tele'].'</a></li>
                                </ul>';
                        ?>
						<div class="text-center"><?php 
						$clin = str_replace(" ","+",$_GET['clinname']);
						$to = str_replace(" ","+",$_GET['clinadd']);
						$final =  $clin . "" . $to;
						echo '<a href="https://www.google.com/maps/dir/University+of+San+Carlos+Talamban+Campus,+Gov.+M.+Cuenco+Avenue,+Cebu+City,+Cebu/'.$final.'" class="btn_1 outline" target="_blank"><i class="icon_pin"></i> View on map</a>'; ?></div>
					</div>
				</aside>

				<div class="col-xl-9 col-lg-8">
					<div class="tabs_styled_2">
						<div class="tab-content">
							<div class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
								<p class="lead add_bottom_30">To book an appointment with the selected doctor, please input or choose from the available dates and time.</p>
								<!-- BOOKING FORM -->
								<form>
									<div class="main_title_3" style="margin-bottom: 20px!important;">
										<h3><strong>1</strong>Select your date</h3>
									</div>
									<div class="form-group add_bottom_45">
                                        <input id="datePicker" class="form-control" type="date" />
									</div>
									<div class="main_title_3" style="margin-bottom: 4%;">
										<h3><strong>2</strong>Select your time</h3>
									</div>
									<div class="row justify-content-center add_bottom_45" style="margin-bottom: 4%; ">
										<div class="col-md-3 col-6 text-center">
											<ul class="time_select">
												<li>
													<input type="radio" id="radio1" name="radio_time" value="09:30" onclick="updateTime(this)">
													<label id="radio11" for="radio1">09.30am</label>
												</li>
												<li>
													<input type="radio" id="radio2" name="radio_time" value="10:00" onclick="updateTime(this)">
													<label id="radio22" for="radio2">10.00am</label>
												</li>
												<li>
													<input type="radio" id="radio3" name="radio_time" value="10:30" onclick="updateTime(this)">
													<label id="radio33"  for="radio3">10.30am</label>
												</li>
												<li>
													<input type="radio" id="radio4" name="radio_time" value="11:00" onclick="updateTime(this)">
													<label id="radio44"  for="radio4">11.00am</label>
												</li>
												<li>
													<input type="radio" id="radio5" name="radio_time" value="11:30" onclick="updateTime(this)">
													<label id="radio55"  for="radio5">11.30am</label>
												</li>
												<li>
													<input type="radio" id="radio6" name="radio_time" value="12:00" onclick="updateTime(this)">
													<label id="radio66"  for="radio6">12.00pm</label>
												</li>
											</ul>
											<input type="text" id="booktime" hidden></input>
										</div>
										<div class="col-md-3 col-6 text-center">
											<ul class="time_select">
												<li>
													<input type="radio" id="radio7" name="radio_time" value="13:30" onclick="updateTime(this)">
													<label id="radio77"  for="radio7">01.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio8" name="radio_time" value="14:00" onclick="updateTime(this)">
													<label id="radio88"  for="radio8">02.00pm</label>
												</li>
												<li>
													<input type="radio" id="radio9" name="radio_time" value="14:30" onclick="updateTime(this)">
													<label id="radio99"  for="radio9">02.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio10" name="radio_time" value="15:00" onclick="updateTime(this)">
													<label id="radio1010"  for="radio10">03.00pm</label>
												</li> 
												<li>
													<input type="radio" id="radio11" name="radio_time" value="15:30" onclick="updateTime(this)">
													<label id="radio1111"  for="radio11">03.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio12" name="radio_time" value="16:00" onclick="updateTime(this)">
													<label id="radio1212"  for="radio12">04.00pm</label>
												</li>
											</ul>
										</div>
									</div>
									
									<div class="main_title_3" style="margin-bottom: 4%;">
										<h3><strong>3</strong>Select visit</h3>
									</div>
									<ul class="treatments clearfix">
										<li>
											<div class="checkbox">
												<input type="checkbox" value="Consultation" class="css-checkbox" id="visit1" name="check" onclick="onlyOne(this)">
												<label for="visit1" class="css-label">Consultation</label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" value="Follow-up visit" class="css-checkbox" id="visit2" name="check" onclick="onlyOne(this)">
												<label for="visit2" class="css-label">Follow-up Visit</label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" value="Treatment visit" class="css-checkbox" id="visit3" name="check" onclick="onlyOne(this)">
												<label for="visit3" class="css-label">Treatment Visit</label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" value="Icontinence visit"  class="css-checkbox" id="visit4" name="check" onclick="onlyOne(this)">
												<label for="visit4" class="css-label">Icontinence visit</label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" value="Prescription"  class="css-checkbox" id="visit5" name="check" onclick="onlyOne(this)">
												<label for="visit5" class="css-label">Prescription</label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" value="Other" class="css-checkbox" id="visit6" name="check" onclick="onlyOne(this)">
												<label for="visit6" class="css-label">Other</label>
											</div>
										</li>
                                        <input type="text" hidden id="visit_type">
									</ul>
									
								</form>		
								<p class="text-center"><button   class="btn_1 medium book">Book Now</button></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<footer>
		<?php
			require('footer.php');
		?>
	</footer>
	</div>

	<!-- Back to top button -->
	<div id="toTop">
		<img class="topArrow" src="./img/up_arrow.png">
	</div>

	<!-- COMMON SCRIPTS -->
	<script src="js/email-decode.min.js"></script>
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
   	
	<!-- SPECIFIC SCRIPTS -->
    <script src="js/bootstrap-datepicker.js"></script>		
	<script>
		$('#calendar').datepicker({
			todayHighlight: true,
			daysOfWeekDisabled: [0],
			weekStart: 1,
			format: "yyyy-mm-dd",
			datesDisabled: ["2017/10/20", "2017/11/21", "2017/12/21", "2018/01/21", "2018/02/21", "2018/03/21"],
		});
	</script>
</body>
</html>

<script type="text/javascript">
function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
    document.getElementById("visit_type").value = checkbox.value;
}

function updateTime(radio) {
    document.getElementById("booktime").value = radio.value;
}
if (typeof jQuery == 'undefined') {
    throw new Error('jQuery is not loaded');
}

$(document).ready( function() {
	$('#datePicker').ready(function() 
	{
		$.ajax({
			url: "requests/checkConflicts.php",	// where the data is posted or sent
			type: 'POST',
			dataType: 'text json', 
			data: {
				datesel: $('#datePicker').val(),
				docid: $('#doc_id').val()
			},
			success: function(res) {		// If the data is successfully posted (user data is sent to db)
				for(var i =0 ;i <12; i++)
				{
					if(res[i] == 1)
					{
						var radid = "#radio"+(i+1);
						$(radid).attr('disabled', true);
						radid = radid+(i+1);
						$(radid).css('background-color', 'grey');

						console.log(radid);
					} 
					else
					{
						var radid = "#radio"+(i+1);
						$(radid).attr('disabled', false);
						radid = radid+(i+1);
						$(radid).removeAttr("style");

						console.log(radid);
					}
				
				}
				console.log(res);
			
			}
		});
	});

    var now = new Date();
 
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);

    var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

   $('#datePicker').val(today);
   $('#datePicker').attr('min', today); 
   $('#datePicker').change(function() {
		$.ajax({
			url: "requests/checkConflicts.php",	// where the data is posted or sent
			type: 'POST',
			dataType: 'text json', 
			data: {
				datesel: $('#datePicker').val(),
				docid: $('#doc_id').val()
			},
			success: function(res) {		// If the data is successfully posted (user data is sent to db)
				for(var i =0 ;i <12; i++)
				{
					if(res[i] == 1)
					{
						var radid = "#radio"+(i+1);
						$(radid).attr('disabled', true);
						radid = radid+(i+1);
						$(radid).css('background-color', 'grey');

						console.log(radid);
					} 
					else
					{
						var radid = "#radio"+(i+1);
						$(radid).attr('disabled', false);
						radid = radid+(i+1);
						$(radid).removeAttr("style");

						console.log(radid);
					}
				
				}
				console.log(res);
			
			}
		});
	});
   $( ".book" ).click(function() {
	
    if($("#datePicker").val() && $("#booktime").val() && $("#visit_type").val()){
       var datepart = $("#datePicker").val().split('-');
       var string= datepart[2]+ "-"+datepart[1]+"-"+datepart[0]+" " + $("#booktime").val();
        var dateTimeParts = string.split(' '),
            timeParts = dateTimeParts[1].split(':'),
            dateParts = dateTimeParts[0].split('-'),
            date;
        
        date = new Date(dateParts[2], parseInt(dateParts[1], 10) - 1, dateParts[0], timeParts[0], timeParts[1]).getTime();
        var type = $("#visit_type").val();
        var docid = $("#doc_id").val();
        var userid = $("#user_id").val();
        var clinname = $("#clin_name").val();
        var clinadd = $("#clin_add").val();
        var fname = $("#doc_fname").val();
        var mname = $("#doc_mname").val();
        var lname = $("#doc_lname").val();
        var clinstart = $("#clin_start").val();
        var clinend = $("#clin_end").val();

        date = date/1000;

		var javaTime = date * 1000;

		var currentTime = new Date();
		currentTime.setHours(currentTime.getHours() + 12);
		if(javaTime > currentTime.getTime())
		{
			document.location.href = 'booking-page.php?docid='+docid+'&userid='+userid+'&clinname='+clinname+'&clinadd='+clinadd+'&docfname='+fname+'&docmname='+mname+'&doclname='+lname+'&start='+clinstart+'&end='+clinend+'&timestamp='+date+'&type='+type;
		} 
		else
		{
			alert("Book Date and Time must be 12 hours earlier than the actual consultation. Please recheck before details before trying again.");
		}   
    } else {
        alert("some fields are empty");
    }
});
});
</script>