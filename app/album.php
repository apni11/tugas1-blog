<?php 



class album extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input()
	{
		$name = $_POST['name'];
		$text_album = $_POST['text_album'];
		$photo_id = $_POST['photo_id'];

		$sql = "INSERT INTO album (name, text_album, photo_id) VALUES
			(:name, :text_album, :photo_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindparam(":name", $name);
		$stmt->bindparam(":text_album", $text_album);
		$stmt->bindparam(":photo_id", $photo_id);
		$stmt->execute();

		return false;
	}


	public function tampil ()
	{
		$sql = "SELECT * FROM album
		JOIN photos ON album.photo_id = photos.id";
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
	

		$sql = "SELECT * FROM album WHERE id =:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
}

		public function update()
{
		$name = $_POST['name'];
		$text_album = $_POST['text_album'];
		$photo_id = $_POST['photo_id'];

		$sql = "UPDATE category SET name=:name, text_album=:text_album, photo_id=:photo_id WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindparam(":name", $name);
		$stmt->bindparam(":text_album", $text_album);
		$stmt->bindparam(":photo_id", $photo_id);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;

	}

	
		public function delete ($id)
		{
			$sql = "DELETE FROM album WHERE id=:id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(":id", $id);
			$stmt->execute();

			return false;
		}

}

?>
	