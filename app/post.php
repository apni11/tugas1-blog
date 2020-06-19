<?php 

 
class post extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input()
	{
		$date_post = $_POST['date_post'];
		$slug = $_POST['slug'];
		$title = $_POST['title'];
		$text_post = $_POST['text_post'];
		$cat_id = $_POST['cat_id'];

		$sql = "INSERT INTO post (date_post, slug, title, text_post, cat_id) VALUES
			(:date_post, :slug, :title, :text_post, :cat_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindparam(":date_post", $date_post);
		$stmt->bindparam(":slug", $slug);
		$stmt->bindparam(":title", $title);
		$stmt->bindparam(":text_post", $text_post);
		$stmt->bindparam(":cat_id", $cat_id);
		$stmt->execute();

		return false;
	}


	public function tampil ()
	{
		$sql = "SELECT * FROM post
		JOIN category ON post.cat_id = category.id";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function edit($id)
	{
	

		$sql = "SELECT * FROM post WHERE id =:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
}

		public function update()
{
		$date_post = $_POST['date_post'];
		$slug = $_POST['slug'];
		$title = $_POST['title'];
		$text_post = $_POST['text_post'];
		$cat_id = $_POST['cat_id'];

		$sql = "UPDATE post SET date_post=:date_post, slug=:slug, title=:title, text_post=:text_post, cat_id=:cat_id WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindparam(":date_post", $date_post);
		$stmt->bindparam(":slug", $slug);
		$stmt->bindparam(":title", $title);
		$stmt->bindparam(":text_post", $text_post);
		$stmt->bindparam(":cat_id", $cat_id);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;

	}

		public function delete ($id)
		{
			$sql = "DELETE FROM post WHERE id=:id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(":id", $id);
			$stmt->execute();

			return false;
		}

}

?>
	