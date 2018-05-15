# loop-call
連続架電サンプルコード

## 概要
Twilio APIを使って配列にある電話番号で順番に電話をかけて電話を出るまで連続架電をします。

## 準備
本スクリプトを実行するためには、以下の準備が必要です。
- 複数の電話番号
- Twilioの電話番号
- Twilioで自分が作成したTwiMLとかFunctionsを用意します。

loopCall.php
- このphpファイルを動かすサーバーを用意します。

loopCall.js
(loopCall.jsはnodeではなく、TwilioのFunctionsで実行出来ます。)
- Twilioにloop call Functionsを作ってloopCall.jsのコードを貼り付けます。

## セットアップ

1. ソースコードをCloneします。
```
$ git clone https://github.com/twilioforkwc/loop-call.git
```
2. $phone_numberの配列に電話をかける電話番号を入れます。
3. 自分のTwilioアカウントSID, AUTHTOKENを各変数に入力します。

loopCall.php
- composer installでTwilio SDKを設置します。
- Twilioから購入した電話番号を$client->calls->createの二目のパラメーターに入力します。
- create関数の三つ目のパラメーターであるarrayで'url'のvalueは自分が作ったTwiMLまたはFunctionsのurlを入れます。
- 'statusCallback'のvalueはこのphpが動いているサーバーのアドレスを入力します。

loopCall.js
- Twilioにloop call Functionsを作ってloopCall.jsのコードを貼り付けます
- client.calls.createのパラメーターでurlのvalueは自分が作ったTwiMLまたはFunctionsのurlを入れます。
- fromのvalueはTwilioから購入した電話番号を入力します。
- statusCallbackのvalueは今作ったloop call Functionsのpathを{{Custom function URL}}の代わりに入れます。
