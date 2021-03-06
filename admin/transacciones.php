<?php require_once "../layout/headadmin.php" ?>
<div class="column" id="content" style="display:none">
  <div class="ui grid">
    <div class="row">
      <h1 class="ui huge header">Todas las transacciones recibidas</h1>
    </div>
    <div class="ui horizontal divider"> Estos son todos los detalles de las transacciones</div>
    <div class="row">
      <table class="ui single line striped selectable center aligned  table">
        <thead>
          <tr>
            <th>#Order Ref</th>
            <th>Amount Paid</th>
            <th>Payment Via</th>
            <th>Transaction Code</th>
            <th>Paid by</th>
          </tr>
        </thead>
        <tbody>
          <?php
          require("../dbengine/dbconnect.php");
          if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $data = mysqli_query($conn, "SELECT order_ref,fullname,amount,account,transaction_id FROM booking_details WHERE order_ref LIKE '%$search%' or transaction_id LIKE '%$search%' or account LIKE '%$search%' or fullname LIKE '%$search%'");
          } else {
            $data = mysqli_query($conn, "SELECT order_ref,fullname,amount,account,transaction_id FROM booking_details");
          }

          if (($data) && (mysqli_num_rows($data) > 0)) {

            //getting data and generating a row
            while ($row = mysqli_fetch_assoc($data)) {
              echo ("<tr><td>" . $row['order_ref'] . "</td><td>" . $row['amount'] . "</td><td>" . $row['account'] . "</td><td>" . $row['transaction_id'] . "</td><td>" . $row['fullname'] . "</td></tr>");
            }
          } else {
            echo "<tr><td colspan='5'>No records match found! </td></tr>";
          }
          mysqli_close($conn);
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
</div>
</body>

</html>