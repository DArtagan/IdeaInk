<?
  
$mbox = imap_open("{imap.gmail.com:993/imap/ssl}", "ideaink@weiskopf.me", "9bYQR#gq!ka4");
/*
echo "<h1>Mailboxes</h1>";
$folders = imap_listmailbox($mbox, '{imap.gmail.com:993/imap/ssl}', '*');

if($folders == false) {
  echo '<p>Call Failed</p>';
} else {
  foreach($folders as $folder) {
    echo '<p>' . $folder . '</p>';
  }
}

echo '<h1>Headers in INBOX</h1>';
$headers = imap_headers($mbox);

if($headers == false) {
  echo '<p>Call failed</p>';
} else {
  foreach($headers as $header) {
    echo '<p>' . $header . '</p>';
  }
}
*/

$count = imap_num_msg($mbox);

for($i = 1; $i  $count; $i++) {
  $header = imap_headerinfo($mbox, $i);
  $raw_body = imap_body($mbox, $i);

  $
}

imap_mail_copy($mbox, '1:$count', '[Gmail]/All Mail');

imap_expunge($mbox);

imap_close($mbox);
?>
