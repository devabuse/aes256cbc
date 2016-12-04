<?php

require_once __DIR__ . '/src/Aes256Cbc.php';

$key = "2V6aTwNBePubjqCpvDdWp25ncXQbWKRr";
$iv = "5dTRPTS5WmkGefQH";
$name = "Mike Coenen";

$aes256Cbc = new Aes256Cbc($key, $iv);

$encrypted = $aes256Cbc->encrypt($name);

print 'To encrypt: ' . $name . "\n";
print 'Encrypted data as base64:' . base64_encode($encrypted) . "\n";
print 'Decrypted data: ' . $aes256Cbc->decrypt($encrypted) . "\n";
