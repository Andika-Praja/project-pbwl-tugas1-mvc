<h2>Users</h2>

<a href="<?php echo URL; ?>/users/input" class="btn"><i class="fa-solid fa-folder-plus"></i> Input User</a>

<table>
      <tr>
            <th>NO</th>
            <th>EMAIL</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO.HP</th>
            <th>POS</th>
            <th>ROLE</th>
            <th>AKTIF</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['user_email']; ?></td>
                  <td><?php echo $row['user_nama']; ?></td>
                  <td><?php echo $row['user_alamat']; ?></td>
                  <td><?php echo $row['user_hp']; ?></td>
                  <td><?php echo $row['user_pos']; ?></td>
                  <td><?php echo $row['user_role']; ?></td>
                  <td><?php echo $row['user_aktif']; ?></td>
                  <td><a href="<?php echo URL; ?>/users/edit/<?php echo $row['user_id']; ?>" class="btn"><i class="fa-solid fa-pen-to-square"></i></a></td>
                  <td><a href="<?php echo URL; ?>/users/delete/<?php echo $row['user_id']; ?>" class="btn" onclick="return confirm('Are you sure?')"><i class="fa-regular fa-trash-can"></i></a></td>
            </tr>
      <?php $no++;
      } ?>

</table>