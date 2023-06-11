<?php 
require '../function.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
        player 
    WHERE
         id LIKE '%$keyword%' OR
         name LIKE '%$keyword%' OR
           email LIKE '%$keyword%' 
         ";
$player = query($query); 

?>                   
                    
                    
                    
                    <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                    >
                    
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Event</th>
                        <th>Action</th>
                        
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                        
                      <?php foreach($player as $p) :?>
                        <tr>
                        
                          <td><?= $p['id']?></td>
                          <td><?= $p['username']?></td>
                          <td><?= $p['email']?></td>
                          <td><?= $p['age']?></td>
                          <td><?= $p['city']?></td>
                          <td><?= $p['event']?></td>
                          <td><?= $p['action']?></td>
                          <td>
                            <a href="edit.php" class="btn btn-success btn-sm mt-1">Edit</a>
                            <a href="hapus.php?id=<?= $r['id']; ?>" class="btn btn-danger btn-sm mt-1">Delete</a>
                          </td>
                        </tr>           
                        <?php endforeach; ?> 
                      </tbody>
                     </div>        
                      </table>