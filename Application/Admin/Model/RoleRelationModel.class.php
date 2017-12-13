<?php
namespace Admin\Model;
use Think\Model\RelationModel;
	class RoleRelationModel extends RelationModel{ 
		//定义表名称
		protected $tableName = 'role';

		//定义关联关系
		protected $_link = array(
			'user' => array(
					'mapping_type' => self::MANY_TO_MANY,
					'mapping_name' => 'user',
					'foreign_key' => 'role_id',
					'relation_foreign_key' => 'user_id',
					'relation_table' => 'tp_role_user',//指定中间表名称,前缀不能省略
				),
			

			'node' => array(
						'mapping_type' => self::MANY_TO_MANY,
						'mapping_name' => 'node',
						'foreign_key' => 'role_id',
						'relation_foreign_key' => 'node_id',
						'relation_table' => 'tp_access',//指定中间表名称,前缀不能省略
					),
			);
		
	}