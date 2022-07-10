<?php

class Database extends PDO
{
	function __construct($db_type, $db_host, $db_name, $db_user, $db_pass)
	{
		try {
			parent::__construct($db_type . ':host=' . $db_host . ';dbname=' . $db_name, $db_user, $db_pass);
			parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $exc) {
			@$this->view = new View();
			$this->view->error = $exc;
			$this->view->render('error/index');
			die();
		}
	}
	// array('table' => name, 'data' => ['user' => value, 'password' => value]);
	function insert($data)
	{

		$column_name = "";
		$value_string = "";

		foreach ($data['data'] as $key => $value) {

			$column_name .= $key . ", ";
			$value_string .=  ":" . $key . ", ";
		}

		$column_name = rtrim($column_name, ", ");
		$value_string = rtrim($value_string, ", ");

		$query = "INSERT INTO " . $data['table'] . "(" . $column_name . ") VALUES (" . $value_string . ");";

		$stmt = $this->prepare($query);
		try {
			$stmt->execute($data['data']);
		} catch (Exception $th) {
			return false;
		}


		if ($this->lastInsertId()) {

			$result = $this->select(array('table' => $data['table'], 'column' => '*', 'where' => 'id like :id', 'data' => array('id' => $this->lastInsertId())));
		} else {

			$result = $this->select(array('table' => $data['table'], 'column' => '*', 'where' => 'id = :id', 'data' => array('id' => $data['data']['id'])));
		}


		if (!empty($result)) {
			return true;
		} else {
			return false;
		}
	}

	//
	function insert_and_return_last_id($data)
	{

		$column_name = "";
		$value_string = "";

		foreach ($data['data'] as $key => $value) {

			$column_name .= $key . ", ";
			$value_string .=  ":" . $key . ", ";
		}

		$column_name = rtrim($column_name, ", ");
		$value_string = rtrim($value_string, ", ");

		$query = "INSERT INTO " . $data['table'] . "(" . $column_name . ") VALUES (" . $value_string . ");";

		$stmt = $this->prepare($query);
		try {
			$stmt->execute($data['data']);
		} catch (Exception $th) {
			return false;
		}
		$last_insert_id = $this->lastInsertId();

		$result = $this->select(array('table' => $data['table'], 'column' => '*', 'where' => 'id = :id;', 'data' => array('id' => $last_insert_id)));

		if (!empty($result)) {
			return $last_insert_id;
		} else {
			return false;
		}
	}

	// array('table' => name, 'data' => ['user' => value, 'password' => value]);
	function insert_non_id_primary($data, $primary)
	{

		$column_name = "";
		$value_string = "";

		foreach ($data['data'] as $key => $value) {

			$column_name .= $key . ", ";
			$value_string .=  ":" . $key . ", ";
		}

		$column_name = rtrim($column_name, ", ");
		$value_string = rtrim($value_string, ", ");

		$query = "INSERT INTO " . $data['table'] . "(" . $column_name . ") VALUES (" . $value_string . ");";

		$stmt = $this->prepare($query);
		try {
			$stmt->execute($data['data']);
		} catch (Exception $th) {
			return false;
		}


		$result = $this->select(array('table' => $data['table'], 'column' => '*', 'where' => $primary . ' = :id', 'data' => array('id' => $data['data'][$primary])));



		if (!empty($result)) {
			return true;
		} else {
			return false;
		}
	}






