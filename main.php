<?php

$names = ["Ahmad", "Laila", "Omid", "Sara", "Bilal"];
$marks = [85, 62, 47, 91, 55];

$passMark = 50;

$total = 0;
$passed = 0;
$highest = 0;
$highestStudent = "";

echo "<table border='1'>";

echo "<tr>";
echo "<th>Name</th>";
echo "<th>Mark</th>";
echo "<th>Grade</th>";
echo "<th>Result</th>";
echo "</tr>";

for ($i = 0; $i < count($names); $i++) {

    $name = $names[$i];
    $mark = $marks[$i];

    //echo"test";
    // Grade
    if ($mark >= 80) {
        $grade = "A";
    } elseif ($mark >= 65) {
        $grade = "B";
    } elseif ($mark >= 50) {
        $grade = "C";
    } else {
        $grade = "F";
    }

    // Result
    if ($mark >= $passMark) {
        $result = "Pass";
        $color = "green";
        $passed++;
    } else {
        $result = "Fail";
        $color = "red";
    }

    // Total
    $total = $total + $mark;

    // Highest mark
    if ($mark > $highest) {
        $highest = $mark;
        $highestStudent = $name;
    }

    // Print row
    echo "<tr style= 'color:$color';>";
    echo "<td>$name</td>";
    echo "<td>$mark</td>";
    echo "<td>$grade</td>";
    echo "<td >$result</td>";
    echo "</tr>";
}

echo "</table>";

$average = $total / count($marks);

echo "<p>Class average: $average</p>";
echo "<p>Highest mark: $highestStudent ($highest)</p>";
echo "<p>Passed: $passed of " . count($marks) . "</p>";

?>