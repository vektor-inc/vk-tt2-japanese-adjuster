# Lightning Customize Plugin

https://github.com/vektor-inc/lightning-customize-plugin

※ 使い方について issue でのサポートは行っておりません。

---

## CSS の追記、sass のコンパイルについて

### sass を使わない場合

assets/css/ ディレクトリ内のファイルに直接 css を記載してください。

### sass のコンパイル

```
npm install
npm run watch
```

assets/_scss/ ファイルの監視・コンパイルが動きます。

Ctrl + C で監視停止

---

## wp-env（開発者向け）

一応 .wp-env.json が置いてあります。

Docker が動作している状態で、

### wp-env をインストール

```
npm -g i @wordpress/env
```

### wp-env を起動

 ```
 wp-env start
 ```

詳しくは下記を参照ください。

https://ja.wordpress.org/team/handbook/block-editor/reference-guides/packages/packages-env/

---

## PHPUnit test（開発者向け）

```
composer install
wp-env start
npm run phpunit
```

※ プラグインのディレクトリ名・ファイル名を変更した場合は package.json 及び tests/bootstrap.php にディレクトリ名・ファイル名の記述があるので変更してください。