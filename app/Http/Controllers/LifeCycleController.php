<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleController extends Controller
{
    //
    public function showServiceProviderTest()
    {
        $encrypt = app()->make('encrypter');
        $password = $encrypt->encrypt('password');

        $sample = app()->make('serviceProviderTest');

        dd($sample, $encrypt->decrypt($password));
    }

    public function showServiceContainerTest()
    {
        app()->bind('LifeCycleTest', function(){
            return 'ライフサイクルテスト';
        });

        $test = app()->make('LifeCycleTest');

        // サービスコンテナなしのパターン
        // $message = new Message();
        // $sample = new Sample($message);

        // $sample->run();

        // サービスコンテナありのパターン

        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        $sample->run();

        dd($test, app());
    }
}

class Sample
{
    public $message;
    public function __construct(Message $message) {
        $this->message = $message;
    }

    public function run()
    {
        $this->message->send();
    }

}
class Message
{
    public function send() {
        echo('メッセージ表示');
    }
}
