<div class="modal fade" id="modal-beri">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Expense</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('library/configuration/add-credit?type=expense&user=' . $_SESSION['uuid']) ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Date:</label>
                        <div class="input-group date" id="ExpenseDate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#ExpenseDate" name="date">
                            <div class="input-group-append" data-target="#ExpenseDate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nameTransactions">Title</label>
                        <input type="text" class="form-control" id="nameTransactions" placeholder="Title Transactions" name="name">
                    </div>
                    <div class="form-group">
                        <label for="totalTransactions">Total</label>
                        <input type="text" class="form-control" id="nominalRupiah" placeholder="Total Transactions" name="transaction">
                    </div>
                    <div class="form-group">
                        <label>Accounts</label>
                        <select class="form-control select2" style="width: 100%;" name="account">
                            <option selected="selected" disabled>Select Options</option>
                            <?php
                            $say = getAllAccounts($_SESSION['uuid']);
                            foreach ($say as $mm) :
                                echo "<option value=" . $mm['uuid'] . ">" . $mm['name'] . "</option>";
                            endforeach;
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="2" placeholder="Description" name="description"></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close</button>
                    <button type="submit" name="request" class="btn btn-dark btn-block">Save.. <i class="fa fa-save"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>