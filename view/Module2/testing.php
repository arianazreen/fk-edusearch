<div class="col-12 col-lg-8">
						<div class="card">
							<div class="card-header"></div>
							<div class="card flex-fill w-100">
                <div class="card-header">

                  <div class="post-box">
                    <img class="profile-img" src="../../dist/img/avatars/nurul_najwa.jpg" alt="Profile Image">
                    <div class="post-info">
                      <div class="name"> Nurul Najwa</div>
                      <div class="date"> Article | 14 May 2023 </div>
                      <div class="container-box">
                        <h3>How are computer systems evolving to handle the increasing complexity
                          of virtual reality (VR) and augmented reality (AR) applications?</h3>
                        <div class="line"></div>

                        <p>Is the Augmented Reality and Virtual Reality closely related to 3D printing?</p>
                      </div>

                      <div class="actions" style="color:#888">
                        <div class="icon-container">
                          <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>0</a>
                          <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>0</a>
                          <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>0</a>
                          <div class="icon-container right">
                              <!--  UPDATE modal-->
                                 <a href="#updateModal" data-bs-toggle="modal"><i class="align-middle fas fa-fw fa-edit" class="trigger-btn" data-bs-target="#centeredModalDanger" style="color: grey;"></i></a>

                                    <div class="modal fade" id="updateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="staticBackdropLabel">Update Post</h5>
                                    </div>
                                    <div class="modal-body">
                                      <div class="card-body">
                                        <form method="POST" action="process_post.php">
                                          <input type="hidden" name="postID" value="">

                                          <div class="row">
                                            <div class="mb-3 col-md-6">
                                              <label for="PostTilte">Post Tilte: </label>
                                              <input type="text" class="form-control" name="postTitle" id="postTitle" value="">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                              <label for="PostCategory">Post Category : </label>
                                              <select class="form-select" id="postCategory" name="postCategory">
                                                <option selected>Choose major...</option>
                                                <option value="BCN">BCN</option>
                                                <option value="BCS">BCS</option>
                                                <option value="BCG">BCG</option>
                                              </select>
                                            </div>
                                            <div class="mb-3 col-md-12">
                                              <label for="PostKeyword">Post Keyword :</label>
                                              <div class="checkbox">
                                                <label><input type="checkbox" id="php" name="postKeyword[]" value="PHP"> PHP</label>
                                                <label><input type="checkbox" id="html" name="postKeyword[]" value="HTML"> HTML</label>
                                                <label><input type="checkbox" id="js" name="postKeyword[]" value="JavaScript"> JavaScript</label>
                                                <label><input type="checkbox" id="ai" name="postKeyword[]" value="Artificial Intelligence"> Artificial Intelligence</label>
                                              </div>
                                                      
                                            </div>
                                            <div class="mb-3">
                                              <label>Post Content</label>
                                              <textarea class="form-control" rows="5" name="postContent"></textarea>
                                            </div>
                                          </div>
                                          <br>

                                          <input type="hidden" name="update" value="true">
                                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                          <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </form>
                                      </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                              <!-- Closing  UPDATE-->
                          <!--Delete Modal-->

                            <a href="#deleteModal" data-bs-toggle="modal"><i class="align-middle fas fa-fw fa-trash" class="trigger-btn" data-bs-target="#centeredModalDanger" style="color: #DA3131;"></i></a>

                            <!-- Modal HTML -->
                            <div id="deleteModal" class="modal fade" tabindex="-1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                  </div>
                                  <div class="modal-body m-3">

                                    <div class="drop" style="width:150px; height:150px; right: 50px; background-color:#fff2f2; display:flex; justify-content:center; align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
                                      <i class="align-middle fas fa-fw fa-trash-alt" style="font-size: 65px; color: #D90000;"></i>
                                      </div>						    
                                    <p class="mb-0" style="font-weight: 450; font-size: 18px;"> Are you sure wish to delete this data. <br> Are you sure?</p>
                                    </div>
                                  <div class="modal-footer">
                                    <form method="POST" action="process_post.php">
                                    <button type="button" class="btn btn-primary" name="delete">DELETE</button>
                                  </form>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!--Closing Delete Modal-->

                          </div>
                        </div>
                        <div class="status">Revised</div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>

							<div class="card-body">
								<table id="datatables-basic" class="table table-striped" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Date</th>
											<th>Time</th>
											<th>Complain Type</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

								<?php
										$sql = "SELECT * FROM post";
										$result = mysqli_query($conn, $sql);
										if (mysqli_num_rows($result) > 0) {
											$count = 1;
											while ($row = mysqli_fetch_assoc($result)) {
												$postID = $row['postID'];
												$postTitle = $row["postTitle"];
												$postCategory = $row["postCategory"];
												$postKeyword = $row["postKeyword"];
												$postContent = $_row["postKeyword"];
											?>
												<tr>
													<td>
														<?php echo "$postID"; ?>
													</td>
													<td>
														<?php echo "$postTitle"; ?>
													</td>
													<td>
														<?php echo "$postCategory"; ?>
													</td>
													<td>
														<?php echo "$postKeyword"; ?>
													</td>
													<td>
														<?php echo "postContent"; ?>
													</td>
													
												</tr>
												<!-- Modal View -->
												<div class="modal fade" id="view-<?php echo $postID; ?>" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title">Post MY Question</h5>
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<div class="modal-body m-3">
																<div class="row mt-3">
																	<div class="col-3">
																		<h5 class="text-muted">Complaint Status: </h5>
																	</div>
																	<div class="col-3">
																		<h5><?php echo "$complaintStatus"; ?> </h5>
																	</div>
																	<div class="col-3">
																		<h5 class="text-muted">postTitle: </h5>
																	</div>
																	<div class="col-3">
																		<h5><?php echo "$postTitle"; ?> </h5>
																	</div>
																</div>
																<div class="row mt-3">
																	<div class="col-3">
																		<h5 class="text-muted">Post Category: </h5>
																	</div>
																	<div class="col-3">
																		<h5><?php echo "$postCategory"; ?> </h5>
																	</div>
																	<div class="col-3">
																		<h5 class="text-muted">Post Keyword: </h5>
																	</div>
																	<div class="col-3">
																		<h5><?php echo "$postKeyword"; ?> </h5>
																	</div>
																</div>
																<div class="row mt-3">
																	<div class="col-4">
																		<h5 class="text-muted">Post Content: </h5>
																	</div>
																	<div class="col-5">
																		<h5><?php echo "$postContent"; ?> </h5>
																	</div>
																</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
															</div>
														</div>
													</div>

												</div>
												<!-- end Modal View -->
												<!--Modal Kemaskini-->
												<div class="modal fade" id="update-<?php echo $postID; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
													<div class="modal-dialog modal-dialog-scrollable">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="staticBackdropLabel">Update Post Content</h5>
															</div>
															<div class="modal-body">
																<div class="card-body">
																	<form method="POST" action="testing.php">
																		<input type="hidden" name="complaintID" value="<?php echo $postID; ?>">

																		<div class="row">
																			<div class="mb-3 col-md-6">
																				<label for="postID">Post ID</label>
																				<input type="text" class="form-control" name="postID" id="postID" value="<?php echo $postID; ?>" disabled>
																			</div>
																			<div class="mb-3 col-md-6">
																				<label for="postTitle">Post Title</label>
																				<input type="text" class="form-control" name="postTitle" id="postTitle" value="<?php echo $postTitle; ?>" disabled>
																			</div>
																			<div class="mb-3 col-md-12">
																				<label for="complain">Post Category</label>
																				<select class="form-select" name="complaintType" aria-label="Default select example" disabled>
																					<option disabled selected><?php echo $postCategory; ?></option>
																				</select>
																			</div>
																			<div class="mb-3 col-md-12">
																				<label for="complain">Post Keyword</label>
																				<select class="form-select" name="postID" aria-label="Default select example" disabled>
																					<option disabled selected><?php echo $postKeyword; ?></option>
																				</select>
																			</div>


																			<div class="mb-3">
																				<label>Post Content</label>
																				<textarea class="form-control" rows="5" name="postContent"><?php echo $postContent; ?></textarea>
																			</div>
																		</div>
																		<br>

																		<input type="hidden" name="update" value="true">
																		<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
																		<button type="submit" class="btn btn-primary">Save</button>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
<<<<<<< Updated upstream
                                               

												<?php
            // $sql = "SELECT * FROM post WHERE userID = '$id' ORDER BY postDate DESC, postTime DESC";
            $sql = "SELECT userprofile.id, generaluser.userID, generaluser.userRole, userprofile.userProfileID , generaluser.userName, generaluser.userEmail, generaluser.userPhoneNo,
                        generaluser.userPass, generaluser.userCourse, generaluser.assignedExpert,  userprofile.userResearchArea, userprofile.userAcademicStatus, userprofile.userSocMedia
                       FROM userprofile INNER JOIN generaluser ON userprofile.id = generaluser.id";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $userID = $row['userID'];
                $userRole = $row['userRole'];
                $userProfileID = $row['userProfileID'];
                $userName = $row['userName'];
                $userEmail = $row['userEmail'];
                $userPhoneNo = $row['userPhoneNo'];
                $userPass = $row['userPass'];
                $userCourse = $row['userCourse'];
                $assignedExpert = $row['assignedExpert'];
                $userResearchArea = $row['userResearchArea'];
                $userAcademicStatus = $row['userAcademicStatus'];
                $userSocMedia = $row['userSocMedia'];
            ?>
=======
												<!-- end Modal Kemaskini -->

												<!-- Start Modal Delete -->
												<div class="modal fade" id="delete-<?php echo $postID; ?>" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<div class="modal-body m-3">
																<form method="POST" action="process_post.php">
																	<input type="hidden" name="postID" value="<?php echo $postID; ?>">
																	<div class="drop" style="width:150px; height:150px; background-color:#fff2f2; display:flex; justify-content:center; align-items:center; border-radius: 50%; margin: -25px 0 20px 200px; position:relative; box-shadow: inset 2px 7px 6px rgba(0,0,0,0.1);">
																		<i class="align-middle fas fa-fw fa-trash-alt" style="font-size: 65px; color: #D90000;"></i>
																	</div>

																	<p class="mb-0" style="font-weight: 450; font-size: 18px; text-align:center;"> Are you sure wish to delete this data. <br> Are you sure?</p>
															</div>
															<div class="modal-footer">
																<input type="hidden" name="delete" value="true">
																<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
																<button type="submit" class="btn btn-primary">Delete</button>
															</div>
															</form>
														</div>
													</div>
												</div>
												<!-- end Delete modal -->
										<?php
												$count++; // Increment the count by 1
											}
										} else {
											echo "<tr><td colspan='6'>No recorded data found.</td></tr>";
										}
										?>
										</tbody>

									</table>
									</div>
									</div>
		</div>
>>>>>>> Stashed changes
