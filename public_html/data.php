<?php 
    $conn = new mysqli('localhost', 'mohammed', '1234', 'wp_zorgdossier');
    $results = $conn->query("SELECT * FROM wp_users");
?>
<?php while ($data = $results->fetch_assoc()): ?>
    
    <tr>
        <td><?php echo $data['ID'] ?></td>
        <td><?php echo $data['user_login'] ?></td>
        <td><?php echo $data['user_email'] ?></td>
    </tr>
<?php endwhile; ?>