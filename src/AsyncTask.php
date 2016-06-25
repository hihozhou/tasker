<?php

/**
 * AsynchronousTask.php.
 *
 *
 * @author    hihozhou <hihozhou.github.io>
 * @email     hihozhou@gmail.com
 * Time: 16-6-24 下午7:58
 */
class AsyncTask
{
    public function __construct()
    {

    }


    public static function run($call)
    {
        $pid = pcntl_fork();//创建子进程
        if ($pid == -1)
        {
            die("fork(1) failed!\n");//创建子进程失败
        } elseif ($pid > 0)
        {

        } else
        {
            //子进程创建会话,并且成为进程组组长
            //posix_setsid();
            if (is_callable($call)) $call();
            exit;
        }

    }
}