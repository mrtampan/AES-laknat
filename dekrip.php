<?php 

$encrypted_data = readline('Masukan text yang mau di dekripsi:');

//Define cipher 
$cipher = "aes-256-cbc"; 

// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';
  
// Store the encryption key
$encryption_key = "sanadahyunminanayeon";

//Decrypt data 
$decrypted_data = openssl_decrypt($encrypted_data, $cipher, $encryption_key, 0, $encryption_iv); 

echo "Decrypted Text: " . $decrypted_data; 
?>