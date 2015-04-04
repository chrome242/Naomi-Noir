<!DOCTYPE HTML>

<html>
<head>
    <title>Variables</title>
</head>

<body>
    <?php
        require_once('../html_builders.php');
        $age = 37;                  // Number variable
        $name = "William LaMorie";  // String variable
        
        print("I am $name.");
        print("<br>");
        print("I am ".$age." years old.");
        print("<hr>
              ");
        
        
        makeShowcodeFile('variables.php');
    ?>
</body>
</html>
