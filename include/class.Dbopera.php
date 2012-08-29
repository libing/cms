<?php
class Dbopera {
	
	private $prefix;
	
	function __construct($config) {
		$conn = mysql_connect($config['HOST'],$config['DBUSER'],$config['DBPASSWD']) or die("Database link error!");
		mysql_select_db($config['DBNAME'],$conn);
		mysql_query("set names 'utf8'");
		
		//表明前缀
		$this->prefix = 'lb_';
	}
	
	// 添加单列数据函数
//	function data_join($table, $array) {
//		if (is_array ( $array )) {
//			$field = '';
//			$str = '';
//			$wherestr = '';
//			foreach ( $array as $key => $value ) {
//				$field .= "`{$key}`,";
//				$str .= "'{$value}',";
//			}
//			$field = substr ( $field, 0, - 1 );
//			$str = substr ( $str, 0, - 1 );
//			
//			$sql = "INSERT INTO lb_{$table} ({$field}) values ({$str})";
//			mysql_query ( $sql );
//			if (mysql_affected_rows () >= 1) {
//				return mysql_insert_id ();
//			} else {
//				die ( 'Add Failure' );
//			}
//		} else {
//			die ( 'Insert must be array' );
//		}
//	}

	/************************
	 *
	 *  添加数据函数
	 *
	 *	$table 表名，有的表名需要有前缀，需要改一下$prefix
	 *	$field_array,字段名称，以数组的形式添加
	 *	$value_array,需要添加的数据，如果是一维数组，则添加一行数据，如果为两维数组，曾添加多行数据
	 *		注意：数组内数据的顺序需和$field_array里面字段的顺序一致，且个数相同
	 *		例如：插入一行：$DBopera->data_join('data',array('daImg','daUrl','daName'),array('dafadf','dafadfa','afafadf',));
	 *			插入多行：	$DBopera->data_join('data',array('daImg','daUrl','daName'),array(array('ddd','ddd,'ddd'),array('ccc','ccc,'ccc')));
	 *				
	 **********************/
	function data_join($table, $field_array, $value_array) {
		if (is_array($field_array) && is_array ( $value_array )) {
			$field = '';
			$str_value = '';
			$str_simple_value = '';
			$str_much_value = '';

			//拼接字段
			foreach($field_array as $field_value){
					$field .="`{$field_value}`,";
			}
			//拼接插入值字符串
			foreach ( $value_array as $value ) {
				if(is_array($value)){
					$str = '';
					foreach($value as $value2){
						$str .= "'{$value2}',";
					}
					$str_much_value .= '(' . substr ( $str, 0, - 1 ) . '),';		
				}else{
					$str_simple_value .= "'{$value}',";	
				}
			}

			$field = '(' . substr ( $field, 0, - 1 ) . ')';
			if(empty($str_much_value)){
				$str_value = '('.substr($str_simple_value,0,-1).')';
			}else{
				$str_value = substr($str_much_value,0,-1);
			}
			//$str = implode(',',$str_array);
			
			$sql = "INSERT INTO {$this->prefix}{$table} {$field} values {$str_value}";
			mysql_query ( $sql );
			if (mysql_affected_rows () >= 1) {
				return mysql_affected_rows ();
			} else {
				return 'Add Failure';
			}
		} else {
			return 'Insert must be array';
		}
	}

	// 删除数据函数
	function data_del($table, $where) {
		if (is_array ( $where ) && count ( $where ) == 1) {
			foreach ( $where as $key => $value ) {
				$sql = "DELETE FROM `{$this->prefix}{$table}` WHERE (`{$key}`='{$value}')";
				mysql_query ( $sql );
				if (mysql_affected_rows () >= 1) {
					return true;
				} else {
					die ( 'Delete Failure' );
				}
			}
		} else {
			die ( 'Delete must be array' );
		}
	}
	
	// 更新数据函数
	function data_update($table, $data, $where='') {
		if (is_array ( $data ) && is_array ( $where )) {
			$str = '';
			$wherestr = '';
			foreach ( $data as $key => $value ) {
				$str .= "`{$key}`='{$value}',";
			}
			$str = substr ( $str, 0, - 1 );
			
			foreach ( $where as $whkey => $whvalue ) {
				$wherestr .= "`{$whkey}`='{$whvalue}' AND ";
			}
			$wherestr = "WHERE " . $wherestr;
			$wherestr = substr ( $wherestr, 0, - 4 );
			$sql = "UPDATE `{$this->prefix}`{$table} SET {$str} {$wherestr}";
			mysql_query ( $sql );
			return true;
		} else {
			die ( 'Update must be array' );
		}
	}
	
	// 查询数据函数
	function data_query($select = array('*'),$table, $where = '',$order = '',$limit='',$group='') {
		$prefix = $this->prefix;
		$data = array ();
		$whereStr = '';
		$selectStr = '';
		$tableStr = '';

		if(is_array($select)){
			foreach( $select as $sevalue ){
				$selectStr .= "{$sevalue},";
			}
			$selectStr = substr($selectStr,0,-1);
		}

		if(is_array($table)){
			foreach( $table as $tavalue ){
				$tableStr .= "`{$prefix}{$tavalue}`,";
			}
			$tableStr = substr($tableStr,0,-1);
		}	
		
		if (is_array ( $where )) {
			foreach ( $where as $whkey => $whvalue ) {
				if(strpos($whkey,'`') === 0){
					$whereStr .= "{$whkey}='{$whvalue}' AND ";
				}else{
					$whereStr .= "{$whkey}={$whvalue} AND ";
				}
			}
			$whereStr = "WHERE " . $whereStr;
			$whereStr = substr ( $whereStr, 0, - 4 );
		}
		

		if(is_array($order)){
			foreach($order as $orkey=>$orvalue){
				$order = " ORDER BY `{$orkey}` {$orvalue} ";
			}
		}

		if(is_array($limit)){
			foreach($limit as $likey=>$livalue){
				$limit = " limit {$likey},{$livalue} ";
			}
		}

		if(is_array($group)){
			foreach($group as $grvalue){
				$group = " GROUP BY {$grvalue} ";
			}
		}

		$sql = "SELECT {$selectStr} FROM {$tableStr} {$whereStr} {$order} {$limit} {$group}";
		$query = mysql_query ( $sql );
		while ( @$array = mysql_fetch_array ( $query ) ) {
			$data [] = $array;
		}
		return $data;
	}
	
	// 多表查询数据函数
	/*
	function data_tables_query($table, $where) {
		$data = array ();
		$tablestr = '';
		$wherestr = '';
		if (is_array ( $where ) && is_array ( $table )) {
			foreach ( $table as $value ) {
				$tablestr .= "`hi_{$value}`,";
			}
			$tablestr = substr ( $tablestr, 0, - 1 );
			foreach ( $where as $whkey => $whvalue ) {
				$wherestr .= "`{$whkey}`='{$whvalue}' AND ";
			}
			$wherestr = "WHERE " . $wherestr;
			$wherestr = substr ( $wherestr, 0, - 4 );
			$sql = "SELECT * FROM `{$tablestr}` {$wherestr}";
			$query = mysql_query ( $sql );
			while ( @$array = mysql_fetch_array ( $query ) ) {
				$data [] = $array;
			}
			return $data;
		} else {
			die ( 'Query must be array' );
		}
	}
	*/	

}
