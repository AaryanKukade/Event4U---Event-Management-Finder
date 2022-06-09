<!DOCTYPE html>
<html>
  <head>
    
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css"
    />
    <style>


table, th, td {
  border: 5px white;
  border-collapse: collapse;
  border-spacing: 30px;
}
th, td {
  padding: 2.5px;
}
</style>
  </head>
  <body>

  
<h1>Event4u - the perfect event management finder.</h1>

<form action="" method="post">
<fieldset>
  <legend><h2>Find your PERFECT EVENT MANAGEMENT TEAM NOW!</h2></legend>

  <label for="event">Type of event:</label>
  <select name="event" id="event">
      <option selected hidden value=""></option>
    <option value="birthday">Birthday</option>
    <option value="wedding">Wedding</option>
    <option value="concert">Concert</option>
  </select>

  <label for="name" >Enter City</label>
  <input type="text" id="city" name="city" />

  <label for="name">Enter your average budget for the selected event</label>
  <input
    type="number"
    id="budget"
    name="budget"
    placeholder="In Rupees"
  
  />

  <br />
</fieldset>

<br />
<div class="form-group">
  <input
    type="submit"
    name="search"
    class="btnSubmit btn-block"
    value="search"
  />
</div>
</form>
    <h2>Results</h2>

    <?php  
    require('connection.php');
    $output = '';

    if(isset($_POST["search"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["search"]);

  

  $event = $_POST["event"];
  $city= $_POST["city"];
  $budget = $_POST["budget"];

$query ='';
  if($event === 'birthday'){
    $query .= "
    SELECT * FROM students
    WHERE city LIKE '%".strtolower($city)."%'
    AND (bdaymin <= $budget
    AND bdaymax >= $budget)";
  }else if($event === 'wedding'){
    $query .= "
    SELECT * FROM students
    WHERE city LIKE '%".strtolower($city)."%'
    AND (weddingmin <= $budget
    AND weddingmax >= $budget)";
  }else{
    $query .= "
    SELECT * FROM students
    WHERE city LIKE '%".strtolower($city)."%'
    AND (concertmin <= $budget
    AND concertmax >= $budget)";
  }


  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0)
	
{

	$output .= ' <table style="width: 950px;" align=center border=6 bgcolor=black>
  
  <tr style="height: 100px;">
  <th>Sr no.</th>
  <th>Company Name</th>
  <th style="width: 100px;">Email ID</th>
  <th>Contact Number</th>
  <th>URL</th>
  <th>City</th>
  <th>Event Type</th>
  <th>Min. Cost</th>
  <th>Max. Cost</th>
  <th style="width: 200px;">Additional Info</th>
</tr>';
					$i=1;
	while($row = mysqli_fetch_array($result))
	{  
		
		$output .= '
		 <div class="">
			<tr >
				<td>'.$i.'</td>
				<td>'.$row["name"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["number"].'</td>
				<td><a href=" '.$row["url"].'"  target="_blank"> '.$row["url"].'</a></td>
        <td>'.$row["city"].'</td>
				<td>'.$event.'</td>';

        if($event == 'birthday'){
        $output .= '	<td>'.$row["bdaymin"].'</td>
        <td>'.$row["bdaymax"].'</td>' ;
        }else if($event == 'wedding'){
          $output .= '	<td>'.$row["weddingmin"].'</td>
          <td>'.$row["weddingmax"].'</td>' ;
        }else{
          $output .= '	<td>'.$row["concertmin"].'</td>
          <td>'.$row["concertmax"].'</td>' ;
        }


				$output .= '<td>'.$row["about"].'</td>
			            </tr>	';
   
        $i++;
	}
   
	echo $output;
}
else
{
	echo '<tr><td>No such event Found</td><tr>';
}

}

    ?>

  
  </body>
</html>
