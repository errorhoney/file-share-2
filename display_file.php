<?php
// Include the database configuration file
include 'config-sample.php';

// Get images from the database
$query = $db->query("SELECT * FROM nfolder ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No file(s) found...</p>
<?php } ?>