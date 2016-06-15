<?php
class Pasien{
public function __construct(){
$this->db = new PDO('mysql:host=localhost;dbname=sistem_rekam_medis','root','mysql');
}
public function addPasien($nm_pasien, $j_kel, $agama, $alamat, $tgl_lhr, $usia, $no_tlp, $nm_kk, $foto){
$sql = "INSERT INTO pasien (nm_pasien, j_kel, agama, alamat, tgl_lhr, useia, no_tlp, nm_kk, foto) VALUES('$nm_pasien', '$j_kel', '$agama', '$alamat', '$tgl_lhr', '$usia', '$no_tlp', '$nm_kk', '$foto')";
$query = $this->db->query($sql);
if(!$query){
return "Failed";
}
else{
return "Success";
}
}
public function editPasien($kode){
$sql = "SELECT * FROM pasien WHERE kodeBuku='$nm_pasien'";
$query = $this->db->query($sql);
return $query;
}
 
public function showPasien(){
$sql = "SELECT * FROM pasien";
$query = $this->db->query($sql);
return $query;
}
public function deletePasien($no_pasien){
$sql = "DELETE FROM pasien WHERE kodeBuku='$no_pasien'";
$query = $this->db->query($sql);
}
}
?>