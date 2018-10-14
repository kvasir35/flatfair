<div class="modal fade" id="popUpLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Log in</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <span id="alertModalLogin"></span>
            <form id="formLogin">
                <div class="modal-body">     
                        <div class="form-group">
                            <label for="loginEmail">E-mail</label>
                            <input type="text" id="emailLogin" class="form-control" id="loginEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="loginPassword">Password</label>
                            <input type="password" class="form-control" id="passwordLogin" placeholder="Password">
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="modalFormButton btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                    <button type="submit" id="logInValidate" class="modalFormButton btn btn-primary btn-block">Log In</button>
                </div>
            </form>
            <a href="#" data-toggle="modal" data-target="#popUpforgetPassword" data-dismiss="modal">Forget your password?</a>
        </div>
    </div>
</div>

<div class="modal fade" id="popUpforgetPassword" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Forget password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <span id="alertModalForgetPassword"></span>
            <form id="formForgetPassword">
                <div class="modal-body">     
                    <div class="form-group">
                        <label for="emailForgetPassword">E-mail</label>
                        <input type="text" id="emailForgetPassword" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modalFormButton btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                    <button type="submit" id="forgetPasswordValidate" class="modalFormButton btn btn-primary btn-block">Send new password</button>
                </div>
            </form>
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
            <span id="alertModalSignin"></span>
            <form id="formSignUp">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="signUpType" id="signUpTypeLabel">Are you :</label>
                        <select type="menu_destination" id="signUpType" class="form-control">
                            <option value="agent">Agent</option>
                            <option value="tenant">Tenant</option>
                            <option value="landlord">Landlord</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="signUpEmail" id="signUpEmailLabel">E-mail</label>
                        <input type="email" class="form-control" id="signUpEmail" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <label for="signUpPassword" id="signUpPasswordLabel">Password</label>
                        <input type="password" class="form-control" id="signUpPassword" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label for="signUpConfirmPassword" id="signUpConfirmPasswordLabel">Confirm password</label>
                        <input type="password" class="form-control" id="signUpConfirmPassword" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label for="signUpFirstName" id="signUpFirstNameLabel">First Name</label>
                        <input type="text" class="form-control" id="signUpFirstName" placeholder="First Name" />
                    </div>
                    <div class="form-group">
                        <label for="signUpLastName" id="signUpLastNameLabel">Last Name</label>
                        <input type="text" class="form-control" id="signUpLastName" placeholder="Last Name" />
                    </div>                       
                </div>
                <div class="modal-footer">
                    <button type="button" class="modalFormButton btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                    <button type="submit" id="signInValidate" class="modalFormButton btn btn-primary btn-block">Sign In</button>
                </div>
            </form>
        </div>
    </div>
</div>