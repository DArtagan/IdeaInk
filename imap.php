<?
$mbox = imap_open("{imap.gmail.com:993/imap/ssl}", "ideaink@weiskopf.me", "9bYQR#gq!ka4");

$count = imap_num_msg($mbox);

require_once "inc/make.php";
require_once "inc/database.php";

if($dbh = open_db()) {
  try {
    for($i = 1; $i <= $count; $i++) {
      $header = imap_headerinfo($mbox, $i);

      $structure = imap_fetchstructure($mbox, $i);
      if($structure->type == 1) {
        $body = imap_fetchbody($mbox, $i, "1");
      } else {
        $body = imap_body($mbox, $i);
      }
      if($body) {
        preg_match('/^::.*?$/mi', $body, $matches);
	$tags = $matches[0];
      	$alias = preg_match('/^@@.*?$/mi', $body, $matches);
        $alias = $matches[0];

      	$body = str_replace($tags, "", $body);
      	$body = str_replace($alias, "", $body);

      	$tags = str_replace("::", "", $tags);
      	$alias = str_replace('@@', "", $alias);
      }

      makeThought($dbh, $header->subject, $alias, $tags, $body);

      imap_delete($mbox, $i);
    }
  } catch (PDOException $e) {
    $error = "Idea was not added: " . $e->getMessage();
  } 
}

imap_expunge($mbox);
imap_close($mbox);
?>
