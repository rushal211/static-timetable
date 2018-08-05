l
<?php 
$conn = mysqli_connect('localhost','root','','timetable');
	if ($conn) {

	$sql = "SELECT * FROM detailstemp WHERE week = 'Monday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$monday = $row['time1'];
		$monday2 = $row['time2'];
		$monday3 = $row['time3'];
		$monday4 = $row['time4'];
		$monday5 = explode( "." , $row['time5'] );
		$monday6 = explode( "." , $row['time6'] );
	}

	$sql = "SELECT * FROM detailstemp WHERE week = 'Tuesday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$tuesday = $row['time1'];
		$tuesday2 = $row['time2'];
		$tuesday3 = $row['time3'];
		$tuesday4 = $row['time4'];
		$tuesday5 = explode( "." , $row['time5'] );
		$tuesday6 = explode( "." , $row['time6'] );
	}

	$sql = "SELECT * FROM detailstemp WHERE week = 'Wednesday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$wednesday = $row['time1'];
		$wednesday2 = $row['time2'];
		$wednesday3 = $row['time3'];
		$wednesday4 = $row['time4'];
		$wednesday5 = explode( "." , $row['time5'] );
		$wednesday6 = explode( "." , $row['time6'] );
	}

	$sql = "SELECT * FROM detailstemp WHERE week = 'Thursday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$thursday = $row['time1'];
		$thursday2 = $row['time2'];
		$thursday3 = explode( "." , $row['time3'] );
		$thursday4 = explode( "." , $row['time4'] );
		$thursday5 = explode( "." , $row['time5'] );
		$thursday6 = explode( "." , $row['time6'] );
	}

	$sql = "SELECT * FROM detailstemp WHERE week = 'Friday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$friday = $row['time1'];
		$friday2 = $row['time2'];
		$friday3 = $row['time3'];
		$friday4 = $row['time4'];
		$friday5 = $row['time5'];
		$friday6 = $row['time6'];
	}

	$sql = "SELECT * FROM detailstemp WHERE week = 'Saturday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$saturday = $row['time1'];
		$saturday2 = $row['time2'];
		$saturday3 = $row['time3'];
		$saturday4 = $row['time4'];
		$saturday5 = $row['time5'];
		$saturday6 = $row['time6'];
	}

	// Rooms
	$sql = "SELECT * FROM rooms WHERE week = 'Monday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$mondayroom = $row['time1'];
		$monday2room = $row['time2'];
		$monday3room = $row['time3'];
		$monday4room = $row['time4'];
		$monday5room = explode( "." , $row['time5'] );
		$monday6room = explode( "." , $row['time6'] );
	}

	$sql = "SELECT * FROM rooms WHERE week = 'Tuesday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$tuesdayroom = $row['time1'];
		$tuesday2room = $row['time2'];
		$tuesday3room = $row['time3'];
		$tuesday4room = $row['time4'];
		$tuesday5room = explode( "." , $row['time5'] );
		$tuesday6room = explode( "." , $row['time6'] );
	}

	$sql = "SELECT * FROM rooms WHERE week = 'Wednesday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$wednesdayroom = $row['time1'];
		$wednesday2room = $row['time2'];
		$wednesday3room = $row['time3'];
		$wednesday4room = $row['time4'];
		$wednesday5room = explode( "." , $row['time5'] );
		$wednesday6room = explode( "." , $row['time6'] );
	}

	$sql = "SELECT * FROM rooms WHERE week = 'Thursday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$thursdayroom = $row['time1'];
		$thursday2room = $row['time2'];
		$thursday3room = explode( "." , $row['time3'] );
		$thursday4room = explode( "." , $row['time4'] );
		$thursday5room = explode( "." , $row['time5'] );
		$thursday6room = explode( "." , $row['time6'] );
	}

	$sql = "SELECT * FROM rooms WHERE week = 'Friday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$fridayroom = $row['time1'];
		$friday2room = $row['time2'];
		$friday3room = $row['time3'];
		$friday4room = $row['time4'];
		$friday5room = $row['time5'];
		$friday6room = $row['time6'];
	}

	$sql = "SELECT * FROM rooms WHERE week = 'Saturday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$saturdayroom = $row['time1'];
		$saturday2room = $row['time2'];
		$saturday3room = $row['time3'];
		$saturday4room = $row['time4'];
		$saturday5room = $row['time5'];
		$saturday6room = $row['time6'];
	}

	//Faculty
	$sql = "SELECT * FROM faculty WHERE week = 'Monday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$mondayfaculty = $row['time1'];
		$monday2faculty = $row['time2'];
		$monday3faculty = $row['time3'];
		$monday4faculty = $row['time4'];
		$monday5faculty = explode( "." , $row['time5'] );
		$monday6faculty = explode( "." , $row['time6'] );
	}

	$sql = "SELECT * FROM faculty WHERE week = 'Tuesday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$tuesdayfaculty = $row['time1'];
		$tuesday2faculty = $row['time2'];
		$tuesday3faculty = $row['time3'];
		$tuesday4faculty = $row['time4'];
		$tuesday5faculty = explode( "." , $row['time5'] );
		$tuesday6faculty = explode( "." , $row['time6'] );
	}

	$sql = "SELECT * FROM faculty WHERE week = 'Wednesday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$wednesdayfaculty = $row['time1'];
		$wednesday2faculty = $row['time2'];
		$wednesday3faculty = $row['time3'];
		$wednesday4faculty = $row['time4'];
		$wednesday5faculty = explode( "." , $row['time5'] );
		$wednesday6faculty = explode( "." , $row['time6'] );
	}

	$sql = "SELECT * FROM faculty WHERE week = 'Thursday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$thursdayfaculty = $row['time1'];
		$thursday2faculty = $row['time2'];
		$thursday3faculty = explode( "." , $row['time3'] );
		$thursday4faculty = explode( "." , $row['time4'] );
		$thursday5faculty = explode( "." , $row['time5'] );
		$thursday6faculty = explode( "." , $row['time6'] );
	}

	$sql = "SELECT * FROM faculty WHERE week = 'Friday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$fridayfaculty = $row['time1'];
		$friday2faculty = $row['time2'];
		$friday3faculty = $row['time3'];
		$friday4faculty = $row['time4'];
		$friday5faculty = $row['time5'];
		$friday6faculty = $row['time6'];
	}

	$sql = "SELECT * FROM faculty WHERE week = 'Saturday'"  ; 
	$res = mysqli_query($conn, $sql ) ; 
	

	while( $row = mysqli_fetch_assoc($res) )
	{
		$saturdayfaculty = $row['time1'];
		$saturday2faculty = $row['time2'];
		$saturday3faculty = $row['time3'];
		$saturday4faculty = $row['time4'];
		$saturday5faculty = $row['time5'];
		$saturday6faculty = $row['time6'];
	}

} else
 {
 	echo "Error" ; 
 }


