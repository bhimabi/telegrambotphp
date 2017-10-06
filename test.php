<?php

$botToken	= "417022396:AAHrz71cxktPj44xf-t6ioTaNok6m_Os1CQ";
$website		="https://api.telegram.org/bot".$botToken;

$update 		=file_get_contents($website."/getupdates");


?>