 <!--  UPDATE modal-->
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
 <!-- Closing  UPDATE Modal-->


 <!--Delete Modal-->
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