?>

<!DOCTYPE html>
<html>
<head>
	<title>4IT2 Timetable</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.0/jspdf.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

<script type="text/javascript">
		function myfunction()
		{
			html2canvas(document.body, {
				onrendered: function(canvas) {
					var doc = new jsPDF();
					doc.save('test.pdf');
				}
			});
		}
	</script>
</head>
<body id="body" style="background-color:skyblue">
	
	<center>
		
	<table border="1" style="text-align: center;">
		<caption>4IT2</caption>
	<div>
		<tr>
			<th style="padding: 10px">Hours</th>
			<th style="padding: 10px">Monday</th>
			<th style="padding: 10px">Tuesday</th>
			<th style="padding: 10px">Wednesday</th>
			<th style="padding: 10px">Thursday</th>
			<th style="padding: 10px">Friday</th>
			<th style="padding: 10px">Saturday</th>
		</tr>
		
		<tr>
			<th style="padding: 10px">09:10 - 10:10</th>
			<td style="padding: 10px">
				<?php echo $monday ; ?> <br>
				<?php echo $mondayfaculty ; ?> <br>
				<?php echo $mondayroom ; ?> 
			</td>
			<td style="padding: 10px">
				<?php echo $tuesday ; ?> <br>
				<?php echo $tuesdayfaculty ; ?> <br>
				<?php echo $tuesdayroom ; ?>
			</td>
			<td style="padding: 10px">
				<?php echo $wednesday ; ?> <br>
				<?php echo $wednesdayfaculty ; ?> <br>
				<?php echo $wednesdayroom ; ?>
			</td>
			<td style="padding: 10px">
				<?php echo $thursday ; ?> <br>
				<?php echo $thursdayfaculty ; ?> <br>
				<?php echo $thursdayroom ; ?>
			</td>
			<td style="padding: 10px">
				<?php echo $friday ; ?> <br>
				<?php echo $fridayfaculty ; ?> <br>
				<?php echo $fridayroom ; ?>
			</td>
			<td style="padding: 10px">
				<?php echo $saturday ; ?> <br>
				<?php echo $saturdayfaculty ; ?> <br>
				<?php echo $saturdayroom ; ?>
			</td>
		</tr>

		<tr>
			<th style="padding: 10px">10:10 - 11.10</th>
			<td style="padding: 10px">
					<?php echo $monday2 ; ?> <br>
					<?php echo $monday2faculty ; ?> <br>
					<?php echo $monday2room ; ?>
				</td>
			<td style="padding: 10px">
				<?php echo $tuesday2 ; ?> <br>
				<?php echo $tuesday2faculty ; ?> <br>
				<?php echo $tuesday2room ; ?>
			</td>
			<td style="padding: 10px">
				<?php echo $wednesday2 ; ?> <br>
				<?php echo $wednesday2faculty ; ?> <br>
				<?php echo $wednesday2room ; ?>
			</td>
			<td style="padding: 10px">
				<?php echo $thursday2 ; ?> <br>
				<?php echo $thursday2faculty ; ?> <br>
				<?php echo $thursday2room ; ?> 
			</td>
			<td style="padding: 10px">
				<?php echo $friday2 ; ?> <br>
				<?php echo $friday2faculty ; ?> <br>
				<?php echo $friday2room ; ?>
			</td>
			<td style="padding: 10px">
				<?php echo $saturday2 ; ?> <br>
				<?php echo $saturday2faculty ; ?> <br>
				<?php echo $saturday2room ; ?>
			</td>
		</tr>
		
		<tr>
			<th style="padding: 05px">11:10 - 12.10</th>
			<td colspan="6" style="padding: 10px"><center>Recess</center></td>
		</tr>

		<tr>
			<th style="padding: 10px">12:10 - 1:10</th>
			<td style="padding: 10px">
			<?php echo $monday3 ; ?> <br>
			<?php echo $monday3faculty ; ?> <br>
			<?php echo $monday3room ; ?>
			</td>
			<td style="padding: 10px">
				<?php echo $tuesday3 ; ?> <br>
				<?php echo $tuesday3faculty ; ?> <br>
				<?php echo $tuesday3room ; ?>
			</td>
			<td style="padding: 10px">
				<?php echo $wednesday3 ; ?> <br>
				<?php echo $wednesday3faculty ; ?> <br>
				<?php echo $wednesday3room ; ?>
			</td>
			<td>
				<table>
					<tr>
						<td style="border-right: 1px solid black; padding: 05px;">Batch A<br>
							<?php echo $thursday3[0] ; ?> <br>
							<?php echo $thursday3faculty[0] ; ?> <br>
							<?php echo $thursday3room[0] ; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch B<br>
							<?php echo $thursday3[1] ; ?> <br>
							<?php echo $thursday3faculty[1] ; ?> <br>
							<?php echo $thursday3room[1] ; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch C<br>
							<?php echo $thursday3[2] ; ?> <br>
							<?php echo $thursday3faculty[2] ; ?> <br>
							<?php echo $thursday3room[2] ; ?>
						</td>
						<td>Batch D<br>
							<?php echo $thursday3[3] ; ?> <br>
							<?php echo $thursday3faculty[3] ; ?> <br>
							<?php echo $thursday3room[3] ; ?>
						</td>
					</tr>
				</table>
			</td>
			<td style="padding: 10px">
				<?php echo $friday3 ; ?> <br>
				<?php echo $friday3faculty ; ?> <br>
				<?php echo $friday3room ; ?>
			</td>
			<td style="padding: 10px">
				<?php echo $saturday3; ?> <br>
				<?php echo $saturday3faculty; ?> <br>
				<?php echo $saturday3room; ?>
			</td>	
		</tr>

		<tr>
			<th style="padding: 10px">01:10 - 02:10</th>
			<td style="padding: 10px">
			<?php echo $monday4 ; ?> <br>
			<?php echo $monday4faculty ; ?> <br>
			<?php echo $monday4room ; ?>
			</td>
			<td style="padding: 10px">
				<?php echo $tuesday4 ; ?> <br>
				<?php echo $tuesday4faculty ; ?> <br>
				<?php echo $tuesday4room ; ?>
			</td>
			<td style="padding: 10px">
				<?php echo $wednesday4 ; ?> <br>
				<?php echo $wednesday4faculty ; ?> <br>
				<?php echo $wednesday4room ; ?>
			</td>
			<td>
				<table>
					<tr>
						<td style="border-right: 1px solid black; padding: 05px;">Batch A<br>
							<?php echo $thursday4[0] ; ?> <br>
							<?php echo $thursday4faculty[0] ; ?> <br>
							<?php echo $thursday4room[0] ; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch B<br>
							<?php echo $thursday4[1] ; ?> <br>
							<?php echo $thursday4faculty[1] ; ?> <br>
							<?php echo $thursday4room[1] ; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch C<br>
							<?php echo $thursday4[2] ; ?> <br>
							<?php echo $thursday4faculty[2] ; ?> <br>
							<?php echo $thursday4room[2] ; ?>
						</td>
						<td>Batch D<br>
							<?php echo $thursday4[3] ; ?> <br>
							<?php echo $thursday4faculty[3] ; ?> <br>
							<?php echo $thursday4room[3] ; ?>
						</td>
					</tr>
				</table>
			</td>
			<td style="padding: 10px">
				<?php echo $friday4 ; ?> <br>
				<?php echo $friday4faculty ; ?> <br>
				<?php echo $friday4room ; ?>
			</td>
			<td style="padding: 10px">
				<?php echo $saturday4; ?> <br>
				<?php echo $saturday4faculty; ?> <br>
				<?php echo $saturday4room; ?>
			</td>	
		</tr>

		<tr>
			<th style="padding: 10px">02:10 - 02:20</th>
			<td colspan="6" style="padding: 10px"><center>Recess</center></td>
		</tr>

		<tr>
			<th style="padding: 10px">02:20 - 03:20</th>
			<td>
				<table>
					<tr>
						<td style="border-right: 1px solid black; padding: 05px;">Batch A<br>
							<?php echo $monday5[0] ; ?> <br>
							<?php echo $monday5faculty[0] ; ?> <br>
							<?php echo $monday5room[0] ; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch B<br>
							<?php echo $monday5[1] ; ?> <br>
							<?php echo $monday5faculty[1] ; ?> <br>
							<?php echo $monday5room[1] ; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch C<br>
							<?php echo $monday5[2] ; ?>	 <br>
							<?php echo $monday5faculty[2] ; ?>	 <br>
							<?php echo $monday5room[2] ; ?>	
						</td>
						<td>Batch D<br>
							<?php echo $monday5[3] ; ?> <br>
							<?php echo $monday5faculty[3] ; ?> <br>
							<?php echo $monday5room[3] ; ?>
						</td>
					</tr>
				</table>
			</td>
			<td >
				<table>
					<tr>
						<td style="border-right: 1px solid black; padding: 05px;">Batch A<br>
							<?php echo $tuesday5[0] ; ?> <br>
							<?php echo $tuesday5faculty[0] ; ?> <br>
							<?php echo $tuesday5room[0] ; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch B<br>
							<?php echo $tuesday5[1] ; ?> <br>
							<?php echo $tuesday5faculty[1] ; ?> <br>
							<?php echo $tuesday5room[1] ; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch C<br>
							<?php echo $tuesday5[2] ; ?> <br>
							<?php echo $tuesday5faculty[2] ; ?> <br>
							<?php echo $tuesday5room[2] ; ?>	
						</td>
						<td>Batch D<br>
							<?php echo $tuesday5[3] ; ?> <br>
							<?php echo $tuesday5faculty[3] ; ?> <br>
							<?php echo $tuesday5room[3] ; ?>
						</td>
					</tr>
				</table>
			</td>
			<td>
				<table>
					<tr>
						<td style="border-right: 1px solid black; padding: 05px;">Batch A<br>
							<?php echo $wednesday5[0]; ?> <br>
							<?php echo $wednesday5faculty[0]; ?> <br>
							<?php echo $wednesday5room[0]; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch B<br>
							<?php echo $wednesday5[1]; ?> <br>
							<?php echo $wednesday5faculty[1]; ?> <br>
							<?php echo $wednesday5room[1]; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch C<br>
							<?php echo $wednesday5[2]; ?> <br>
							<?php echo $wednesday5faculty[2]; ?> <br>
							<?php echo $wednesday5room[2]; ?>
							</td>
						<td>Batch D<br>
							<?php echo $wednesday5[3]; ?> <br>
							<?php echo $wednesday5faculty[3]; ?> <br>
							<?php echo $wednesday5room[3]; ?>
						</td>
					</tr>
				</table>
			</td>
			<td >
				<table>
					<tr>
						<td style="border-right: 1px solid black; padding: 05px;">Batch A<br>
							<?php echo $thursday5[0]; ?> <br>
							<?php echo $thursday5faculty[0]; ?> <br>
							<?php echo $thursday5room[0]; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch B<br>
							<?php echo $thursday5[1]; ?> <br>
							<?php echo $thursday5faculty[1]; ?> <br>
							<?php echo $thursday5room[1]; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch C<br>
							<?php echo $thursday5[2]; ?> <br>
							<?php echo $thursday5faculty[2]; ?> <br>
							<?php echo $thursday5room[2]; ?>
						</td>
						<td>Batch D<br>
							<?php echo $thursday5[3]; ?> <br>
							<?php echo $thursday5faculty[3]; ?> <br>
							<?php echo $thursday5room[3]; ?>
						</td>
					</tr>
				</table>
			</td>
			<td style="padding: 10px">
					<?php echo $friday5 ; ?> <br>
					<?php echo $friday5faculty ; ?> <br>
					<?php echo $friday5room ; ?>
				</td>
			<td style="padding: 10px">
				<?php echo $saturday5 ; ?> <br>
				<?php echo $saturday5faculty ; ?> <br>
				<?php echo $saturday5room ; ?>
			</td>
		</tr>

		<tr>
			<th style="padding: 10px">03:20 - 04:20</th>
			<td>
				<table>
					<tr>
						<td style="border-right: 1px solid black; padding: 05px;">Batch A<br>
							<?php echo $monday6[0] ; ?> <br>
							<?php echo $monday6faculty[0] ; ?> <br>
							<?php echo $monday6room[0] ; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch B<br>
							<?php echo $monday6[1] ; ?> <br>
							<?php echo $monday6faculty[1] ; ?> <br>
							<?php echo $monday6room[1] ; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch C<br>
							<?php echo $monday6[2] ; ?>	 <br>
							<?php echo $monday6faculty[2] ; ?>	 <br>
							<?php echo $monday6room[2] ; ?>	
						</td>
						<td>Batch D<br>
							<?php echo $monday6[3] ; ?> <br>
							<?php echo $monday6faculty[3] ; ?> <br>
							<?php echo $monday6room[3] ; ?>
						</td>
					</tr>
				</table>
			</td>
			<td >
				<table>
					<tr>
						<td style="border-right: 1px solid black; padding: 05px;">Batch A<br>
							<?php echo $tuesday6[0] ; ?> <br>
							<?php echo $tuesday6faculty[0] ; ?> <br>
							<?php echo $tuesday6room[0] ; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch B<br>
							<?php echo $tuesday6[1] ; ?> <br>
							<?php echo $tuesday6faculty[1] ; ?> <br>
							<?php echo $tuesday6room[1] ; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch C<br>
							<?php echo $tuesday6[2] ; ?> <br>	
							<?php echo $tuesday6faculty[2] ; ?> <br>	
							<?php echo $tuesday6room[2] ; ?>	
						</td>
						<td>Batch D<br>
							<?php echo $tuesday6[3] ; ?> <br>
							<?php echo $tuesday6faculty[3] ; ?> <br>
							<?php echo $tuesday6room[3] ; ?>
						</td>
					</tr>
				</table>
			</td>
			<td>
				<table>
					<tr>
						<td style="border-right: 1px solid black; padding: 05px;">Batch A<br>
							<?php echo $wednesday6[0]; ?> <br>
							<?php echo $wednesday6faculty[0]; ?> <br>
							<?php echo $wednesday6room[0]; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch B<br>
							<?php echo $wednesday6[1]; ?> <br>
							<?php echo $wednesday6faculty[1]; ?> <br>
							<?php echo $wednesday6room[1]; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch C<br>
							<?php echo $wednesday6[2]; ?> <br>
							<?php echo $wednesday6faculty[2]; ?> <br>
							<?php echo $wednesday6room[2]; ?>
							</td>
						<td>Batch D<br>
							<?php echo $wednesday6[3]; ?> <br>
							<?php echo $wednesday6faculty[3]; ?> <br>
							<?php echo $wednesday6room[3]; ?>
						</td>
					</tr>
				</table>
			</td>
			<td >
				<table>
					<tr>
						<td style="border-right: 1px solid black; padding: 05px;">Batch A<br>
							<?php echo $thursday6[0]; ?> <br>
							<?php echo $thursday6faculty[0]; ?> <br>
							<?php echo $thursday6room[0]; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch B<br>
							<?php echo $thursday6[1]; ?> <br>
							<?php echo $thursday6faculty[1]; ?> <br>
							<?php echo $thursday6room[1]; ?>
						</td>
						<td style="border-right: 1px solid black; padding: 05px;">Batch C<br>
							<?php echo $thursday6[2]; ?> <br>
							<?php echo $thursday6faculty[2]; ?> <br>
							<?php echo $thursday6room[2]; ?>
						</td>
						<td>Batch D<br>
							<?php echo $thursday6[3]; ?> <br>
							<?php echo $thursday6faculty[3]; ?> <br>
							<?php echo $thursday6room[3]; ?>
						</td>
					</tr>
				</table>
			</td>
			<td style="padding: 10px">
					<?php echo $friday6 ; ?> <br>
					<?php echo $friday6faculty ; ?> <br>
					<?php echo $friday6room ; ?>
				</td>
			<td style="padding: 10px">
				<?php echo $saturday6 ; ?> <br>
				<?php echo $saturday6faculty ; ?> <br>
				<?php echo $saturday6room ; ?>
			</td>
		</tr>
	
	</table><br><br>
</div>
	
	<button onclick="myfunction()"> Click Me </buttton>

	</center>
</body>
</html>
