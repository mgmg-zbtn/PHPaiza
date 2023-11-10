
# PHPaiza for VSCode

PHPでPaizaの問題に挑戦する時、ローカルでデバッグする環境を作る。  

# Requirement

* [Jericho HTML Parser](http://jericho.htmlparser.net/docs/index.html)  
* [PaizaCompare](https://github.com/mgmg-zbtn/PaizaCompare/tree/master)

# Installation

about:Jericho  

1. sourceforgeからダウンロード
1. .vscode/settings.jsonにjarファイルへのパスを指定する。

# Usage

1. 問題ページをダウンロードする。(download/index.html)
1. src/make/Make.javaを実行する。
1. 生成された（問題番号ディレクトリ以下の）index.phpに解答を実装する。
1. コマンドプロンプトからdebug.batを実行する。

```text
ROOT\DIR> .\debug.bat Z--- N
```

Z--- 問題番号  
N テストケース番号  

# Note

PROJECTROOT/download/index.html  
ファイルの種類「ウェブページ、完全」  
※上記以外の保存方法だとタグの取得方法が変わってしまい動かない。  
