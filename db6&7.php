<?php
//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "hej");

function query($query)
{
    global $konek;
    $result = mysqli_query($konek, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

$no = query("select * from name_occupation");
$binary = query("select * from binary_tree");
?>

<?php foreach ($no as $n) : ?>
    <h4><?= $n["name"]; ?>(<?= $n["occupation"]; ?>)</h4>
<?php endforeach; ?>

<?php
echo "There are a total of " . query("select count from name_occupation where name_occupation.occupation = doctor") . " doctors";
echo "There are a total of " . query("select count from name_occupation where name_occupation.occupation = singer") . " singers";
echo "There are a total of " . query("select count from name_occupation where name_occupation.occupation = actor") . " actors";
echo "There are a total of " . query("select count from name_occupation where name_occupation.occupation = professor") . " professors";
?>