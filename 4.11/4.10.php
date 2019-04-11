<!-- 字符串 -->
<!-- <?php
$txt="Hello world!";
echo $txt;
?> -->

<!-- <?php
$txt1="Hello world!";
$txt2="What a nice day!";
echo $txt1 . " " . $txt2;
?> -->

<!-- <?php
echo strlen("Hello world!");
?> -->

<!-- <?php
echo strpos("Hello world!","world");
?> -->

<!-- <?php
echo strpos('开始23测试ceshi', '测试') . PHP_EOL;
echo mb_strpos('开始23测试ceshi', '测试') . PHP_EOL;

echo strpos('123测试ceshi', '测试') . PHP_EOL;
echo mb_strpos('123测试ceshi', '测试') . PHP_EOL;
?> -->

<!-- <?php
$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // 打印 @example.com

$user = strstr($email, '@', true); // 从 PHP 5.3.0 起
echo $user; // 打印 name
?> -->

<!-- <?php
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str; // 打印 mary had a little lamb and she loved it so
?> -->

<!-- <?php
echo str_repeat("-=", 5);
?> -->

<!-- <?php
$findme    = 'a';
$mystring1 = 'xyz';
$mystring2 = 'ABC';

$pos1 = stripos($mystring1, $findme);
$pos2 = stripos($mystring2, $findme);

// 'a' 当然不在 'xyz' 中
if ($pos1 === false) {
    echo "The string '$findme' was not found in the string '$mystring1'";
}

// 注意这里使用的是 ===。简单的 == 不能像我们期望的那样工作，
// 因为 'a' 的位置是 0（第一个字符）。
if ($pos2 !== false) {
    echo "We found '$findme' in '$mystring2' at position $pos2";
}
?> -->
<!-- <?php
$trans = array("hello" => "hi", "hi" => "hello");
echo strtr("hi all, I said hello", $trans);
?> -->
<!-- 数组 -->
<!-- <?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?> -->

<!-- <?php
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
?> -->

<!-- <?php
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
for($x=0;$x<$arrlength;$x++)
{
echo $cars[$x];
echo "<br>";
}
?> -->

<!-- <?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?> -->

<!-- <?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
foreach($age as $x=>$x_value)
{
echo "Key=" . $x . ", Value=" . $x_value;
echo "<br>";
}
?> -->

<!-- <?php
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);
?> -->

<!-- <?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);
?> -->

<!-- <?php
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
?> -->

<!-- <?php
$foo[bar] = 'enemy';
echo $foo[bar];
// etc
?> -->

<!-- <?php
$colors = array('red', 'blue', 'green', 'yellow');

foreach ($colors as $color) {
    echo "Do you like $color?\n";
}

?> -->


<!-- for -->

<!-- <?php
for ($i=1; $i<=5; $i++)
{
echo "The number is " . $i . "<br>";
}
?> -->

<!-- while -->
<html>
<body>

<?php
$i=1;
do
{
    $i++;
    echo "The number is " . $i . "<br>";
}
while ($i<=5);
?>

</body>
</html>