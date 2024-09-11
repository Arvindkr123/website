<!-- <table border="1">
    <tr>
        <td>S.NO</td>
        <td>Name</td>
        <td>Email</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Arvind Kumar</td>
        <td>arvind@gmail.com</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Arvind Kumar</td>
        <td>arvind@gmail.com</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Arvind Kumar</td>
        <td>arvind@gmail.com</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Arvind Kumar</td>
        <td>arvind@gmail.com</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Arvind Kumar</td>
        <td>arvind@gmail.com</td>
    </tr>

</table> -->

<?php
$users = [
    [1, "arvind", "thakurarvindkr10@gmail.com", "badaun"],
    [2, "rahul", "rahul@gmail.com", "badaun"],
    [3, "shayam", "shayam@gmail.com", "badaun"],
    [4, "tarun", "tarun@gmail.com", "badaun"],
];

echo "<table border='1'>";
for ($i = 0; $i < count($users); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($users[$i]); $j++) {
        echo "<td>";
        echo $users[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
