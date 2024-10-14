<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Registration</title>
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
    <h1>Are you sure you want to delete this registration?</h1>
    <?php $getRegistrationById = getNetworkEngineerRegistrationByID($pdo, $_GET['id']); ?>
    <form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="registrationContainer" style="border-style: solid; font-family: 'Arial';">
            <p>Full Name: <?php echo htmlspecialchars($getRegistrationById['full_name']); ?></p>
            <p>Email Address: <?php echo htmlspecialchars($getRegistrationById['email_address']); ?></p>
            <p>Phone Number: <?php echo htmlspecialchars($getRegistrationById['phone_number']); ?></p>
            <p>Certifications: <?php echo htmlspecialchars($getRegistrationById['certifications']); ?></p>
            <p>Networking Skills: <?php echo htmlspecialchars($getRegistrationById['networking_skills']); ?></p>
            <p>Years in Industry: <?php echo htmlspecialchars($getRegistrationById['years_in_industry']); ?></p>
            <input type="submit" name="deleteRegistrationBtn" value="Delete">
        </div>
    </form>
</body>
</html>
