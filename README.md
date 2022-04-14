# 数据集合

collection组件提供方便的封装来进行数据操作

#开始使用

####安装组件

使用 composer 命令进行安装或下载源代码使用(依赖willphp/page组件)。

    composer require willphp/collection

> WillPHP 框架已经内置此组件，无需再安装。

####建立集合

    \willphp\collection\Collection::make([1, 2, 3]);

####转换数组
	
    Collection::make([1, 2, 3])->toArray();
	

####读取数据

    $obj = Collection::make(['id'=>1, 'name'=>'willphp']);
    echo $obj['name'];

####遍历数据

    $obj = Collection::make(['id'=>1, 'name'=>'willphp']);
    foreach ($obj as $k=>$v) {
	 	echo $v;
    }	

####助手函数

    $obj = collect([1, 2, 3]);
  