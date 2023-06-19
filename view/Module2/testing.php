 <!-- Testing UPDATE-->
                                
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
																		<input type="hidden" name="postID" value="<?php echo $postID; ?>">

																		<div class="row">
																			<div class="mb-3 col-md-6">
																				<label for="PostTilte">Post Tilte: </label>
																				<input type="text" class="form-control" name="postTitle" id="postTitle" value="<?php echo $postTitle; ?>" disabled>
																			</div>
																			<div class="mb-3 col-md-6">
																				<label for="PostCategory">Post Category : </label>
																				<input type="text" class="form-control" name="postCategory" id="postCategory" value="<?php echo $postCategory; ?>" disabled>
																			</div>
																			<div class="mb-3 col-md-12">
																				<label for="PostKeyword">Post Keyword :</label>
																				<select class="form-select" name="postKeyword" aria-label="Post Keyword" disabled>
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