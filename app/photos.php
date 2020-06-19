<?php 

class photos extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input()
	{
		$date_photos = $_POST['date_photos'];
		$title = $_POST['title'];
		$text_photos = $_POST['text_photos'];
		$post_id = $_POST['post_id'];

		$sql = "INSERT INTO photos (date_photos, title, text_photos, post_id) VALUES
			(:date_photos, :title, :text_photos, :post_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindparam(":date_photos", $date_photos);
		$stmt->bindparam(":title", $title);
		$stmt->bindparam(":text_photos", $text_photos);
		$stmt->bindparam(":post_id", $post_id);
		$stmt->execute();

		return false;
	}


	public function tampil ()
	{
		$sql = "SELECT * FROM photos";
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
		$sql = "SELECT * FROM photos WHERE id =:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
}

		public function update()
{
		$date_photos = $_POST['date_photos'];
		$title = $_POST['title'];
		$text_ = $_POST['text_photos'];
		$post_id = $_POST['post_id'];

		$sql = "UPDATE photos SET date_photos=:date_photos, title=:title, text_photos=:text_photos, post_id=:post_id WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindparam(":date_photos", $date_photos);
		$stmt->bindparam(":title", $title);
		$stmt->bindparam(":text_photos", $text_photos);
		$stmt->bindparam(":post_id", $post_id);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;

	}

		public function delete ($id)
		{
			$sql = "DELETE FROM photos WHERE id=:id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(":id", $id);
			$stmt->execute();

			return false;
		}

}

?>
	