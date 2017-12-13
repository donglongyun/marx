<?php
	

	function unlimitedForLevel($cate,$html='--',$pid=0,$level=0){ 
		$arr = array();
		foreach($cate as $v){ 
			if( $v['pid'] == $pid){ 
				$v['level'] = $level + 1;
				$v['html'] = str_repeat($html, $level);
				$arr[] = $v;
				$arr = array_merge($arr,unlimitedForLevel($cate,$html,$v['id'],$level+1));
			}
		}
		return $arr;
	}

	
  function unlimitedForLayer($cate,$pid=0){ 
    $arr = array();
    $i= 0;
    foreach($cate as $v){ 
      if( $v['pid'] == $pid){ 
        $url = getUrl($v);
        if(preg_match('/^link/', $url)){
          $v['attr'] = 4;
          $v['url'] = substr($url, 4);
        }else{
          $v['url'] = $url;
        }
        $v['child'] = unlimitedForLayer($cate,$v['id']);
        $arr[] = $v;
      }
    }
    return $arr;
  }

  function getUrl($v){

    if($v['attr'] == 4){  //链接
      $url = 'link'.$v['src'];
    }elseif($v['attr'] == 3){ //栏目  //父栏目id:pcid, 栏目id:cid, 子栏目id
      //找到第一个子栏目
      $cate1=M('Cate')->where(array('pid'=>$v['id']))->order('sort')->find(); 
      if(!$cate1){   //栏目下没有添加子内容
        $url = '/list_'.$v['pid'].'_'.$v['id'];
      }else{  //有子栏目
        $url = getUrl($cate1);
      }
    }elseif($v['attr'] == 1){    //列表
      $url = '/list_'.$v['pid'].'_'.$v['id'];
    }elseif($v['attr'] == 2){ //文章
      $atrticleId = getAtricleId($v['id']);
       $url = '/show_'.$v['pid'].'_'.$v['id'].'_'.$atrticleId;
    }
    
    return $url;
  }

  function getAtricleId($cateId){
    $res =  M('Blog')->where(array('cid'=>$cateId))->getField('id');
    return $res?$res:0;
  }

	//传入一个子分类id返回所有父级分类
	function getParents($cate,$id){ 
		$arr = array();
		foreach($cate as $v){ 
			if($v['id'] == $id){ 
				$arr[] = $v;
				$arr = array_merge(getParents($cate,$v['pid']),$arr);
			}
		}
		return $arr;
	}

	//传递一个父级分类id，返回所有子分类id
	function getChildsId($cate,$pid){ 
		$arr = array();
		foreach($cate as $v){ 
			if($v['pid'] == $pid){ 
				$arr[] = $v['id'];
				$arr = array_merge($arr,getChildsId($cate,$v['id']));
			}
		}
		return $arr;
	}

	function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true){
        if(function_exists("mb_substr"))
            return !$suffix?mb_substr($str, $start, $length, $charset):mb_substr($str, $start, $length, $charset);
        elseif(function_exists('iconv_substr')) {
            return !$suffix?iconv_substr($str,$start,$length,$charset):iconv_substr($str,$start,$length,$charset);
        }
        $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
        $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
        $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
        $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
        preg_match_all($re[$charset], $str, $match);
        $slice = join("",array_slice($match[0], $start, $length));
        if($suffix) return $slice;
        return $slice;
	    }