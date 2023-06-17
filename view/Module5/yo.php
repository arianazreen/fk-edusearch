<!-- Modal View -->
												<div class="modal fade" id="view-<?php echo $complaintID; ?>" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title">Complaint Application</h5>
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
																		<h5 class="text-muted">Complaint Type: </h5>
																	</div>
																	<div class="col-3">
																		<h5><?php echo "$complaintType"; ?> </h5>
																	</div>
																</div>
																<div class="row mt-3">
																	<div class="col-3">
																		<h5 class="text-muted">Complaint Date: </h5>
																	</div>
																	<div class="col-3">
																		<h5><?php echo "$complaintDate"; ?> </h5>
																	</div>
																	<div class="col-3">
																		<h5 class="text-muted">Complaint Time: </h5>
																	</div>
																	<div class="col-3">
																		<h5><?php echo "$complaintTime"; ?> </h5>
																	</div>
																</div>
																<div class="row mt-3">
																	<div class="col-4">
																		<h5 class="text-muted">Complaint Description: </h5>
																	</div>
																	<div class="col-5">
																		<h5><?php echo "$complaintDesc"; ?> </h5>
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