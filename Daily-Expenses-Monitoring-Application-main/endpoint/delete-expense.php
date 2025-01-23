<!--  Author Name: Inzamamul Hoque Shawon
    GigHub Link: https://github.com/inzamamulhoque
    Facebook Link:https://www.facebook.com/inzamamulhoqueshawon.cse
    Linkedin Link: https://www.linkedin.com/in/inzamamul-hoque-shawon
    for any PHP, Laravel, Python, Flutter work contact me at inzamamulhoque.cse@gmail.com 
-->
<?php
include ('../conn/conn.php');

if (isset($_GET['expense'])) {
    $expense = $_GET['expense'];

    try {

        $query = "DELETE FROM tbl_expense WHERE tbl_expense_id = '$expense'";

        $stmt = $conn->prepare($query);

        $query_execute = $stmt->execute();

        if ($query_execute) {
            header("Location: http://localhost/daily-expenses-monitoring-app/");
        } else {
            header("Location: http://localhost/daily-expenses-monitoring-app/");
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
<!--  Author Name: Inzamamul Hoque Shawon
    GigHub Link: https://github.com/inzamamulhoque
    Facebook Link:https://www.facebook.com/inzamamulhoqueshawon.cse
    Linkedin Link: https://www.linkedin.com/in/inzamamul-hoque-shawon
    for any PHP, Laravel, Python, Flutter work contact me at inzamamulhoque.cse@gmail.com 
-->