<?php 


/**
 */
class UserRepository extends DbRepository
{
	
	public function insert($user_name,  $password)
	{
		$password = $this->hashpassword($password);
		$now = new DateTime();

		$sql = "INSERT INTO user(user_name, password, created_at) VALUES(:user_name, :password, :created_at)";

		$stmt=$this->execute($sql,array(
			':user_name'=>$user_name,
			':password'=>$password,
			':created_at'=>$now->format('Y-m-d H:i:s'),
		));
	}

	public function hashPassword($password)
	{
		return sha1($password . 'sfagadh');
	}



// get DB record from user id

	public function fetchByUserName($user_name)
	{
		$sql = "SELECT * FROM user WHERE user_name = :user_name";

// bind user_name value and fetch(get single record) user name from DB 
		return $this->fetch($sql,array(':user_name'=>$user_name));

	}


// judge if ID double count
	public function isUniqueUserName($user_name)
	{
		$sql = "SELECT COUNT(id) as count FROM user WHERE user_name = :user_name";

		$row = $this->fetch($sql, array(':user_name'=>$user_name));
		if($row['count']==='0'){
			return true;
		}

		return false;

	}


}




