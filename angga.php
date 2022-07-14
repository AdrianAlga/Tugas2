 <?php
$url = 'https://al-quran-8d642.firebaseio.com/data.json?print=pretty';
$json = file_get_contents($url);
$data = json_decode($json,true);

?>

<table border="1">
    <tr>
        <td>Arti</td>
        <td>Asma</td>
        <td>Audio</td>
        <td>Ayat</td>
    </tr>

    <?php
    
    for($i=0; $i < count($data);$i++){
        $row=$data[$i];
        ?>

        <tr>
            <td><?php echo $row['arti'] ?></td>
            <td><?php echo $row['asma'] ?></td>
            <td><?php echo $row['audio'] ?></td>
            <td><?php echo $row['ayat'] ?></td>
        </tr>
    <?php
    }
    
    ?>

</table>

