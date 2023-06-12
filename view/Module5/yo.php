<tbody>
  <?php
  $query = "SELECT * FROM complaints";
  $result = mysqli_query($connection, $query);

  if (mysqli_num_rows($result) > 0) {
    $count = 1;
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $date = $row['date'];
      $time = $row['time'];
      $complaintType = $row['complaint_type'];
      $status = $row['status'];
      ?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo $time; ?></td>
        <td><?php echo $complaintType; ?></td>
        <td><?php echo $status; ?></td>
        <td>
          <a href="#modal-view-<?php echo $id; ?>" class="btn btn-primary" data-bs-toggle="modal">View</a>
        </td>
      </tr>

      <!-- Modal -->
      <div class="modal fade" id="modal-view-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-view-<?php echo $id; ?>-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-view-<?php echo $id; ?>-label">Complaint Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p><strong>Date:</strong> <?php echo $date; ?></p>
              <p><strong>Time:</strong> <?php echo $time; ?></p>
              <p><strong>Complaint Type:</strong> <?php echo $complaintType; ?></p>
              <p><strong>Status:</strong> <?php echo $status; ?></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
  <?php
      $count++; // Increment the count by 1
    }
  } else {
    echo "<tr><td colspan='6'>No complaints found</td></tr>";
  }
  ?>
</tbody>
<tbody>
  <?php
  $query = "SELECT * FROM complaints";
  $result = mysqli_query($connection, $query);

  if (mysqli_num_rows($result) > 0) {
    $count = 1;
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $date = $row['date'];
      $time = $row['time'];
      $complaintType = $row['complaint_type'];
      $status = $row['status'];
      ?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo $time; ?></td>
        <td><?php echo $complaintType; ?></td>
        <td><?php echo $status; ?></td>
        <td>
          <a href="#modal-view-<?php echo $id; ?>" class="btn btn-primary" data-bs-toggle="modal">View</a>
        </td>
      </tr>

      <!-- Modal -->
      <div class="modal fade" id="modal-view-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-view-<?php echo $id; ?>-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-view-<?php echo $id; ?>-label">Complaint Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p><strong>Date:</strong> <?php echo $date; ?></p>
              <p><strong>Time:</strong> <?php echo $time; ?></p>
              <p><strong>Complaint Type:</strong> <?php echo $complaintType; ?></p>
              <p><strong>Status:</strong> <?php echo $status; ?></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
  <?php
      $count++; // Increment the count by 1
    }
  } else {
    echo "<tr><td colspan='6'>No complaints found</td></tr>";
  }
  ?>
</tbody>
