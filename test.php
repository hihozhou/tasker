<?php
/**
 * test.php.
 *
 *
 * @author    hihozhou <hihozhou.github.io>
 * @email     hihozhou@gmail.com
 * Time: 16-6-24 下午8:04
 */


require_once "src/AsyncTask.php";

//master task start.

AsyncTask::run(function ()
{
    //asynchronous task
    //do something...
    sleep(10);
});

//master task end.
