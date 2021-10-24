<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Information</title>
<link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;
    }
</style>



<style>
body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
  background-color:#fafafa;
}

table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  margin-top:50px;
}

table caption {
  font-size: 1.5em;
  margin: .25em 0 .75em;
}

table tr {
  background: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th, table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

table td img { text-align: center; }
@media screen and (max-width: 600px) {

table { border: 0; }

table caption { font-size: 1.3em; }

table thead { display: none; }

table tr {
  border-bottom: 3px solid #ddd;
  display: block;
  margin-bottom: .625em;
}

table td {
  border-bottom: 1px solid #ddd;
  display: block;
  font-size: .8em;
  text-align: right;
}

table td:before {
  content: attr(data-label);
  float: left;
  font-weight: bold;
  text-transform: uppercase;
}

table td:last-child { border-bottom: 0; }
}

</style>

</head>

<body>
    
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Brand Name</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="../index.php" class="nav-item nav-link ">Home</a>
                <a href="user.php" class="nav-item nav-link active">User Detail</a>
             <a href="logout.php" class="nav-item nav-link ">Logout</a>
            </div>
            <br>
            <form class="form-inline ml-auto">
                <button onclick="exportData()" type="submit" class="btn btn-outline-light">Download List</button>
            </form>
        </div>
    </nav>
</div>    

  <center><b style="font-size:24px;">
 User Information
  </b></center>
            
<table id="tblStocks">
  <thead>
    <tr>
	  <th scope="col">Sno</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone No.</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Pin Code</th>
      <th scope="col">Date Time</th>
    </tr>
  </thead>
  <tbody id="myTable">
   <?php
		$sql = mysql_connect('localhost', 'bloodon1_mood704', 'donation@1234');
	mysql_select_db('bloodon1_mood704', $sql);
		$a = "SELECT * FROM scanner";
		$b = mysql_query($a) or die(mysql_error());
		$count = 1;
		while($row=mysql_fetch_array($b)) {
			extract($row);
?>
    
    <tr>
      <td data-label="Sno"><?php echo $count;$count++; ?></td>
      <td data-label="Name"><?php echo $name; ?></td>
      <td data-label="Email"><?php echo $email; ?></td>
      <td data-label="Phone No."><?php echo $phone; ?></td>
      <td data-label="Address" ><?php echo $address; ?></td>
      <td data-label="City"><?php echo $city; ?></td>
      <td data-label="Pin Code"><?php echo $pin; ?></td>
      <td data-label="Date Time"><?php echo $date; ?></td>
    </tr>
	<?php
			}
		?>
  </tbody>
</table>



<script>
function exportData(){
    /* Get the HTML data using Element by Id */
    var table = document.getElementById("tblStocks");
 
    /* Declaring array variable */
    var rows =[];
 
      //iterate through rows of table
    for(var i=0,row; row = table.rows[i];i++){
        //rows would be accessed using the "row" variable assigned in the for loop
        //Get each cell value/column from the row
        column1 = row.cells[0].innerText;
        column2 = row.cells[1].innerText;
        column3 = row.cells[2].innerText;
        column4 = row.cells[3].innerText;
        column5 = row.cells[4].innerText;
        column6 = row.cells[5].innerText;
        column7 = row.cells[6].innerText;
        column8 = row.cells[7].innerText;
        
 
    /* add a new records in the array */
        rows.push(
            [
                column1,
                column2,
                column3,
                column4,
                column5,
                column6,
                column7,
                column8
            ]
        );
 
        }
        csvContent = "data:text/csv;charset=utf-8,";
         /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
        rows.forEach(function(rowArray){
            row = rowArray.join(",");
            csvContent += row + "\r\n";
        });
 
        /* create a hidden <a> DOM node and set its download attribute */
        var encodedUri = encodeURI(csvContent);
        var link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "Report.csv");
        document.body.appendChild(link);
         /* download the data file named "Stock_Price_Report.csv" */
        link.click();
}
</script>
</body>
</html>
