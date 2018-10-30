laravel-admin extension
======

本扩展包是基于peinhu的[AetherUpload-Laravel](https://github.com/peinhu/AetherUpload-Laravel)针对[laravel-admin](https://github.com/z-song/laravel-admin)开发的大文件上传工具，
直接用于Form组件。当前版本为Laravel 5.5。

1,安装：
````
composer require dianwoung/large-file-upload
````
2,发布AetherUpload-laravel的静态资源：
````
php artisan aetherupload:publish
````
3,上传文件配置信息在config/aetherupload.php文件中修改(详细信息请参考说明文档)

4,发布本扩展包的静态资源：
````
php artisan vendor:publish --tag=large-file-upload
````
5,注册进laravel-admin,在app/Admin/bootstrap.php中添加以下代码：
````
Encore\Admin\Form::extend('largefile', \Encore\LargeFileUpload\LargeFileField::class);
````
6,在控制器中直接调用就可以了：
````
$form->largefile('ColumnName', 'LabelName');
````
效果如图：

基本样式

![](preview.png)

上传中
![](onload.png)
