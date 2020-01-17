<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="measurements.js"></script>
    <head>
        <title>change measurement</title>
        <div>
            <table id = "topmenu">
                <td>hi</td>
                <td>hi</td>
                <td>hi</td>
                <td>hi</td>
                <td>hi</td>
            </table>
        </div>

    </head>
    <body>
        <form id = "dropdown">
            <select id = "towers">
                <option value="300">Eifeltower</option>
                <option value="57">Tower of Pisa</option>
                <option value="381">Empire State</option>
                <option value="828">Burj Khalifa</option>
            </select>
            <select id = "select">
                <option value="centimeters">measurements: centimeters</option>
                <option value="inches">measurements: inches</option>
                <option value="meters">measurements: meters</option>
                <option value="feet">measurements: feet</option>
            </select>
            <input type="button" onclick="measurement()" value="change value">
        </form>
        <p id ="text">The eifel tower is </p>
        <p id="measurement"></p>
    </body>
    <footer>

    </footer>
</html>