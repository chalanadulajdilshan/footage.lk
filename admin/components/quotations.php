<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Manage Quotations</h3>
        <div class="panel-options">
            <a href="#" data-toggle="panel">
                <span class="collapse-icon">&ndash;</span>
                <span class="expand-icon">+</span>
            </a>
            <a href="#" data-toggle="remove">
                &times;
            </a>
        </div>
    </div>
    <div class="panel-body">
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $("#example-1").dataTable({
                    aLengthMenu: [
                        [10, 25, 50, 100, -1],
                        [10, 25, 50, 100, "All"]
                    ]
                });
            });
        </script>
        <table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>QUOTATION ID</th>
                    <th>CLIENT</th>
                    <th>PROJECT</th>
                    <th>COST</th>
                    <th>VISIT</th>
                    <th>ADVANCE</th>
                    <th>TOTAL</th>
                    <th>NOTE</th>
                    <th>DATE</th>
                    <th>CREATED_AT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($quotations as  $quotation) :
                    $CLIENT = new Customer($quotation['customer_id']);
                    $PROJECT = new Projects($quotation['project_id']);
                ?>
                    <tr>
                        <td>#<?= str_pad($quotation['id'], 5, 0, STR_PAD_LEFT) ?></td>
                        <td><?= $CLIENT->customer_name ?></td>
                        <td><?= $PROJECT->project_name ?></td>
                        <td><?= $quotation['cost'] ?></td>
                        <td><?= $quotation['visit'] ?></td>
                        <td><?= $quotation['advance'] ?></td>
                        <td><?= $quotation['total'] ?></td>
                        <td><?= $quotation['note'] ?></td>
                        <td><?= $quotation['date'] ?></td>
                        <td><?= $quotation['created_at'] ?></td>
                        <td>
                            <a href="quotation.php?quotation-id=<?= $quotation['id'] ?>" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>
                            <form action="ajax/php/invoice.php" method="post" class="inline">
                                <input type="hidden" name="quotation_id" value="<?php echo $quotation['id'] ?>" />
                                <input type="hidden" name="action" value="create" />
                                <button type="submit" class="btn btn-info btn-sm btn-icon icon-left">
                                    Create Invoice
                                </button>
                            </form>
                            <a href="manage-invoice.php?quotation-id=<?= $quotation['id'] ?>" class="btn btn-primary btn-sm btn-icon icon-left">
                                Manage Invoices
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>