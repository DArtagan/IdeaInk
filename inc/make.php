<?
function makeThought($dbh, $title, $alias, $tag, $content) {
  $stmt = $dbh->prepare("INSERT INTO thoughts (Title, Alias, Tag, Content) VALUES (:title, :alias, :tag, :content)");
  $stmt->execute(array(":title" => $title, ":alias" => $alias, ":tag" => $tag, ":content" => $content));
}
?>
