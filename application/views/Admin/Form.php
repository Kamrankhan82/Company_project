<html>
<head></head>
    <body><center>
    <form method="post">
        <h1>Admin Form</h1>
        <table>
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="name" required></td>
            </tr>
        <tr>
            <td>Email ID</td>
            <td><input type="text" name="email" required></td>
            </tr>
        <tr>
            <td>Contact No.</td>
            <td><input type="text" name="contact" required></td>
            </tr>
        <tr>
            <td>Industry</td>
            <td><select name="industry">
                <option value="IT">IT</option>
                <option value="Real Estate">Real Estate</option>
                <option value="Education">Education</option>
                <option value="Defense">Defense</option>
                <option value="Computer">Computer</option>
                </select></td>
            </tr>
        <tr>
            <td>Region</td>
            <td><input type="text" name="region" required></td>
            </tr>
        <tr>
            <td>Country</td>
            <td><input type="text" name="country" required></td>
            </tr>
        <tr>
            <td>Objective</td>
            <td><select name="objective">
                <option value="Build Pipeline">Build Pipeline</option>
                <option value="Create Database">Create Database</option>
                <option value="Immediate Conversions">Immediate Conversions</option>
                </select></td>
            </tr>
        <tr>
            <td>No. of Queries</td>
            <td><select name="queries">
                <option value="30">30</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="150">150</option>
                <option value="250">250</option>
                </select></td>
            </tr>
        <tr>
            <td>Brand Name</td>
            <td><input type="text" name="brand_name" required></td>
            </tr>
        <tr>
            <td>Website URL</td>
            <td><input type="text" name="url" required></td>
            </tr>
        </table>
        
        <input type="submit" name="submit">
		<a href="<?php echo base_url();?>admin/price">Add Price</a>
        </form></center>
    </body>
</html>
