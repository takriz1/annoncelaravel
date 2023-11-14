   <!--- Modal Ajout -->
   <div class="modal fade categoryAddModal" id="btnAddCategory" tabindex="-1" data-bs-backdrop="static" aria-labelledby="staticBackdropLabel"
       aria-hidden="true" style="display: none;">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header bg-primary">
                   <h5 class="modal-title text-white" id="staticBackdropLabel">New Category</h5><button class="btn p-1"
                       type="button" data-bs-dismiss="modal" aria-label="Close"><svg
                           class="svg-inline--fa fa-times fa-w-11 fs--1 text-white" aria-hidden="true" focusable="false"
                           data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg"
                           viewBox="0 0 352 512" data-fa-i2svg="">
                           <path fill="currentColor"
                               d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                           </path>
                       </svg><!-- <span class="fas fa-times fs--1 text-white"></span> Font Awesome fontawesome.com --></button>
               </div>

               <form action="<?= route('admin.add.category') ?>" method="POST" id='addCategoryForm'
                   enctype="multipart/form-data">
                   @csrf
                   <div class="modal-body">
                       <div class="mb-3">
                           <div class="mb-3">
                               <label class="form-label" for="exampleFormControlInput1">Category
                                   Name</label>
                               <input class="form-control form-control" id="sizingInput" type="text"
                                   placeholder="Category name" name="categoryName">
                               <span class="text-danger error-text categoryName_error"></span>
                           </div>
                           <div class="mb-3">
                               <label class="form-label" for="exampleTextarea">Category Description
                               </label>
                               <textarea class="form-control" id="exampleTextarea" rows="3" name="categoryDescription"></textarea>
                               <span class="text-danger error-text categoryDescription_error"></span>
                           </div>
                           <div class="mb-3">
                               <label class="form-label" for="customFile">Choose Image</label>
                               <input class="form-control" id="customFile" type="file" name="categoryImage">
                               <span class="text-danger error-text categoryImage_error"></span>
                           </div>

                       </div>


                       <div class="modal-footer">
                           <button class="btn btn-primary" type="submit" id="btnAdd">Save</button>
                           <button class="btn btn-outline-primary" type="button"
                               data-bs-dismiss="modal">Cancel</button>
                       </div>
               </form>
           </div>
       </div>
   </div>
