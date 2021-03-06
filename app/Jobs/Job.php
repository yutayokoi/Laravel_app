<?php

namespace app\Jobs;

use Illuminate\Bus\Queueable;

abstract class Job
{
    /*
    |--------------------------------------------------------------------------
    | キューイング可能なジョブ
    |--------------------------------------------------------------------------
    |
    | このジョブ基底クラスは全ジョブから共通に呼び出されるロジックを
    | 設置する場所を提供しています。このクラスに含まれるトレイトは、
    | "onQueue"と"delay"キューヘルパーメソッドへのアクセスを提供します。
    |
    */

    use Queueable;
}
