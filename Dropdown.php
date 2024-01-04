<?php
include('dbconnection.php');

if(isset($_POST['submit'])){
$academic_year=$_POST['academic_year'];
$branch=$_POST['branch'];
$semester=$_POST['semester'];
$division=$_POST['division'];
$subject=$_POST['subject'];
$date_from=$_POST['date_from'];
$date_to=$_POST['date_to'];

$query=mysqli_query($con, "Insert into student_info (academic_year, branch, sem, division, attendance_from, attendance_to) Values ('$academic_year','$branch','$semester','$division','$subject','$date_from','$date_to')");
if($query){
    echo "<script>alert('done')</script>";

}else{
     echo "<script>alert('error')</script>";
}


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Academic Year:</label>
        <select name="academic_year">
            <?php 
            $acad_year=mysqli_query($con, "Select * from academic_year");
            while($c=mysqli_fetch_array($acad_year)){
                ?>
<option value="<?php echo$c['ID']?>"><?php echo $c['academic_year']?></option>
<?php } ?>        
</select>

<label>Branch:</label>
        <select name="branch">
            <?php 
            $branches=mysqli_query($con, "Select * from branch");
            while($c=mysqli_fetch_array($branches)){
                ?>
<option value="<?php echo$c['ID']?>"><?php echo $c['branch']?></option>
<?php } ?>        
</select>

<label>Semester:</label>
        <select name="semester">
            <?php 
            $semester=mysqli_query($con, "Select * from sem");
            while($c=mysqli_fetch_array($semester)){
                ?>
<option value="<?php echo$c['ID']?>"><?php echo $c['sem']?></option>
<?php } ?>        
</select>

<label>Division:</label>
        <select name="division">
            <?php 
            $divs=mysqli_query($con, "Select * from division");
            while($c=mysqli_fetch_array($divs)){
                ?>
<option value="<?php echo$c['ID']?>"><?php echo $c['division']?></option>
<?php } ?>        
</select>
<br><br>
<label>Subject:</label>
        <select name="subject">
            <?php 
            $sub=mysqli_query($con, "Select * from subject");
            while($c=mysqli_fetch_array($sub)){
                ?>
<option value="<?php echo$c['ID']?>"><?php echo $c['subject']?></option>
<?php } ?>        
</select>

<label>From:</label>
<input type="date" id="date_from" name="date_from">

<label>To:</label>
<input type="date" id="date_to" name="date_to">

<br><br>
<button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
