# postman_docgen

集成postman自动生成接口文档

# 用法

## 1.修改config.php配置文件

    <?php
    $config['title'] = 'xxx接口文档';
    $config['lists'] = [
        '16988'=>'286796-a89c27b8-8a0d-4801-xxx',
        'ERP'=>'286796-56970c1b-5c2d-40b7-xxx',    
    ];
    $config['tk'] = 'PMAK-5d81948c29aa8f00361219e2-xxx';

根据自己项目，把对应的参数填入

其中 $config['lists'] 是postman的collections ID

$config['tk'] 是自己的apikey

## 2.把项目放在php环境

访问对应的地址，例： [http://192.168.1.45/api_m/](http://192.168.1.45/api_m/)


## 3.给docgen文件可执行权限

    chmod 777 docgen

## 4.触发更新hooks


访问网站目录下的update.php，例： [http://192.168.1.45/api_m/](http://192.168.1.45/api_m/)