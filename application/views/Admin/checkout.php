<html>
<head></head>
    <body><center><form><table border="1">
        <h1>Order Summary</h1>
        <thead>
        <tr>
          <th>Full Name</th>
          <th>Email ID</th>
          <th>Contact No.</th>
          <th>Industry</th>
		  <th>Region</th>
          <th>Country</th>  
          <th>Objective</th>
          <th>No. of Queries</th>
          <th>Brand Name</th>
          <th>Website URL</th>
            <th>Price</th>
        </tr>
      </thead><tbody>
<?php
        foreach($main_result as $result_data){ ?>
        <tr>
          <td><?php echo $result_data->name;   ?></td>  
          <td><?php echo $result_data->email;  ?></td>
          <td><?php echo $result_data->contact;  ?></td>
          <td><?php echo $result_data->industry;   ?></td>
          <td><?php echo $result_data->region;   ?></td>
          <td><?php echo $result_data->country;   ?></td>
          <td><?php echo $result_data->objective;   ?></td>
          <td><?php echo $result_data->queries;   ?></td>
          <td><?php echo $result_data->brand_name;   ?></td>
          <td><?php echo $result_data->url;  } ?></td>
            <?php 
        foreach($result as $results){ ?>  
          <td><?php echo $results->price;
        }
              ?></td>
            <td><input type="submit" name="submit"></td>
        </tr></tbody>
        </table>
        
        </form>
        </center>
    </body>
</html>