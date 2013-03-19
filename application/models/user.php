<?php
 class User extends Model
 {
 	public function select_all_userroles()
 	{
 		$query = "SELECT DISTINCT `role` FROM `userroles`";
 		return $this->query($query);
 	}

	public function select_all()
	{
		return $this->query("SELECT * FROM `users`");
	}

	public function remove_user($id)
	{
		$this->query("DELETE FROM `users` WHERE `user_id` = '".$id."'");
		$this->query("DELETE FROM `logins` WHERE `login_id` = '".$id."'");
		$this->query("DELETE FROM `userroles` WHERE `userrole_id` = '".$id."'");
	}
	
	public function insert_into_users($post)
	{
		$query = "INSERT INTO `logins`( `login_id`,
										`username`,
										`password`)
				  VALUES 			  ( 'NULL',
				  						'".$post['emailaddress']."',
				  						'".$post['password']."')";
		$this->query($query);
		$id = $this->find_last_inserted_id();
		$query = "INSERT INTO `users` ( `user_id`,
										`firstname`,
										`infix`,
										`surname`)
				  VALUES			  ( '".$id."',
										'".$post['firstname']."',
										'".$post['infix']."',
										'".$post['surname']."')";
		//echo $query;exit();
		$this->query($query);
		$query = "INSERT INTO `userroles` ( `userrole_id`,
											`role`)
				  VALUES 				  ( '".$id."',
				  						    '".$post['userrole']."')";
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