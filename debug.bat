@echo off
rem PHP DEBUG FOR PAIZA

rem @since 2023/09/23
rem ver2.0 2023/11/02
rem ver3.0 2023/11/10
 
rem @usage
rem debug.bat Z--- 1 (0/1)

rem %1 Z--- (problem directory)
rem %2 1 ~ N (testcase No.)
rem %3 0 or 1 (flag only test or compare)

set TEMP=%1
set HEAD=%TEMP:~0,1%
set BODY=000
set ROOT=%HEAD%%BODY%


rem 指定した番号のテストケース実行
php ./src/%ROOT%/%1/index.php < ./src/%ROOT%/%1/testcase/case%2.txt
@echo on
@echo off
if "%3"=="1" (
    exit /b
)

@echo off
rem 実行結果をログファイルへ出力
php ./src/%ROOT%/%1/index.php < ./src/%ROOT%/%1/testcase/case%2.txt > ./src/%ROOT%/%1/testcase/log%2.txt

echo;
rem 出力結果と正答の検査
java -jar PaizaCompare.jar ./src/%ROOT%/%1/testcase/log%2.txt ./src/%ROOT%/%1/testcase/ans%2.txt
@echo on

