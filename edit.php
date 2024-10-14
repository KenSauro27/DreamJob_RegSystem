<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Registration</title>
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
    <?php $getRegistrationById = getNetworkEngineerRegistrationByID($pdo, $_GET['id']); ?>
    <form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <p>
            <label for="full_name">Full Name</label> 
            <input type="text" name="full_name" value="<?php echo htmlspecialchars($getRegistrationById['full_name']); ?>">
        </p>
        <p>
            <label for="email_address">Email Address</label> 
            <input type="email" name="email_address" value="<?php echo htmlspecialchars($getRegistrationById['email_address']); ?>">
        </p>
        <p>
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" value="<?php echo htmlspecialchars($getRegistrationById['phone_number']); ?>">
        </p>
        <p>
            <label for="certifications">Certifications</label>
            <input type="text" name="certifications" value="<?php echo htmlspecialchars($getRegistrationById['certifications']); ?>">
        </p>
        <p>
            <label for="networking_skills">Networking Skills</label>
            <input type="text" name="networking_skills" value="<?php echo htmlspecialchars($getRegistrationById['networking_skills']); ?>">
        </p>
        <p>
            <label for="years_in_industry">Years in Industry</label>
            <input type="text" name="years_in_industry" value="<?php echo htmlspecialchars($getRegistrationById['years_in_industry']); ?>">
        </p>
        <p>
            <input type="submit" name="editRegistrationBtn" value="Update">
        </p>
    </form>
</body>
</html>