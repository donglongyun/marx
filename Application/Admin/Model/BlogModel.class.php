<?php
namespace Admin\Model;
use Think\Model\RelationModel;
	class BlogModel extends RelationModel{ 
		protected $_link = array(
			'cate' => array(
				'mapping_type' => self::BELONGS_TO,
				'foreign_key' => 'cid',
				'mapping_fields' => 'name',
				'as_fields' => 'name:cate',
				),

			);

		public function getBlogs($type=0,$page){ 
			$field = array('del','content');
			$where = array('del' => $type);
			return $this->field($field,true)->where($where)->order('time DESC')->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
		}

	}