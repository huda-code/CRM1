<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM System</title>
    <link rel="stylesheet" type="text/css" href="..\public\CSS\styles.css"> <!-- Link to your CSS file -->
</head>
<body>
<nav class="navbar">
    <div class="navbar-brand">
        <h1>DRM</h1>
        <span>Diocese Relationship Management</span>
    </div>
    <ul class="navbar-menu">
        <li><a href="#">Quick View</a></li>
        <li><a href="#">Site Map</a></li>
        <li><a href="#"><img src="../path_to_your_search_icon.png" alt="Search"></a></li>
        <li><a href="#"><img src="../path_to_your_refresh_icon.png" alt="Refresh"></a></li>
        <li><a href="#"><img src="../path_to_your_plus_icon.png" alt="Add"></a></li>
    </ul>
</nav>

    <h1>Contact List</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?php echo htmlspecialchars($contact->name); ?></td>
                <td><?php echo htmlspecialchars($contact->email); ?></td>
                <td><?php echo htmlspecialchars($contact->phone); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add Contact</h2>
    <form action="index.php?action=addContact" method="post">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone">
        <input type="submit" value="Add Contact">
    </form>

    <h1>Institution List</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($institutions as $institution): ?>
            <tr>
                <td><?php echo htmlspecialchars($institution->name); ?></td>
                <td><?php echo htmlspecialchars($institution->address); ?></td>
                <td><?php echo htmlspecialchars($institution->phone); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add Institution</h2>
    <form action="index.php?action=addInstitution" method="post">
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="text" name="phone" placeholder="Phone">
        <input type="submit" value="Add Institution">
    </form>
</body>
</html>
