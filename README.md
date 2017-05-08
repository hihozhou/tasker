Tasker
==========

> Tasker -php 程序异步处理类,实现原理是使用pcntl_fork()创建子进程去实现耗时不需要返回的任务

# Use example

```php
require_once "src/AsyncTask.php";
//master task start.
AsyncTask::run(function ()
{
    //asynchronous task
    //do something...
    sleep(10);
});
//master task end.
```
