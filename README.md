# loop-call
連続架電サンプルコード

## 概要
Twilio APIを使ってphone配列にある電話番号で順番に
電話をかけて電話を出るまで連続架電をします。

## 準備
本スクリプトを実行するためには、以下の準備が必要です。
- 複数の電話番号
- Twilioの電話番号
- Twilioで自分が作成したTwiMLとかFunctionsを用意します。

loopCall.php
- このphpファイルを動かすサーバーを用意します。

loopCall.js
(loopCall.jsはnodeではなく、twilioの環境でだけテストが出来ます。)
- Twilioにloop call Functionsを作ってloopCall.jsのコードを貼り付けます。

## セットアップ

1. ソースコードをCloneします。
```
$ git clone https://github.com/twilioforkwc/loop-call.git
```
