				<div class="row">
					<div class="col-12 table-responsive">
                        <table class="table table-bordered thead-dark table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="25%">Name</th>
                                    <th width="25%">HMF ID</th>
                                    <th width="25%">Mobile</th>
                                    <th width="25%">Members</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($members as $member) { ?>
                                <tr>
                                    <td><?=$member->name?></td>
                                    <td><?=$member->ownid?></td>
                                    <td><?=$member->mobile?></td>
                                    <td><?=$member->name?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>   
                    </div>
				</div>
			</div>
		</div>
	</section>
</main>