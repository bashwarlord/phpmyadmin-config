<?php

require('/etc/phpmyadmin/config.secret.inc.php');

require('/etc/phpmyadmin/config.servers.php');

/* Uploads setup */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

/* Include User Defined Settings Hook */
if (file_exists('/etc/phpmyadmin/config.user.inc.php')) {
    include('/etc/phpmyadmin/config.user.inc.php');
}

