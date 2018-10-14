<div class="modal fade" id="popUpLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Log in</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="loginEmail">E-mail</label>
                        <input type="text" class="form-control" id="loginEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">E-mail</label>
                        <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="modalFormButton btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                <button type="button" class="modalFormButton btn btn-primary btn-block">Log In</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="popUpSignUp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sign up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="signUpEmail">E-mail</label>
                        <input type="email" class="form-control" id="signUpEmail" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <label for="signUpPassword">Password</label>
                        <input type="password" class="form-control" id="signUpPassword" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label for="signUpConfirmPassword">Confirm password</label>
                        <input type="password" class="form-control" id="signUpConfirmPassword" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label for="signUpType">Are you :</label>
                        <select type="menu_destination" id="signUpType" class="form-control">
                            <option value="agent">Agent</option>
                            <option value="tenant">Tenant</option>
                            <option value="landlord">Landlord</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="modalFormButton btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                <button type="button" class="modalFormButton btn btn-primary btn-block">Sign In</button>
            </div>
        </div>
    </div>
</div>