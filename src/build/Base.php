<?php
/*--------------------------------------------------------------------------
 | Software: [WillPHP framework]
 | Site: www.113344.com
 |--------------------------------------------------------------------------
 | Author: no-mind <24203741@qq.com>
 | WeChat: www113344
 | Copyright (c) 2020-2022, www.113344.com. All Rights Reserved.
 |-------------------------------------------------------------------------*/
namespace willphp\collection\build;
use willphp\page\Page;
/**
 * 模型多数据集合
 * Class Base
 * @package willphp\collection\build
 */
class Base implements \Iterator, \ArrayAccess {	
	protected $items = [];
	public function current() {
		return current($this->items);
	}
	public function next() {
		next($this->items);
	}
	public function key() {
		return key($this->items);
	}
	public function valid()	{
		return current($this->items);
	}
	public function rewind() {
		reset($this->items);
	}
	public function offsetExists($offset) {
		return isset($this->items[$offset]);
	}
	public function offsetGet($key)	{
		return isset($this->items[$key]) ? $this->items[$key] : null;
	}
	public function offsetSet($offset, $value) {
		$this->items[$offset] = $value;
	}
	public function offsetUnset($key) {
		if (isset($this->items[$key])) {
			unset($this->items[$key]);
		}
	}
	/**
	 * 转换为数组
	 * @return array
	 */
	public function toArray() {
		$res = [];
		foreach ($this->items as $k => $v) {
			if (is_object($v) && method_exists($v, 'toArray')) {
				$res[] = $v->toArray();
			} else {
				$res[] = $v;
			}
		}		
		return $res;
	}	
	/**
	 * 设置items值
	 * @param $data
	 * @return $this
	 */
	public function make($data) {
		$this->items = $data;		
		return $this;
	}	
	/**
	 * 显示分页
	 * @return mixed
	 */
	public function links()	{
		return Page::single();
	}
}