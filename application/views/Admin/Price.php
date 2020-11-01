<html>
<head></head>
    <body><center>
    <form method="post">
        <h1>Pricing Details</h1>
        <table><tr>
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
            <td>Price</td>
                <td><input type="text" name="price" required></td>
            </tr>
</table>
        
        <input type="submit" name="submit">
		<a href="<?php echo base_url();?>admin">Home</a>
        </form></center>
    </body>
</html>
