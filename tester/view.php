<?php
// Include the database configuration file
include 'db.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on ASC");
$imageURL = array();
$js_array= array();
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL[] = 'uploads/'.$row["file_name"];
        
        }        $js_array= json_encode($imageURL);

}else{ ?>

    <p>No image(s) found...</p>
    
<?php } ?>

        




