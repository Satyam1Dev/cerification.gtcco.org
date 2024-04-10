<?php include('sidebar.php') ?>


<section class="home-section " id="">
  <?php include('header.php')?>
    <div class="container p-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="text-white">Wallet Management Form</h3>
                </div>
                <div class="card-body">
                    <form action="wallet_insert.php" method="post">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="student_id" placeholder="Student ID" required>
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" name="amount_charged" placeholder="Amount Charged" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="comments" placeholder="Comments"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Add to Wallet</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>