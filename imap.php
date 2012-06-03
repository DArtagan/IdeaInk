<?
  
$mbox = imap_open("{imap.gmail.com:993}", "ideaink@weiskopf.me", "9bYQR#gq!ka4");

echo "<h1>Mailboxes</h1>";

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
    echo '<p>' . $header . '</p>;
  }
}

imap_close($mbox);
?>