	// array('table' => name, 'column' => col , 'where' => where, 'data' => ['key'=>'value'])
	function select($data)
	{

		$where = "";

		if (isset($data['where'])) {
			$where = " WHERE " . $data['where'];
		}
		//new grouping function
		if (isset($data['group by'])) {
			$where = " GROUP BY " . $data['group by'];
		}

		if (isset($data['order'])) {
			$where = " ORDER BY " . $data['order'];
		}

		if (isset($data['limit'])) {
			$where = " LIMIT " . $data['limit'];
		}

		if (isset($data['join'])) {
			if(isset($data['on'])){
				$where = " INNER JOIN " . $data['join'] ." ON ".$data['on'];
			}
			
		}

		$query = "SELECT " . $data['column'] . " FROM " . $data['table'] . $where . ";";
		// var_dump($query);


		$stmt = $this->prepare($query);

		if (isset($data['data'])) {
			$stmt->execute($data['data']);
		} else {
			$stmt->execute();
		}
		// var_dump($stmt);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	//
	function query_prepare($data)
	{
		$stmt = $this->prepare($data['query']);
		if (isset($data['data'])) {
			$stmt->execute($data['data']);
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		} else {
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}


	// array('table' => name, 'data' => ['column_name' => value], 'where' => 'where', 'values' => ['id' => id])
	// function update($data)
	// {

	// 	$where = "";
	// 	foreach ($data['data'] as $key => $value) {
	// 		$where .= $key . " = :" . $key . ", ";
	// 	}
	// 	$where = rtrim($where, ', ');

	// 	$array = [];

	// 	foreach ($data['data'] as $key => $value) {
	// 		$array[$key] = $value;
	// 	}

	// 	foreach ($data['values'] as $key => $value) {
	// 		$array[$key] = $value;
	// 	}

	// 	$query = "UPDATE " . $data['table'] . " SET " . $where . " WHERE " . $data['where'] . ';';

	// 	$stmt = $this->prepare($query);
	// 	$stmt->execute($array);

	// 	$result = $this->select(array('table' => $data['table'], 'column' => '*', 'where' => 'id = :id', 'data' => array('id' => $data['values']['id'])));
	// 	if (!empty($result)) {
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }



	// array('table' => name, 'set' => ['column_name' => value], 'where' => 'where', 'data' => ['id' => id])
	function update($data) // 2021-3-6 edited
	{

		$set = "";
		foreach ($data['set'] as $key => $value) {
			$set .= $key . " = :" . $key . ", ";
		}
		$set = rtrim($set, ', ');

		// Helper::dd($set);
		// $set = 

		// 	$array = [];

		// foreach ($data['set'] as $key => $value) {
		// 	$array[$key] = $value;
		// }

		// foreach ($data['data'] as $key => $value) {
		// 	$array[$key] = $value;
		// }

		$query = "UPDATE " . $data['table'] . " SET " . $set . " WHERE " . $data['where'] . ';';

		$stmt = $this->prepare($query);
		$data['set']['id'] = $data['data']['id'];
		$stmt->execute($data['set']);

		$result = $this->select(array('table' => $data['table'], 'column' => '*', 'where' => 'id = :id', 'data' => array('id' => $data['data']['id'])));
		if (!empty($result)) {
			return true;
		} else {
			return false;
		}
	}
	// array('table' => name, 'set' => ['column_name' => value], 'where' => 'where', 'data' => ['id' => id])
	function update_non_id_primary($data, $primary) // 2021-3-6 edited
	{
		//2021-8-28
		$set = "";
		foreach ($data['set'] as $key => $value) {
			$set .= $key . " = :" . $key . ", ";
		}
		$set = rtrim($set, ', ');
		//2021-3-8
		$query = "UPDATE " . $data['table'] . " SET " . $set . " WHERE " . $data['where'] . ';';

		$stmt = $this->prepare($query);
		$data['set']['id'] = $data['data']['id'];
		$stmt->execute($data['set']);

		$result = $this->select(array('table' => $data['table'], 'column' => '*', 'where' => $primary . ' = :id', 'data' => array('id' => $data['data'][$primary])));
		if (!empty($result)) {
			return true;
		} else {
			return false;
		}
	}

	// array('table'=> name, 'where' => where, 'data' => [] )
	function delete($data)
	{
		$query = "DELETE FROM " . $data['table'] . " WHERE " . $data['where'] . ";";
		$stmt = $this->prepare($query);
		$stmt->execute($data['data']);

		//$result = $this->select(array('table' => $data['table'], 'column' => '*', 'where' => 'id = :id', 'data' => array('id' => $data['data']['id'])));

		if ($stmt->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
