				<div class="row">
					<div class="col-lg-6 py-3">
						<div class="shadow card">
							<div class="card-body">
								<fieldset class="border py-3">
									<legend class="w-auto mx-3">
										Personal details
									</legend>
									<table class="table table-striped">
										<tr>
											<th width="30%">Name</th>
											<td width="70%"><?=$userdata['name']?></td>
										</tr>
										<tr>
											<th width="30%">Mobile</th>
											<td width="70%"><?=$userdata['mobile']?></td>
										</tr>
										<tr>
											<th width="30%">Email</th>
											<td width="70%"><?=$userdata['email']?></td>
										</tr>
									</table>
									<button data-toggle="modal" data-target="#personal" class="btn btn-primary btn-sm pull-right mx-3"><i class="fa fa-edit mr-2"></i>Edit</button>
								</fieldset>	
							</div>
						</div>
					</div>
					<div class="col-lg-6 py-3">
						<div class="shadow card">
							<div class="card-body">
								<fieldset class="border py-3">
									<legend class="w-auto mx-3">
										Business details
									</legend>
									<table class="table table-striped">
										<tr>
											<th width="30%">HMF ID</th>
											<td width="70%"><?=$userdata['ownid']?></td>
										</tr>
										<tr>
											<th width="30%">Referral Id</th>
											<td width="70%"><?=$userdata['referral']?></td>
										</tr>
										<tr>
											<th width="30%">Referral Name</th>
											<td width="70%"><?=$userdata['referral_name']?></td>
										</tr>
                                        <tr>
                                            <th width="30%">Your Referral</th>
                                            <td width="70%"><?=$userdata['my_referral']?></td>
                                        </tr>
									</table>
								</fieldset>	
							</div>
						</div>
					</div>
					<div class="col-lg-6 py-3">
						<div class="shadow card">
							<div class="card-body">
								<fieldset class="border py-3">
									<legend class="w-auto mx-3">
										Account details
									</legend>
									<table class="table table-striped">
										<tr>
											<th width="30%">Account Name</th>
											<td width="70%"><?=$userdata['account_name']?></td>
										</tr>
										<tr>
											<th width="30%">Account No.</th>
											<td width="70%"><?=$userdata['account_number']?></td>
										</tr>
										<tr>
											<th width="30%">IFSC</th>
											<td width="70%"><?=$userdata['ifsc']?></td>
										</tr>
										<tr>
											<th width="30%">Bank Name</th>
											<td width="70%"><?=$userdata['bank_name']?></td>
										</tr>
									</table>
									<button data-toggle="modal" data-target="#account" class="btn btn-primary btn-sm pull-right mx-3"><i class="fa fa-edit mr-2"></i>Edit</button>
								</fieldset>	
							</div>
						</div>
					</div>
					<div class="col-lg-6 py-3">
						<div class="shadow card">
							<div class="card-body">
								<fieldset class="border py-3">
									<legend class="w-auto mx-3">
										Address details
									</legend>
									<table class="table table-striped">
										<tr>
											<th width="30%">Address</th>
											<td width="70%"><?=$userdata['address']?></td>
										</tr>
										<tr>
											<th width="30%">PIN Code</th>
											<td width="70%"><?=$userdata['pin']?></td>
										</tr>
										<tr>
											<th width="30%">District</th>
											<td width="70%"><?=$userdata['city']?></td>
										</tr>
										<tr>
											<th width="30%">State</th>
											<td width="70%"><?=$userdata['state']?></td>
										</tr>
									</table>
									<button data-toggle="modal" data-target="#address" class="btn btn-primary btn-sm pull-right mx-3"><i class="fa fa-edit mr-2"></i>Edit</button>
								</fieldset>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- The Modal -->
<div class="modal fade" id="address">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="<?=base_url('Users/update/')?>" method="POST">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Profile Update</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="">
                    <fieldset class="border p-3">
                        <legend class="w-auto h5">Address Details</legend>                
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter Your Address" value="<?=$userdata['address']?>">
                        </div>
                        <div class="form-group">
                            <label for="pin">PIN Code</label>
                            <input type="number" name="pin" class="form-control" placeholder="Enter Your PIN Number" value="<?$userdata['pin']?>">
                        </div>
                        <div class="form-group">
                            <label for="city">District</label>
                            <input type="text" name="city" class="form-control" placeholder="Enter Your City Name" value="<?=$userdata['city']?>">
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" name="state" class="form-control" placeholder="Enter Your State Name" value="<?=$userdata['state']?>">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" name="country" class="form-control" placeholder="Enter Your Country Name" value="<?=$userdata['country']?>">
                        </div>                             
                    </fieldset>
                </div>        
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button class="btn btn-success">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="personal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="<?=base_url('Users/update/')?>" method="POST">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Profile Update</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="">
                    <fieldset class="border p-3">
                        <legend class="w-auto h5">Personal Details</legend>
                        <div class="form-group">
                            <label for="name">Contact Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?=$userdata['name']?>">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="number" name="mobile" class="form-control" placeholder="Enter Your Mobile Number" value="<?=$userdata['mobile']?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="<?=$userdata['email']?>">
                        </div>                             
                    </fieldset>
                </div>            
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button class="btn btn-success">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="account">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="<?=base_url('Users/update/')?>" method="POST">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Profile Update</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="">
                    <fieldset class="border p-3">
                        <legend class="w-auto h5">Account Details</legend>
                        <div class="form-group">
                            <label for="account_number">Account Number</label>
                            <input type="text" name="account_number" placeholder="Enter Your Account Number" class="form-control" value="<?=$userdata['account_number']?>" >
                        </div>
                        <div class="form-group">
                            <label for="confirm_account">Confirm Account</label>
                            <input type="text" name="confirm_account" placeholder="Confirm Account Number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="account_name">Account Name</label>
                            <input type="text" name="account_name" placeholder="Enter Your Account Name" class="form-control" value="<?=$userdata['account_name']?>">
                        </div>
                        <div class="form-group">
                            <label for="ifsc">IFSC Code</label>
                            <input type="text" name="ifsc" class="form-control" value="<?=$userdata['ifsc']?>" placeholder="IFSC Code">
                        </div> 
                        <div class="form-group">
                            <label for="bank_name">Bank Name</label>
                            <input type="text" name="bank_name" class="form-control" value="<?=$userdata['bank_name']?>" placeholder="Bank Name">
                        </div>                            
                    </fieldset>
                </div>            
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button class="btn btn-success">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>