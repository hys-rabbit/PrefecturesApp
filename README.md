# PrefecturesApp
下記がインストール済みであることを確認してください。
- apache
- MySQL
- PHP
## apache
httpd.confを修正してください。
```
# アプリルート設定
DocumentRoot <本リポジトリを置いたディレクトリ>
# MySQL設定値
SetEnv DB_HOST <ホスト名（or IP）>
SetEnv DB_PORT <ポート>
SetEnv DB_USER <ユーザ名>
SetEnv DB_PASS <パスワード>
```

## MySQL
都道府県データを登録してください。
```
// リポジトリ直下で実行
$ mysql -h <ホスト名> -u <ユーザ名> -P <ポート> -p <database名> < sql/prefectures.sql
Enter password: // パスワード入力
```