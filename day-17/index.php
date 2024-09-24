<?php

/**
 * PDO - PHP Data Object
 * 
 * - It's a database access layer providing a uniform method of access to multiple databases.
 * With PDO, we can connect to multiple databases like MySQL, PostgreSQL, SQLite, etc.
 * We have these classes:
 * PDO - The PDO class is the core class in PDO. It provides a data-access abstraction layer, which means that, regardless of which database you're using, you use the same functions to issue queries and fetch data.
 * PDOStatement - The PDOStatement class represents a prepared statement and after the statement is executed an instance of the PDOStatement is returned.
 * PDOException - The PDOException class represents an error raised by PDO.
 */
$host = 'localhost';
$dbname = 'phpblog';
$user = 'root';
$password = 'password';

// DSN - Data Source Name
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// Create a pdo object
$pdo = new PDO($dsn, $user, $password);
// https://www.php.net/manual/en/pdo.constants.php#pdo.constants.fetch-assoc
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
// https://www.php.net/manual/en/pdo.setattribute.php
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// Query
/*
$sql = 'SELECT * FROM posts';
$stmt = $pdo->query($sql);

// Fetching data
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//   echo $row['title'] . '<br>';
// }
// while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
//   echo $row->title . '<br>';
// }
while ($row = $stmt->fetch()) {
  echo $row->title . '<br>';
}
  */

$id = 2;

// Fetch single post
/*
// Positional paramters
$sql = 'SELECT * FROM posts WHERE id = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

$post = $stmt->fetch();
echo $post->title . '<br>';
*/

// Named paramters
/*
$sql = 'SELECT * FROM posts WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

$post = $stmt->fetch();
echo $post->title . '<br>';
*/

// Fetch multiple posts
$limit = 3;
$sql = 'SELECT * FROM posts LIMIT ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$limit]);
$posts = $stmt->fetchAll();
// OR
// $stmt = $pdo->query($sql);
// $posts = $stmt->fetchAll();

echo '<pre>';
print_r($posts);
echo '</pre>';


// Insert data
/*
$title = 'Post Space4';
$body = 'Lorem ipsum workspace4';
$author = 'Jim Beglin';

$query = 'INSERT INTO posts (title, body, author) VALUES (:title, :body, :author)';
$stmt = $pdo->prepare($query);
$values = [
  'title' => $title,
  'body' => $body,
  'author' => $author,
];
$stmt->execute($values); // returns true or false
echo $pdo->lastInsertId();
echo "Post created";
*/

// Update data
/*
$newTitle = 'Post Space4 New';
$id = 13;
$query = 'UPDATE posts SET title = :title WHERE id = :id';
$stmt = $pdo->prepare($query);
$stmt->execute([
  'title' => $newTitle,
  'id' => $id,
]);
echo 'Post updated';
*/

// Delete
/*
$id = 13;
$sql = 'DELETE from posts WHERE id = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
echo "Post deleted";
*/

// Search
/*
$search = 'doe';
$sqlCompatibleSearchQuery = '%' . $search . '%';
$sql = 'SELECT * FROM posts WHERE author LIKE ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$sqlCompatibleSearchQuery]);
$posts = $stmt->fetchAll();

echo "<pre>";
print_r($posts);
echo "</pre>";
*/
