
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('firstname');
            echo $this->Form->control('lastname');
            echo $this->Form->control('sex');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('address');
            echo $this->Form->control('phone');
            echo $this->Form->control('avatar');
            echo $this->Form->control('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->control('department_id', ['options' => $departments, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">General</h3>
                        <p class="panel-subtitle"></p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtFirstName" class="control-label">First Name</label>
                                    <input name="ctl00$cphBody$txtFirstName" type="text" id="cphBody_txtFirstName" tabindex="1" class="form-control" data-bv-notempty="true" data-bv-notempty-message="First name is required." data-bv-stringLength="true" data-bv-stringLength-min="3" data-bv-stringLength-max="40" data-bv-stringLength-message="The first name must be more than 3 and less than 40 characters long." />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtMiddleName" class="control-label">Middle Name</label>
                                    <input name="ctl00$cphBody$txtMiddleName" type="text" id="cphBody_txtMiddleName" tabindex="2" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtLastName" class="control-label">Last Name</label>
                                    <input name="ctl00$cphBody$txtLastName" type="text" id="cphBody_txtLastName" tabindex="3" class="form-control" data-bv-notempty="true" data-bv-notempty-message="Last name is required." data-bv-stringLength="true" data-bv-stringLength-min="3" data-bv-stringLength-max="40" data-bv-stringLength-message="The last name must be more than 3 and less than 40 characters long." />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtDob" class="control-label">Date of Birth</label>
                                    <div class="input-group date" id="dtpDob">
                                        <input name="ctl00$cphBody$txtDob" type="text" id="cphBody_txtDob" tabindex="4" class="form-control" data-bv-date="true" data-bv-date-format="MM/DD/YYYY" data-bv-date-message="Invalid Date of Birth" />
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="ddlGender" class="control-label">Gender</label>
                                    <select name="ctl00$cphBody$ddlGender" id="cphBody_ddlGender" tabindex="5" class="form-control select-basic" data-bv-notempty="true" data-bv-notempty-message="Choose any gender.">
                                        <option value="">--- Select ---</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="ddlCountry" class="control-label">Country</label>
                                    <select name="ctl00$cphBody$ddlCountry" id="cphBody_ddlCountry" tabindex="6" class="select-basic" data-bv-notempty="true" data-bv-notempty-message="Choose any country." style="width:100%;">
                                        <option value="">--- Select ---</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">American Samoa</option>
                                        <option value="5">Andorra</option>
                                        <option value="6">Angola</option>
                                        <option value="7">Anguilla</option>
                                        <option value="8">Antarctica</option>
                                        <option value="9">Antigua and Barbuda</option>
                                        <option value="10">Argentina</option>
                                        <option value="11">Armenia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtPhone" class="control-label">Phone</label>
                                    <input name="ctl00$cphBody$txtPhone" type="text" id="cphBody_txtPhone" tabindex="7" class="form-control" />
                                    <span class="help-block">(999) 999-9999</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtPhoneExt" class="control-label">Phone + Ext</label>
                                    <input name="ctl00$cphBody$txtPhoneExt" type="text" id="cphBody_txtPhoneExt" tabindex="8" class="form-control" />
                                    <span class="help-block">(999) 999-9999 99</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtEmail" class="control-label">Email</label>
                                    <input name="ctl00$cphBody$txtEmail" type="text" id="cphBody_txtEmail" tabindex="9" class="form-control" data-bv-emailAddress="true" data-bv-emailAddress-message="Invalid Email" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtAddress" class="control-label">Address</label>
                                    <textarea name="ctl00$cphBody$txtAddress" rows="5" cols="20" id="cphBody_txtAddress" tabindex="10" class="form-control" data-bv-stringLength="true" data-bv-stringLength-min="0" data-bv-stringLength-max="200" data-bv-stringLength-message="The address should not be more than 200 characters long.">
                                          </textarea>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtUsername" class="control-label">Username</label>
                                    <input name="ctl00$cphBody$txtUsername" type="text" id="cphBody_txtUsername" tabindex="11" class="form-control" data-bv-notempty="true" data-bv-notempty-message="Username is required." data-bv-stringLength="true" data-bv-stringLength-min="3" data-bv-stringLength-max="30" data-bv-stringLength-message="The username must be more than 6 and less than 30 characters long." />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtPassword" class="control-label">Password</label>
                                    <input name="ctl00$cphBody$txtPassword" type="password" id="cphBody_txtPassword" tabindex="12" class="form-control password" data-bv-notempty="true" data-bv-notempty-message="Password is required." data-bv-identical="true" data-bv-identical-field="txtConfirmPassword" data-bv-identical-message="The password and it&#39;s confirm are not the same" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="txtConfirmPassword" class="control-label">Confirm Password</label>
                                    <input name="ctl00$cphBody$txtConfirmPassword" type="password" id="cphBody_txtConfirmPassword" tabindex="13" class="form-control" data-bv-notempty="true" data-bv-notempty-message="Password is required." data-bv-identical="true" data-bv-identical-field="txtPassword" data-bv-identical-message="The password and it&#39;s confirm are not the same" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="ddlUserRole" class="control-label">User Role</label>
                                    <select name="ctl00$cphBody$ddlUserRole" id="cphBody_ddlUserRole" tabindex="14" class="form-control" onChange="changeUserRole(this);" data-bv-notempty="true" data-bv-notempty-message="Choose any user role.">
                                        <option value="">--- Select ---</option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Photo</h3>
                        <p class="panel-subtitle"></p>
                    </div>
                    <div class="panel-body">
                        <div id="cphBody_updatePnlPhoto">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="divPreviewPhoto" class="text-center">
                                        <center style="border: 2px solid #e6e6e6; padding: 10px 10px;">
                                            <img src="../assets/img/avatar.jpg" id="cphBody_imgPreviewPhoto" alt="" class="img-responsive" style="height:180px; width:170px" />
                                        </center>
                                        <br />
                                        <input type="button" class="btn btn-default btn-sm" value="Change Photo" onclick="UploadPhoto();" />
                                        <input type="submit" name="ctl00$cphBody$btnRemovePhoto" value="Remove Photo" id="cphBody_btnRemovePhoto" data-content="Are you sure?" data-placement="bottom" data-btn-cancel-class="btn-danger btn-sm" class="btn btn-danger btn-sm" title="Confirm" data-singleton="true" data-btn-cancel-label="No" data-btn-ok-label="Yes" data-btn-ok-class="btn-success btn-sm" data-toggle="confirmation" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="divUploadPhoto">
                                        <label class="control-label">Acceptable image formats are jpg, jpeg, png & gif.</label><br />
                                        <label class="control-label">Maximum image size allowed is 2MB.</label>
                                        <input type="file" name="ctl00$cphBody$fileUploadUserPhoto" id="cphBody_fileUploadUserPhoto" class="dropify-fr" data-allowed-file-extensions="png jpeg jpg gif" data-max-file-size="2M" data-show-loader="true" data-show-remove="true" data-errors-position="inside" />
                                        <div id="divUploadPhotoButtons" class="text-center">
                                            <br />
                                            <input type="submit" name="ctl00$cphBody$btnChangePhoto" value="Change Photo" id="cphBody_btnChangePhoto" class="btn btn-default btn-sm" />
                                            <input id="btnPreviewPhoto" type="button" class="btn btn-default btn-sm" value="Preview Photo" onclick="PreviewPhoto();" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <input type="submit" name="ctl00$cphBody$btnSubmit" value="Submit" id="cphBody_btnSubmit" tabindex="17" class="btn btn-primary" />
                <input id="btnReset" type="button" class="btn btn-default" value="Reset" onclick="ResetFields();" />
            </div>
        </div>

