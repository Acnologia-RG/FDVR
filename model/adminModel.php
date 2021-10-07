<?php
// gets the requested paragraph
function getParagraph($id)
{
	// gets the requested paragraph data from the database
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `paragraphs`
	WHERE `id` = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$paragraph = $query->fetch();
	
	return $paragraph;
	exit();
}
// gets the requested page data from the database
function getPage($id)
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `pages`
	WHERE `ID` = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$page = $query->fetch();
	
	return $page;
	exit();
}

function orderUpdate($page_id, $order_index)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `paragraphs`
	WHERE `page_id` = :page_id AND `order_index` = :order_index";

	$query = $db->prepare($sql);
	$query->execute(array(
		":page_id" => $page_id,
		":order_index" => $order_index
	));

	$paragraph = $query->fetch();
	if (!$paragraph == null) {
		$sql = "SELECT * FROM `paragraphs`
		WHERE `page_id` = :page_id";

		$query = $db->prepare($sql);
		$query->execute(array(":page_id" => $page_id));
		$paragraphs_of_the_page = $query->fetchAll();
		$number = count($paragraphs_of_the_page);
		$increment = 1;
		$new_index_number;
		for ($i = $number; $i >= $order_index; $i--) {
			$new_index_number = $number + $increment;
			$sql = "UPDATE paragraphs
			SET `order_index`= :order_index
			WHERE `page_id` = :page_id AND `order_index` = $i";

			$query = $db->prepare($sql);
			$query->execute(array(
				":page_id" => $page_id,
				":order_index" => $new_index_number
			));
			$increment--;
		}
	}
	$db = null;
}

// creates a new page with the given input
function createNewPage($name, $visible)
{
	// puts the new page data into the database
	$db = openDatabaseConnection();
	$sql = "INSERT INTO `pages`(`name`, `visible`)
	VALUES (:name, :visible)";

	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name,
		":visible" => $visible
	));
	$db = null;

	// gets the new page from the database and returns its ID
	$db = openDatabaseConnection();
	$sql = "SELECT ID FROM `pages`
	WHERE `name` = :name LIMIT 1";

	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name
	));
	$db = null;

	$page = $query->fetch();

	return $page["ID"];
	exit();
}
// creates a new paragraph with the given input
function createNewParagraph($page_id, $title, $content, $order_index, $paragraph_visible)
{
	orderUpdate($page_id, $order_index);

	// puts the new paragraph data into the database
	$db = openDatabaseConnection();
	$sql = "INSERT INTO `paragraphs`(`page_id`, `title`, `content`, `order_index`, `paragraph_visible`)
	VALUES (:page_id, :title, :content, :order_index, :paragraph_visible)";

	$query = $db->prepare($sql);
	$query->execute(array(
		":page_id" => $page_id,
		":title" => $title,
		":content" => $content,
		":order_index" => $order_index,
		":paragraph_visible" => $paragraph_visible
	));
	$db = null;

	return TRUE;
	exit();

}
// updates the page with the matching ID with the new data
function updatePage($id, $name, $visible)
{
	$db = openDatabaseConnection();
	$sql = "UPDATE pages
	SET `name`= :name, `visible`= :visible 
	WHERE `ID` = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id,
		":name" => $name,
		":visible" => $visible
	));
	$db = null;
	return TRUE;
	exit();
}
// updates the paragraph with the matching ID with the new data
function updateParagraph($id, $page_id, $title, $content, $order_index, $paragraph_visible)
{
	orderUpdate($page_id, $order_index);

	$db = openDatabaseConnection();
	$sql = "UPDATE paragraphs
	SET `page_id`= :page_id, `title`= :title, `content`= :content, `order_index`= :order_index, `paragraph_visible`= :paragraph_visible 
	WHERE `id` = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id,
		":page_id" => $page_id,
		":title" => $title,
		":content" => $content,
		":order_index" => $order_index,
		":paragraph_visible" => $paragraph_visible
	));
	$db = null;

	return TRUE;
	exit();
}
// deletes the page with the given ID
function deletePage($id)
{
	$db = openDatabaseConnection();
	$sql = "DELETE FROM `pages` WHERE `ID` = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$db = null;

	return TRUE;
	exit();
}
// deletes the paragraph with the given id
function deleteParagraph($id)
{
	$db = openDatabaseConnection();
	$sql = "DELETE FROM `paragraphs` WHERE `id` = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$db = null;

	return TRUE;
	exit();
}