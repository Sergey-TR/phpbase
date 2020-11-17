<html>
<head>
    <title>Калькулятор</title>
</head>
<body style="display: flex;
             align-items: center;
             justify-content: center;">
    <div>
        <form method="POST">
            <input style="width: 300px; height: 60px; margin: 20px;
                          font-size: 30px;
                            text-align: end;
                            padding-right: 10px;" 
                            type="text" name="a"><br>
            <input style="width: 300px; height: 60px; margin: 20px; font-size: 30px;
                            text-align: end;
                            padding-right: 10px;" 
                            type="text" name="b"><br>
                <!-- <select style="width: 60px; height: 60px; margin: 20px; font-size: 40px" name="operation">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>             -->
                <div style="display: flex; align-items:center; justify-content:space-around;
                            width: 300px; min-height: 60px; margin: 20px;">
                    <input style="height: 50px; width: 50px; border-radius: 10px; font-size: 30px;" 
                            type="submit" value="+" name="operation">
                    <input style="height: 50px; width: 50px; border-radius: 10px; font-size: 30px;" 
                            type="submit" value="-" name="operation">
                    <input style="height: 50px; width: 50px; border-radius: 10px; font-size: 30px;" 
                            type="submit" value="*" name="operation">
                    <input style="height: 50px; width: 50px; border-radius: 10px; font-size: 30px;" 
                            type="submit" value="/" name="operation">
                </div>
            <!-- <input style="height: 60px; width: 216px; font-size: 30px;" type="submit" value="Посчитать"> -->
        </form>
        <h2 style="text-align: center;">РЕЗУЛЬТАТ</h2>
        <p style="width: 300px; min-height: 60px; margin: 20px; 
                    font-size: 30px; border: 1px solid black;"><?= $total ?></p>
    </div>

</body>
</html> 