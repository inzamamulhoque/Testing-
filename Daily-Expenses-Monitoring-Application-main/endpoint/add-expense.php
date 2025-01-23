<!--  Author Name: Inzamamul Hoque Shawon
    GigHub Link: https://github.com/inzamamulhoque
    Facebook Link:https://www.facebook.com/inzamamulhoqueshawon.cse
    Linkedin Link: https://www.linkedin.com/in/inzamamul-hoque-shawon
    for any PHP, Laravel, Python, Flutter work contact me at inzamamulhoque.cse@gmail.com   
--> 
<?php
include("../conn/conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['expense_date'], $_POST['expense_amount'])) {
        $expenseDate = $_POST['expense_date'];
        $expenseAmount = $_POST['expense_amount'];

        try {
            $stmt = $conn->prepare("INSERT INTO tbl_expense (expense_date, expense_amount) VALUES (:expense_date, :expense_amount)");
            
            $stmt->bindParam(":expense_date", $expenseDate, PDO::PARAM_STR); 
            $stmt->bindParam(":expense_amount", $expenseAmount, PDO::PARAM_STR);

            $stmt->execute();

            header("Location: http://localhost/daily-expenses-monitoring-app/");

            exit();
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }

    } else {
        echo "
            <script>
                alert('Please fill in all fields!');
                window.location.href = 'http://localhost/daily-expenses-monitoring-app/';
            </script>
        ";
    }
}
?>
<!--  Author Name: Inzamamul Hoque Shawon
    GitHub Link: https://github.com/inzamamulhoque
    Facebook Link:https://www.facebook.com/inzamamulhoqueshawon.cse
    Linkedin Link: https://www.linkedin.com/in/inzamamul-hoque-shawon 
    for any PHP, Laravel, Python, Flutter work contact me at inzamamulhoque.cse@gmail.com   
--> 
