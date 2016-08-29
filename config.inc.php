<?php

$config = array();

$config['db_dsnw'] = 'sqlite:////var/www/db/sqlite.db';

$config['imap_conn_options'] =
$config['smtp_conn_options'] =
$config['managesieve_conn_options'] = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
    ],
];

$config['default_port'] = 143;

$config['smtp_port'] = 587;
$config['smtp_user'] = '%u';
$config['smtp_pass'] = '%p';

$config['plugins'] = array('carddav', 'enigma','keyboard_shortcuts', 'archive', 'contextmenu', 'emoticons', 'vcard_attachments', 'maskasjunk', 'help','debug_logger', 'customizr');
  
$config['autoAddSpamFilterRule'] = TRUE;  // if TRUE a spam filter rule is created for all users which automatically move messages into junk folder  
$config['spam_subject'] = '[SPAM]';       // How to mark the spam in the subject? To have effect the previous variable must be TRUE.
$config['caseInsensitiveSearch'] = TRUE;  // if TRUE filters searching in case insensitive mode.
$config['decodeBase64Msg'] = TRUE;        // if TRUE decodes base64 mail messages.

if(getenv('ROUNDCUBE_USER_FILE')) $config['plugins'][] = 'password';
