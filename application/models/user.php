<?php
 class User extends Model
 {
	public function select_all()
	{
		return $this->query("SELECT * FROM `users`");
	}

	public function remove_user($id)
	{
		$this->query("DELETE FROM `users` WHERE `user_id` = '".$id."'");
	}
	
	public function insert_into_users($post)
	{
		$query = "INSERT INTO `users` ( `user_id`,
										`firstname`,
										`infix`,
										`surname`)
				  VALUES			  ( 'NULL',
										'".$post['firstname']."',
										'".$post['infix']."',
										'".$post['surname']."')";
		//echo $query;exit();
		$this->query($query);
	}
	
	public function update_user($id, $post)
	{
		$query = "UPDATE `users` SET `firstname` = '".$post['firstname']."',
									 `infix`	 = '".$post['infix']."',
									 `surname`	 = '".$post['surname']."'
				  WHERE				 `user_id`	 = '".$id."'";
		$this->query($query);
	}
	
	public function find_user_by_id($id)
	{
		return $this->query("SELECT * FROM `users` WHERE `user_id` = '".$id."'", 1);
	}
 }
?>