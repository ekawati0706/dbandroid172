<?php 

require_once 'koneksi.php';

$idFakultas  = $_POST['id_fakultas'];
if(!$idFakultas) {
	echo json_encode (array('message'=>'required failed is empty'));
}
else{$query = mysqli_query($con, "DELETE * FROM fakultas WHERE id_fakultas='$idFakultas'");

if($query){
	echo json_encode(array('message'=>'fakultas data successfully deleted.'));

}
else{
	echo json_encode (array('message'=>'fakultas data failed to delete.'));
}

}
?>