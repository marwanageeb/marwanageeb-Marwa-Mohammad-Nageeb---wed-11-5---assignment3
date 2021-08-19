<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylee.css">
</head>

<body>
    <div class="calculator">
        <h1 class="title">CALCULATOR</h1>
        <form action="handel-calcuotator.php" method="get">
            <input type="text" name="num1" class="num" autocomplete="off" placeholder="Enter First Number">
            <input type="text" name="num2" class="num" autocomplete="off" placeholder="Enter Second Number">
            <select name="operator" class="opt">
            <option value="choose" selected>choose..</option>
                <option value="Add">Add</option>
                <option value="Subtract">Subtract</option>
                <option value="Multiply">Multiply</option>
                <option value="Divide">Divide</option>
            </select>
            <input type="submit" value="calculate" name="submit" class="button">
        </form>
        <?php if (isset($_GET['result'])){?>
        <div class="resl">
        <p class="mb-0">Result = <?php echo $_GET['result']; ?> </p>
    </div>
      <?php  }?>

</div>
</body>
</html>