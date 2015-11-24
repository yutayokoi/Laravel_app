<?php

return [

    /*
    |--------------------------------------------------------------------------
    | デフォルト認証ドライバー
    |--------------------------------------------------------------------------
    |
    | このオプションは認証で使用するドライバーを設定します。
    | このドライバーはアプリケーションの保護領域へユーザーがアクセスする時の
    | 認証とユーザーの取得を管理します。
    |
    | Supported: "database", "eloquent"
    |
    */

    'driver' => 'eloquent',

    /*
    |--------------------------------------------------------------------------
    | 認証モデル
    |--------------------------------------------------------------------------
    |
    | "Eloquent"認証ドライバーを使用する場合、ユーザー情報を取得する
    | Eloquentモデルの指定が必要です。もちろん、通常は"User"モデル
    | でしょうが、お好きなものをどうぞ。
    |
    */

    'model' => App\User::class,

    /*
    |--------------------------------------------------------------------------
    | 認証テーブル
    |--------------------------------------------------------------------------
    |
    | "Database"認証ドライバーを使用する場合、ユーザーを取得するための
    | テーブルを指定する必要があります。基本的な値をデフォルトにしていますが、
    | お好きなテーブル名へ簡単に変更できます。
    |
    */

    'table' => 'users',

    /*
    |--------------------------------------------------------------------------
    | パスワードリセット設定
    |--------------------------------------------------------------------------
    |
    | ここではパスワードリマインダーの設定を行います。それにはパスワード
    | メールにリセットメールのビューも含まれます。また、リセット
    | トークンを保存しておくためのテーブル名も指定可能です。
    |
    | 有効時間の"expire"に指定する分数は、良く考えてください。
    | このトークン保存時間はセキュリティー機能で、短い時間ほど
    | 安全になります。ですが、必要に応じ変更可能です。
    |
    */

    'password' => [
        'email'  => 'emails.password',
        'table'  => 'password_resets',
        'expire' => 60,
    ],

];
