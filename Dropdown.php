<?php
include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label>Academic Year:</label>
        <select>
            <?php 
            $acad_year=mysqli_query($con, "Select * from academic_year");
            while($c=mysqli_fetch_array($acad_year)){
                ?>
<option value="<?php echo$c['ID']?>"><?php echo $c['academic_year']?></option>
<?php } ?>        
</select>


<label>Branch:</label>
        <select>
            <?php 
            $branches=mysqli_query($con, "Select * from branch");
            while($c=mysqli_fetch_array($branches)){
                ?>
<option value="<?php echo$c['ID']?>"><?php echo $c['branch']?></option>
<?php } ?>        
</select>

<label>Semester:</label>
        <select>
            <?php 
            $semester=mysqli_query($con, "Select * from sem");
            while($c=mysqli_fetch_array($semester)){
                ?>
<option value="<?php echo$c['ID']?>"><?php echo $c['sem']?></option>
<?php } ?>        
</select>

<label>Division:</label>
        <select>
            <?php 
            $divs=mysqli_query($con, "Select * from div");
            while($c=mysqli_fetch_array($divs)){
                ?>
<option value="<?php echo$c['ID']?>"><?php echo $c['division']?></option>
<?php } ?>        
</select>
    </form>
</body>
</html>