<?php
// Include the database configuration file
include 'config-sample.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $folder = 'uploads/'.$row["folder_name"];
?>
    <img src="<?php echo $folder; ?>" alt="" />
<?php }
}else{ ?>
    <p>No folder found...</p>
<?php } ?>