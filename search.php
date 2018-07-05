<!DOCTYPE html>
<html>
<head>
    <title>HelloPage</title>
</head>
<body>
<fieldset>
<form action="" method="get">
    <input type="text" name="keyword" placeholder="お名前で検索" value="<?php echo htmlspecialchars($_GET['keyword'] ?? ''); ?>">
    <input type="text" name="tel" placeholder="電話番号で検索" value="<?php echo htmlspecialchars($_GET['tel'] ?? ''); ?>">
    <button type="submit">検索</button>
</form>
</fieldset>
<br><br>
<?php
use Quartetcom\HelloPage\CustomerCriteriaBuilder;
use Quartetcom\HelloPage\CustomerFilter;
use Quartetcom\HelloPage\CustomerSearchApp;
use Quartetcom\HelloPage\CustomerSearch;
use Quartetcom\HelloPage\DataSource\ArrayCustomerDataSource;

require __DIR__.'/vendor/autoload.php';

$app = new CustomerSearchApp(new CustomerCriteriaBuilder(), new CustomerSearch(new ArrayCustomerDataSource()));
$foundCustomers = $app->search($_GET);
?>
<table border="1">
    <thead>
        <tr>
            <th>電話番号</th>
            <th>お客様名</th>
            <th>案件名</th>
            <th>担当者名</th>
            <th>備考</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($foundCustomers as $customer): ?>
        <tr>
            <td><?php echo $customer['tel']; ?></td>
            <td><?php echo $customer['company_name']; ?> <?php echo $customer['name']; ?></td>
            <td><?php echo $customer['project_name']; ?></td>
            <td><?php echo $customer['staff_name']; ?></td>
            <td><?php echo $customer['memo']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
