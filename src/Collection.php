<?php
/*--------------------------------------------------------------------------
 | Software: [WillPHP framework]
 | Site: www.113344.com
 |--------------------------------------------------------------------------
 | Author: no-mind <24203741@qq.com>
 | WeChat: www113344
 | Copyright (c) 2020-2022, www.113344.com. All Rights Reserved.
 |-------------------------------------------------------------------------*/
namespace willphp\collection;
use willphp\collection\build\Base;
/**
 * 模型多数据集合
 * Class Collection
 * @package willphp\collection
 */
class Collection {
	protected $link;
	public function __call( $method, $params ) {
		if (is_null($this->link ) ) {
			$this->link = new Base();	
		}		
		return call_user_func_array([$this->link, $method], $params);
	}
	public static function __callStatic($name, $arguments) {
		return call_user_func_array([new static(), $name], $arguments);
	}
}