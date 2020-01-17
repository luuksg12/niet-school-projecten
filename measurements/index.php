<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="measurements.js"></script>
    <head>
        <title>change measurement</title>
        <div class = "button">
            <table id = "topmenu">
                <button>test</button>
                <button>test</button>
                <button>test</button>
                <button>test</button>
                <button>test</button>
                <button>test</button>
                <button>test</button>
            </table>
        </div>

    </head>
    <body>
        <form id = "dropdown">
            <select id = "towers" onclick="measurement()">
                <option value="300">Eifeltower</option>
                <option value="57">Tower of Pisa</option>
                <option value="381">Empire State</option>
                <option value="828">Burj Khalifa</option>
            </select>
            <select id = "select" onclick="measurement()">
                <option value="centimeters">measurements: centimeters</option>
                <option value="inches">measurements: inches</option>
                <option value="meters">measurements: meters</option>
                <option value="feet">measurements: feet</option>
            </select>
        </form>
        <p id="measurement">click the selectboxes for information on the tower sizes</p>
    </body>
    <footer>

    </footer>
</html>