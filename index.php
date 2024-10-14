<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Engineer Registration</title>
    <style>
        body {
            font-family: "Arial";
        }
        input {
            font-size: 1.5em;
            height: 50px;
            width: 200px;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h3>Welcome to the Network Engineer Registration System. Please fill up the form! :) </h3>
    <form action="core/handleForms.php" method="POST">
        <p><label for="full_name">Full Name</label> <input type="text" name="full_name" required></p>
        <p><label for="email_address">Email Address</label> <input type="email" name="email_address" required></p>
        <p><label for="phone_number">Phone Number</label> <input type="text" name="phone_number"></p>
        <p><label for="certifications">Certifications</label> <input type="text" name="certifications"></p>
        <p><label for="networking_skills">Networking Skills</label> <input type="text" name="networking_skills"></p>
        <p><label for="years_in_industry">Years in Industry</label> <input type="text" name="years_in_industry"></p>
        <p><input type="submit" name="insertNewRegistrationBtn" value="Register"></p>
    </form>

    <table style="width:100%; margin-top: 50px;">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Certifications</th>
            <th>Networking Skills</th>
            <th>Years in Industry</th>
            <th>Date Added</th>
            <th>Action</th>
        </tr>

        <?php $seeAllRegistrations = seeAllNetworkEngineerRegistrations($pdo); ?>
        <?php foreach ($seeAllRegistrations as $row) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['full_name']); ?></td>
            <td><?php echo htmlspecialchars($row['email_address']); ?></td>
            <td><?php echo htmlspecialchars($row['phone_number']); ?></td>
            <td><?php echo htmlspecialchars($row['certifications']); ?></td>
            <td><?php echo htmlspecialchars($row['networking_skills']); ?></td>
            <td><?php echo htmlspecialchars($row['years_in_industry']); ?></td>
            <td><?php echo htmlspecialchars($row['date_added']); ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
