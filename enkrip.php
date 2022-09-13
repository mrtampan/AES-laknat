<?php 

$data = readline('Masukan text yang mau di enkripsi:');

//Define cipher 
$cipher = "aes-256-cbc"; 

// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';
  
// Store the encryption key
$encryption_key = "sanadahyunminanayeon";

//Data to encrypt 
// $data = "Sample Text"; 
$encrypted_data = openssl_encrypt($data, $cipher, $encryption_key, 0, $encryption_iv); 

echo "Encrypted Text: " . $encrypted_data;
?>