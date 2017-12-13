<?php
namespace Admin\Model;
use Think\Model\RelationModel;
	class UserRelationModel extends RelationModel{ 
		//定义表名称
		protected $tableName = 'user';

		//定义关联关系
		protected $_link = array(
			'role' => array(
					'mapping_type' => self::MANY_TO_MANY,
					'class_name' => 'role',
					'mapping_name' => 'role',
					'foreign_key' => 'user_id',
					'relation_foreign_key' => 'role_id',
					'relation_table' => 'tp_role_user',//指定中间表名称
				),
			);

		public function getBlogs($type=0,$page){ 
			$field = array('del');
			$where = array('del' => $type);
			return $this->field($field,true)->where($where)->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
		}

	}