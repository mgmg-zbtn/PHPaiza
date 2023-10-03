@echo off
rem 2023/09/23
rem PHP DEBUG FOR PAIZA

rem sample
rem debug.bat Z000 Z*** 1

rem %1 P000
rem %2 P***
rem %3 1 ~ N (testcase No.)

rem 指定した番号のテストケース実行
php ./src/%1/%2/index.php < ./src/%1/%2/testcase/case%3.txt
@echo on

@echo off
rem 実行結果をログファイルへ出力
php ./src/%1/%2/index.php < ./src/%1/%2/testcase/case%3.txt > ./src/%1/%2/testcase/log%3.txt

echo;
rem 出力結果と正答の検査
java -jar PaizaCompare.jar ./src/%1/%2/testcase/log%3.txt ./src/%1/%2/testcase/ans%3.txt
@echo on
