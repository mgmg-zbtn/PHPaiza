todo
後で書き直す

jericho使う
->ParseTestCase.java

download/index.html
ファイルの種類「ウェブページ、完全」
上記以外だとタグの取得方法が変わってしまい動かないので注意

バッチファイルでテストケース判定を行う
arg[1] 問題番号
arg[2] テストケース番号
ROOT\DIR> .\debug.bat Z*** N

「case*.txt」で標準入力を与えて、
出力結果を「log*.txt」へ保存
「PaizaCompare.jar」で「ans*.txt」と「log*.txt」を比較する

PS  :x
CMD :o
ROOT\DIR>php ./src/Z000/Z***/index.php < ./src/Z000/Z***/testcase/case*.txt



