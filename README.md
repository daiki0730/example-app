# example-app
## 環境
| System | Version|
| ----   | ----   |
| Laravel| 9.6.0  |
| PHP    | 8.1.2  |
| MySQL  | 8.0.28 |
| Node   | v16.14.2 |
| npm    | 8.6.0 |

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
// Laravel Mixインストール
$ sail npm install
// Tailwind CSS導入
$ sail npm install -D tailwindcss
$ sail npx tailwindcss init
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
// Laravel Mix コンパイル
sail npm run development
// Laravel Mix コンパイルデーモン
sail npm run watch
```
- アプリケーション用のコンテナに入る
```
$ make work
```
- JS、Sass をローカル開発用にビルド・watch
```
$ npm run dev-all
```
