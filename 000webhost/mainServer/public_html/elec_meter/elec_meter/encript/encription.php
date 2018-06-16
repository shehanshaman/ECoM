<?php 

	// Must be exact 32 chars (256 bit)
	$password = substr(hash('sha256', 'electricity', true), 0, 32);


function encript($plaintext){

    $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

	// av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
	$encrypted = base64_encode(openssl_encrypt($plaintext, 'aes-256-cbc', 'electricity', OPENSSL_RAW_DATA, $iv));

	return $encrypted;

}

function decript($plaintext){

    $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

	// My secret message 1234
	$decrypted = openssl_decrypt(base64_decode($plaintext),'aes-256-cbc', 'electricity', OPENSSL_RAW_DATA, $iv);

	return $decrypted;

}

?>