<?php
//---------------------------------
// ==  緩やかな比較 型の相互変換後等しいか
// === 厳密な比較   等しく、同じ型か
//---------------------------------
// 型の比較表
// https://www.php.net/manual/ja/types.comparisons.php
//---------------------------------
// 比較演算子
// https://www.php.net/manual/ja/language.operators.comparison.php
//---------------------------------
// 文字列か数値なのかに注意
// 曖昧なまま判定に入れないこと
// (int)キャスト
//---------------------------------
// java string +=
// php  string .=
//---------------------------------
// YOKUTSUKAU
$N = (int)trim(fgets(STDIN));
for ($n = 0; $n < $N; $n++) {
}
//---------------------------------
$temp = explode(' ', trim(fgets(STDIN)));
for ($t = 0; $t < count($temp); $t++) {$temp[$t] = (int)$temp[$t]; }
// STDIN > 'A B C D'
// ['A', 'B', 'C', 'D']
//---------------------------------
list($N, $M, $S) = explode(' ', trim(fgets(STDIN)));
$N = (int)$N;
$M = (int)$M;
$S = (int)$S;
// STDIN > 'N M S'
//---------------------------------
$temp = str_split(trim(fgets(STDIN)));
// STDIN > '012345'
// $temp -> [0, 1, 2, 3, 4, 5]
//---------------------------------
str_replace('BBB', 'bbb', 'AAABBBCCC');
// AAAbbbCCC
//---------------------------------
$STR = ['A', 'B', 'C', 'D'];
implode($STR);
// 'ABCD'
//---------------------------------
$STR = 'ABCD';
str_split($STR);
// ['A', 'B', 'C', 'D']
//---------------------------------
$STR = ['A', 'B', 'C', 'D'];
for ($i = 0; $i < count($STR); $i++) {
    // count length
    // if u need $i
}
//---------------------------------
$STR = ['A', 'B', 'C', 'D'];
foreach ($STR as $str) {
    echo $str;
    // u neen only array element
}
//---------------------------------
$STR = 'ABCD';
for ($i = 0; $i < strlen($STR); $i++) {
    // count byte
}
//---------------------------------
$temp = [1, 2, 3];
// 要素数を超えるとNULL
//---------------------------------
// last in
// [1, 2, 3, 0] <=
array_push($temp, 0);
//---------------------------------
// last out
// [1, 2, 3] => 0
array_pop($temp);
//---------------------------------
// first in
// => [0, 1, 2, 3]
array_unshift($temp, 0);
//---------------------------------
// first out
// 0 <= [1, 2, 3]
array_shift($temp);
//---------------------------------
// B138
$area = [[]];
for ($y = 0; $y < $Y; $y++) {
    $area[$y] = str_split(trim(fgets(STDIN)));
}
// input
// ###
// #.#
// ###
//
// output
// ['#', '#', '#']
// ['#', '.', '#']
// ['#', '#', '#']
//---------------------------------
$map = [
    [-1, -1],[ 0, -1],[ 1, -1],
    [-1,  0],         [ 1,  0],
    [-1,  1],[ 0,  1],[ 1,  1],
];
// [x,y],[x,y],[x,y]
// [x,y],[-,-],[x,y]
// [x,y],[x,y],[x,y]
//---------------------------------
class Tuple {
    public $A;
    public $B;
    public function __construct(int $A, int $B) {
        $this->A = $A;
        $this->B = $B;
    }
}
$t = new Tuple(0, 0);
$t->A;
//---------------------------------
// $tuples = []; // 宣言するだけなら一緒
$tuples[] = new Tuple(0, 0);
array_push($tuples, new Tuple(1, 1));
$tuples[0]; // 0, 0
$tuples[1]; // 1, 1
//---------------------------------
class Test {
    public static $hoge;
    public static function SF(){}
    public function F() {}
}
Test::$hoge;
Test::SF();
$t = new Test();
$t->F();
//---------------------------------
