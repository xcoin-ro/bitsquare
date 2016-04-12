<?php
# Definire functii

gnupg_adddecryptkey
gnupg_addencryptkey
gnupg_addsignkey
gnupg_cleardecryptkeys
gnupg_clearencryptkeys
gnupg_clearsignkeys

#action

gnupg_decrypt
gnupg_encrypt
gnupg_decryptverify
gnupg_enryptverify
gnupg_encryptsign

# when login, fetch username pgp key id from mysql database and encrypt challenge authentication string

$initialization = gnupg_init();
$username_key = mysql_query(SELECT * FROM table users_keys)
gnupg_addencryptkey($initialization, $username_key);
$random_secret = rend(sha256);
$encrypt = gnupg_encrypt($initialization, $random_secret);

echo "proceed to next step of login form";

end();


?>
