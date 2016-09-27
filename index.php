<html xmlns="http://www.w3.org/1999/html">
<head>
    <title></title>
</head>
<body>
<form method="post" action="#">
    <table>
        <tr>
            <textarea id="" cols="29" rows="3" readonly="readonly" name="result"><?php

                                                                        if(isset($_POST['btnNumber'])  )
                                                                        {
                                                                            $str=$_POST['result'];
                                                                             $str= $str.$_POST['btnNumber'];

                                                                        }
                                                                        echo $str;
                                                                        if(isset($_POST['btnEqual']))
                                                                        {
                                                                            $str=$_POST['result'];
                                                                            if ($index=strpos($str,'+'))
                                                                            {
                                                                                $number1 = substr($str, 0, $index);
                                                                                $number2 = substr($str, $index + 1);
                                                                                echo $number1 + $number2;
                                                                            }
                                                                            if ($index=strpos($str,'-'))
                                                                            {
                                                                                $number1 = substr($str, 0, $index);
                                                                                $number2 = substr($str, $index + 1);
                                                                                echo $number1 - $number2;
                                                                            }
                                                                            if ($index=strpos($str,'*'))
                                                                            {
                                                                                $number1 = substr($str, 0, $index);
                                                                                $number2 = substr($str, $index + 1);
                                                                                echo $number1 * $number2;
                                                                            }
                                                                            if ($index=strpos($str,'/'))
                                                                            {
                                                                                $number1 = substr($str, 0, $index);
                                                                                $number2 = substr($str, $index + 1);
                                                                                echo $number1 / $number2;
                                                                            }
                                                                        }
                                                                        if(isset($_POST['btnSub10'])  )
                                                                        {
                                                                            $str = $_POST['result'];
                                                                            $str = 1 / $str;
                                                                            echo $str;
                                                                        }
                                                                        if(isset($_POST['btnSubLayDu'])  ) {
                                                                            $str = $_POST['result'];
                                                                            if ($index = strpos($str, '/')) {
                                                                                $number1 = substr($str, 0, $index);
                                                                                $number2 = substr($str, $index + 1);
                                                                                echo $number1 % $number2;
                                                                            }
                                                                        }
                                                                        if(isset($_POST['btnCanBac2']))
                                                                        {
                                                                            $str=$_POST['result'];
                                                                            if ($index=strpos($str,'+'))
                                                                            {
                                                                                $number1 = substr($str, 0, $index);
                                                                                $number2 = substr($str, $index + 1);
                                                                                $str = $number1 + $number2;
                                                                                echo sqrt($str);
                                                                            }
                                                                            if ($index=strpos($str,'-'))
                                                                            {
                                                                                $number1 = substr($str, 0, $index);
                                                                                $number2 = substr($str, $index + 1);
                                                                                $str = $number1 - $number2;
                                                                                echo sqrt($str);
                                                                            }
                                                                            if ($index=strpos($str,'*'))
                                                                            {
                                                                                $number1 = substr($str, 0, $index);
                                                                                $number2 = substr($str, $index + 1);
                                                                                echo sqrt($number1) * sqrt($number2);
                                                                            }
                                                                            if ($index=strpos($str,'/'))
                                                                            {
                                                                                $number1 = substr($str, 0, $index);
                                                                                $number2 = substr($str, $index + 1);
                                                                                echo sqrt($number1) / sqrt($number2);
                                                                            }
                                                                        }




                ?></textarea>

        </tr>
        <tr>
            <td><button style="height: 30px;width: 40px;" name="btnClear" value=""><-</button></td>
            <td><button style="height: 30px;width: 40px;" name="CE" value="">CE</button></td>
            <td><button style="height: 30px;width: 40px;" name="btnClearAll" value="">C</button></td>
            <td><button style="height: 30px;width: 40px;" name="±" value="">± </button></td>
            <td><button style="height: 30px;width: 40px;" name="btnCanBac2" value="">√</button></td>
        </tr>
        <tr>
            <td><button style="height: 30px;width: 40px;" name="btnNumber" value="7" >7</button></td>
            <td><button style="height: 30px;width: 40px;" name="btnNumber" value="8" >8</button></td>
            <td><button style="height: 30px;width: 40px;" name="btnNumber" value="9">9</button></td>
            <td><button style="height: 30px;width: 40px;" name="btnNumber" value="/" >/</button></td>
            <td><button style="height: 30px;width: 40px;" name="btnSubLayDu" value="">%</button></td>
        </tr>
        <tr>
            <td><button style="height: 30px;width: 40px;" name="btnNumber" value="4">4</button></td>
            <td><button style="height: 30px;width: 40px;" name="btnNumber" value="5">5</button></td>
            <td><button style="height: 30px;width: 40px;" name="btnNumber" value="6">6</button></td>
            <td><button style="height: 30px;width: 40px;" name="btnNumber" value="*">*</button></td>
            <td><button style="height: 30px;width: 40px;" name="btnSub10" value="">1/x</button></td>
        </tr>
        <tr>
            <td><button style="height: 30px;width: 40px;" name="btnNumber" value="1">1</button></td>
            <td><button style="height: 30px;width: 40px;" name="btnNumber" value="2">2</button></td>
            <td><button style="height: 30px;width: 40px;" name="btnNumber" value="3">3</button></td>
            <td><button style="height: 30px;width: 40px;" name="btnNumber" value="-">-</button></td>
            <td rowspan="2"><button style="height: 65px;width: 40px;" name="btnEqual" value="=">=</button></td>
        </tr>
        <tr>
            <td colspan="2"><button style="height: 30px;width: 85px;" name="btnNumber" value="0">0</button></td>
            <td><button style="height: 30px;width: 40px;" name="btnNumber" value=".">.</button></td>
            <td><button style="height: 30px;width: 40px;" name="btnNumber" value="+">+</button></td>

        </tr>
    </table>
</form>




</body>
</html>