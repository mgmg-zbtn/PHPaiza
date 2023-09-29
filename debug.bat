@echo off
rem 2023/09/23
rem PHP DEBUG FOR PAIZA

rem sample
rem debug.bat P000 P*** 1

rem %1 P000
rem %2 P***
rem %3 No, of testcase : 1 ~ N

rem 指定した番号のテストケース実行
php ./src/%1/%2/index.php < ./src/%1/%2/testcase/case%3.txt
@echo on

rem 実行結果をログ出力
@echo off
php ./src/%1/%2/index.php < ./src/%1/%2/testcase/case%3.txt > ./src/%1/%2/testcase/log%3.txt

rem 出力結果と正答の検査
java -jar PaizaDebug.jar ./src/%1/%2/testcase/log%3.txt ./src/%1/%2/estcase/ans%3.txt
@echo on
