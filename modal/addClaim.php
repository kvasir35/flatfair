<div class="modal fade" id="popUpAddClaim" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add claim</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <span id="alertModal"></span>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="claimCategory">Categorie</label>
                        <select id="claimCategory" class="form-control">
                            <option value="agent">Cat 1</option>
                            <option value="tenant">Cat 2</option>
                            <option value="landlord">Cat 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="claimDescription">Description</label>
                        <textarea class="form-control" id="claimDescription" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="claimAmmount">Description</label>
                        <input type="text" class="form-control" id="claimAmmount" placeholder="Enter ammount">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="modalFormButton btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                <button type="button" class="modalFormButton btn btn-primary btn-block" id="addClaimButton">Add claim</button>
            </div>
        </div>
    </div>
</div>