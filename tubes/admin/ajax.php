<?php 
require '../function.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
        user 
    WHERE
         id LIKE '%$keyword%' OR
         email LIKE '%$keyword%' OR
         username LIKE '%$keyword%' 
         ";
$user = query($query); 

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
                        <th>Password</th>
                        <th>Action</th>
                        
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                        
                      <?php foreach($user as $s) :?>
                        <tr>
                        
                          <td><?= $s['id']?></td>
                          <td><?= $s['username']?></td>
                          <td><?= $s['email']?></td>
                          <td><?= $s['password']?></td>
                          <td>
                            <a href="edit.php" class="btn btn-success btn-sm mt-1">Edit</a>
                            <a href="hapus.php?id=<?= $s['id']; ?>" class="btn btn-danger btn-sm mt-1">Delete</a>
                          </td>
                        </tr>           
                        <?php endforeach; ?> 
                      </tbody>
                     </div>        
                      </table>