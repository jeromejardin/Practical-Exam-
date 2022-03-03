<?php include('db.php')?>

<?php
    //Get the data using Query
    $sql1 = "SELECT employees.id,employees.name,employees.date_hired,employees.department_id,employees.salary_id,salary.salary FROM employees, salary WHERE employees.salary_id = 3 AND salary.salary = '20000'";
    $result1 = $con-> query($sql1);

    echo "Get all data of highest paid employee (without using LIMIT) <br>";
    //display output by calling every entity
    while($row1 = $result1-> fetch_assoc()){
        echo "id: ". $row1['id']. "<br>";
        echo "name: ". $row1['name']. "<br>";
        echo "date_hired: ". $row1['date_hired']. "<br>";
        echo "department_id: ". $row1['department_id']. "<br>";
        echo "salary_id: ". $row1['salary_id']. "<br>";
        echo "salary: ". $row1['salary']. "<br>";
    }
    echo "<br><br><br>";

    //Get the data using Query
    $sql2 = "SELECT * FROM employees WHERE date_hired BETWEEN '2017-01-31' and '2018-12-31'";
    $result2 = $con-> query($sql2);
    
    echo "Get all employees that are hired from 2017-2018 <br>";
    //display output by calling every entity
    while($row2 = $result2-> fetch_assoc()){
        echo "id: ". $row2['id']. "<br>";
        echo "name: ". $row2['name']. "<br>";
        echo "date_hired: ". $row2['date_hired']. "<br>";
        echo "department_id: ". $row2['department_id']. "<br>";
        echo "salary_id: ". $row2['salary_id']. "<br>";
        echo "<br>";
    }
    echo "<br><br><br>";

    //Get the data using Query
    $sql3 = "SELECT employees.id,employees.name,employees.date_hired,departments.department FROM employees, departments WHERE employees.department_id = 3 and departments.id = 3 AND employees.date_hired >= '2018_01-31'";
    $result3 = $con-> query($sql3);
    
    echo "Get all employees that belongs to IT department and hired 2018 onwards <br>";
    //display output by calling every entity
    while($row3 = $result3-> fetch_assoc()){
        echo "id: ".$row3['id']. "<br>";
        echo "name: ". $row3['name']. "<br>";
        echo "date_hired: ". $row3['date_hired']. "<br>";
        echo "department_id: ". $row3['department']. "<br>";
        
        echo "<br>";
    }
    echo "<br><br><br>";

?>
