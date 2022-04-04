# example-app
## 環境
| System | Version|
| ----   | ----   |
| Laravel| 9.6.0  |
| PHP    | 8.1.2  |
| MySQL  | 8.0.28 |
| Node   | 2.18.4 |
| NPM    | 6.14.6 |

## 環境構築手順
- clone
```
$ git clone git@github.com:daiki0730/example-app.git
$ cd example-app
```
- .env.example をコピー
```
$ cp .env.example .env
```
- コマンド省略登録
```
// Mac
$ vim ~/.zshrc
$ alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
$ source ~/.zshrc
```

- コンテナ作成

```
$ sail up -d
```

- install
```
$ docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```
## 各種コマンド

```
// Dockerデーモン起動
$ sail up -d
// Dockerデーモン終了
$ sail down
// Dockerコンテナログイン
$ sail shell
// MySQLログイン
$ sail mysql
// artisanコマンド実行
$ sail artisan {command}
// テスト実行
$ sail test
// Composerコマンド実行
$ sail composer {command}
// Node.jsコマンド実行
$ sail node {command}
// npmコマンド実行
$ sail npm {command}
```
- アプリケーション用のコンテナに入る
```
$ make work
```
- JS、Sass をローカル開発用にビルド・watch
```
$ npm run dev-all
```
