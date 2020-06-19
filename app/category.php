<?php 

class Category extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input()
	{
		$name = $_POST['name'];
		$text_category = $_POST['text_category'];

		$sql = "INSERT INTO category (name, text_category) VALUES
			(:name, :text_category)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindparam(":name", $name);
		$stmt->bindparam(":text_category", $text_category);
		$stmt->execute();

		return false;
	}


	public function tampil ()
	{
		$sql = "SELECT * FROM category";
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
	

		$sql = "SELECT * FROM category WHERE id =:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
}

		public function update()
{
		$name = $_POST['name'];
		$text_category = $_POST['text_category'];
		$id = $_POST['id'];

		$sql = "UPDATE category SET name=:name, text_category=:text_category WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":text_category", $text_category);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;

	}

	
		public function delete ($id)
		{
			$sql = "DELETE FROM category WHERE id=:id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(":id", $id);
			$stmt->execute();

			return false;
		}

}

?>
	