## What is it?
Nuxt3で作製された管理画面です。
管理画面としての機能は一通り完成しております。

## Use Technology
1. Nuxt3(Nuxt Composition Api) 
2. TypeScript

## Initial Setting
### 1. docker-compose.ymlの修正
下記をコメントアウト
変更前
```yaml
command: yarn dev
```
変更後
```yaml
# command: yarn dev
```
### 2. dockerコンテナの起動
```shell
$ docker compose up -d
```

### 3. nodeコンテナへの接続
```shell
$ docker compose exec node bash
```

### 4. npmでパッケージのインストール
```shell
$ npm install
```

### 5. docker-compose.ymlの再度修正
1.docker-compose.ymlの修正で行ったコメントアウトを元に戻す  
変更前
```yaml
# command: yarn dev
```
変更後
```yaml
command: yarn dev
```

### 6. dockerコンテナの停止
```shell
$ docker compose down
```

### 7. dockerコンテナの起動
```shell
$ docker compose up -d
```

### 下記URLへアクセス
[http://localhost:3000/dashboard](http://localhost:3000/dashboard)

## Author infomation
作成者: 永松光平   
作製日: 2022年09月06日(火)   
Email: kohei0801nagamatsu@gmail.com