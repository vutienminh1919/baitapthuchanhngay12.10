<?php
include_once "services/StudentManagement.php";
include_once "Student.php";
$studentmanage = new StudentManagement();
$student1 = new Student("xuan anh");
$student2 = new Student("thanh");
$student3 = new Student("hoang");
$student4 = new Student("minh");
$studentmanage->store($student1);
$studentmanage->storeStudents($student1, $student2, $student3, $student4);
$students = $studentmanage->index();





?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>danh sach hoc sinh</title>
</head>
<body>
<table border="0" cellspacing="0">
    <thead>
    <th>STT</th>
    <th>Ten</th>
    <th>diem toan</th>
    <th>diem ly</th>
    <th>diem hoa</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($students)): ?>
        <?php foreach ($students as $key => $student): ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $student->getName(); ?></td>
                <td><?php echo $student->getMath; ?></td>
                <td><?php echo $student->getPhysic; ?></td>
                <td><?php echo $student->getChemistry; ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>

</body>
</html>
