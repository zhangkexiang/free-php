<?php

namespace m\sys;

/**
 * header的一些示例
 * Class Header
 * @package m\sys
 */
class Header
{
    /**
     * header 返回 500 （内部服务器错误，可能是代码语法错误，或服务器配置问题）
     */
    public function error()
    {
        header('HTTP/1.1 500 Internal Server Error');
    }

    /**
     * header 返回 401 （显示登陆框，进行http认证）
     */
    public function auth()
    {
        header('HTTP/1.1 401 Unauthorized');
        header('WWW-Authenticate: Basic realm="hello world"');
    }

    /**
     * header 返回 404 （文件未找到）
     */
    public function err404()
    {
        // 方式一
        header('HTTP/1.1 404 Not Found');
        // 方式二
        // header("status: 404 Not Found");
    }

    /**
     * header 返回 200
     */
    public function success()
    {
        header('HTTP/1.1 200 OK');
    }

    /**
     * header 返回 403
     */
    public function accessDenied()
    {
        header('HTTP/1.1 403 Forbidden');
    }

    /**
     * header 返回 301 （永久重定向，告诉用户或搜索引擎向网站服务器发出浏览请求地址，永久性转移到另一个地址）
     */
    public function redirect()
    {
        header('HTTP/1.1 301 Moved Permanently');
    }

    /**
     * header 返回 302 （暂时重定向，临时跳转地址，后期会恢复到原来的地址）
     */
    public function tempRedirect()
    {
        header('HTTP/1.1 302 Found');
        //跳转地址
        header("Location:www.google.com");
    }

    /**
     * header 返回 304 （页面没发生变化）
     */
    public function err304()
    {
        header('HTTP/1.1 304 Not Modified');
    }

    /**
     *header延迟一段时间后重定向：
     */
    public function delayRedirect()
    {
        header('Refresh:10; url=google.com');
    }

    /**
     *  header禁止缓存：
     */
    public function noCache()
    {
        header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
        header('Expires: Mon, 26 Jul 2017 12:00:00 GMT'); //设置过期时间
        header('Pragma: no-cache');
    }

    /**
     * header内容编码：
     */
    public function contentCode()
    {
        header('Content-Type: text/html; charset=utf-8');
    }

    /**
     * header内容类型：
     */
    public function contentType()
    {
        header('Content-Type: application/json'); //json
        header('Content-Type: text/plain'); // 文本
        header('Content-Type: image/jpeg'); // 图片
        header('Content-Type: application/zip'); //压缩包
        header('Content-Type: application/pdf'); //pdf
        header('Content-Type: audio/mpeg'); // 音频媒体
        header('Content-Type: application/x-shockwave-flash'); //flash
    }

    /**
     * header文件下载：
     */
    public function download()
    {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="example.zip"');
        header('Content-Transfer-Encoding: binary');
        readfile('example.zip');//读取文件到客户端
    }
}