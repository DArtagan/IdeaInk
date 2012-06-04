<?
function makeThought($dbh, $title, $tag, $content) {
  $stmt = $dbh->prepare("INSERT INTO thoughts (Title, Tag, Content) VALUES (:title, :tag, :content)");
  $stmt->execute(array(":title" => $title, ":tag" => $tag, ":content" => $content));
}
?>
