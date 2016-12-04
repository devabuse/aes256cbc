# Aes256Cbc

Requires openssl_encrypt and openssl_decrypt libraries to be installed for PHP. This is a very simple script to allow encryption and decryption for AES 256 CBC.

## Usage
```
$key = "2V6aTwNBePubjqCpvDdWp25ncXQbWKRr";
$iv = "5dTRPTS5WmkGefQH";
$name = "Mike Coenen";

$aes256Cbc = new Aes256Cbc($key, $iv);

$encrypted = $aes256Cbc->encrypt($name);

print 'To encrypt: ' . $name . "\n";
print 'Encrypted data as base64:' . base64_encode($encrypted) . "\n";
print 'Decrypted data: ' . $aes256Cbc->decrypt($encrypted) . "\n";
```
