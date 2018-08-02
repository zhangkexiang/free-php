# free-php
php frame work

### 一个码农想追求自由
- 依赖composer进行类加载
- 直白的mvc框架什么都不封装
- 鼓励根据需求 调整框架生命周期
- 遇到问题找php文档 框架没有文档 http://www.php.net/manual/zh/
- 不想开发的可以大量使用熟悉的composer库
### 起步

#### nginx 配置
```
server {
        listen 80;
        server_name www.free-php.cn;

        root /d-code/free-php/v;
        index index.php index.html;

        if (!-e $request_filename) {
                rewrite ^/(.*) /index.php/$1 last;
        }

        location ~* \.php {
                fastcgi_pass  php-fpm.docker:9000;
                fastcgi_index index.php;
                fastcgi_param  SCRIPT_FILENAME  $document_root/$fastcgi_script_name;
                include fastcgi_params;
        }

        location ~ /\.git {
                deny all;
        }
}
```

- www.free-php.cn
- www.free-php.cn/home/index?a=1

#### php自带服务
```
cd free-php
composer update
cd v
php -S localhost:8001
```

- localhost:8001
- localhost:8001/home/index?a=1