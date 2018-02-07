## 项目概述

* 产品名称：「sample  - PHP & Laravel」
* 项目代码：sample，Laravel
* 官方地址：http://sample.work/

PHPHub 是 PHP 和 Laravel 的中文社区，致力于推动 Laravel, php-fig 等国外 PHP 新技术, 新理念在中国的发展。

项目支持 GitHub 登录，支持桌面浏览器和手机浏览器浏览。允许登录用户查看帖子，评论帖子，管理员管理帖子。

## 运行环境要求

- Apache 2.4.18+
- PHP 7.1+
- Mysql 5.7+

## 开发环境部署/安装

本项目代码使用 PHP 框架 [Laravel 5.5](http://laravel-china.org/docs/5.5/) 开发，本地开发环境使用 [Laravel Homestead](http://laravel-china.org/docs/5.5/homestead)。

下文将在假定读者已经安装好了 Homestead 的情况下进行说明。如果您还未安装 Homestead，可以参照 [Homestead 安装与设置](http://laravel-china.org/docs/5.5/homestead#installation-and-setup) 进行安装配置。

### 基础安装

#### 1. 克隆源代码

克隆 `sample` 源代码到本地：

    > git clone https://github.com/oksvip/sample.git

#### 2. 配置本地的 Apache 环境

1). 运行以下命令编辑 /etc/hosts 文件：

```shell
sudo vim /etc/hosts
```

2). 加入对应修改，如下所示：

```
127.0.0.1   sample.work
```

3). 复制Apache配置文件/etc/apache2/sites-available/000-default.conf

```shell
sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/sample.conf
```

4). 修改Apache配置文件/etc/apache2/sites-available/sample.conf

```
ServerName sample.work
ServerAdmin webmaster@localhost
DocumentRoot /home/sunrise/www/sample/public
```

5). 链接Apache配置文件/etc/apache2/sites-available/sample.conf到/etc/apache2/sites-available/目录

```
sudo ln -s /etc/apache2/sites-available/sample.conf /etc/apache2/sites-enabled/
```

#### 3. 安装扩展包依赖

    > composer install

#### 4. 生成配置文件

```
cp .env.example .env
```

你可以根据情况修改 `.env` 文件里的内容，如数据库连接、缓存设置等：

```
APP_URL=http://sample.work
...
DB_HOST=localhost
DB_DATABASE=iokvip
DB_USERNAME=homestead
DB_PASSWORD=secret

DOMAIN=.sample.work
```

#### 5. 生成秘钥

```shell
php artisan key:generate
```

### 前端框架安装

1). 安装 node.js

    直接去官网 [https://nodejs.org/en/](https://nodejs.org/en/) 下载安装最新版本。

2). 安装 Gulp

```shell
npm install --global gulp
```

3). 安装 Laravel Elixir

```shell
npm install
```

4). 安装 bower

```shell
npm install --global bower
```

5). 运行 bower 下载前端组件包

```shell
bower install
```

6). 直接 Gulp 编译前端内容

```shell
gulp
```

7). 监控修改并自动编译

```shell
gulp watch
```

### 链接入口

* 首页地址：http://iokvip.work/
* 管理后台：http://iokvip.work/admin

管理员账号密码如下:

```
username: admin
password: iokvip
```

至此, 安装完成 ^_^.

## 服务器架构说明

这里可以放一张大大的服务器架构图，下面是个例子：

![file](https://fsdhubcdn.phphub.org/uploads/images/201705/20/1/1G6aQPAZym.png)

> 上图使用工具 [ProcessOn](https://www.processon.com) 绘制。

## 部署须知

我们使用 [Envoy](https://laravel.com/docs/5.0/envoy) 进行代码部署。

### 1. 安装 envoy

```
composer global require "laravel/envoy=~1.0"
```

> 关于 Envoy 的使用，请查阅 [文档](http://laravel-china.org/docs/5.5/envoy)。

### 2. 命令列表

在你获得服务器访问权限后（请资讯项目负责人），即可在 `本地项目根目录` 执行以下命令进行代码部署：

```
// 仅更新代码
envoy run update

// 更新代码, 并执行 migration
envoy run update-with-migrate

// 更新代码, 并执行 gulp build
envoy run update-with-gulp

// 更新代码, 并执行 composer
envoy run update-with-composer-install
```

## 扩展包使用情况

| 扩展包 | 一句话描述 | 本项目应用场景 |
| --- | --- | --- | --- | --- | --- | --- | --- |
| [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) | 页面调试工具栏 | 开发环境中的 DEBUG |
| [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper) | Laravel 5 IDE Helper Generator | 主要用于类方法跟踪查阅 |
| [davejamesmiller/laravel-breadcrumbs](https://github.com/davejamesmiller/laravel-breadcrumbs) | Laravel Breadcrumbs | 主要用于网页端面包屑导航 |
| [anahkiasen/former](https://github.com/formers/former) | 强大的表单构造器 | 主要用于构造表单提交 |
| [venturecraft/revisionable](https://github.com/VentureCraft/revisionable) | 数据模型的操作记录 | 主要用于记录管理员操作日记 |

## 自定义 Artisan 命令

| 命令行名字 | 说明 | Cron | 代码调用 |
| --- | --- | --- | --- |
| `phphub:check_avatar` | 检查并抓取用户头像，防止用户头像抓取失败 | 10 分钟运行一次 | 注册成功后队列里调用 |
| `phphub:send_status_email` | 给管理员发送网站统计邮件 | 每天早上 6 点准时 | 无 |

## 队列清单

| 名称 | 说明 | 调用 |
| --- | --- | --- |
| SendActivateMail.php | 发送激活邮件 | 用户注册成功后、修改邮箱时、申请重发验证邮件时 |
| SendPostStatusMail.php | 通知用户发帖状态 | 管理员审核/拒绝用户的投稿时 |
