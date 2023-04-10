<div class="container-fluid">
     <!-- <div class="block-header">
            <h2>
                FORM VALIDATION
                <small>Taken from <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small>
            </h2>
        </div> -->
     <!-- Basic Validation -->
     <div class="row clearfix">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="card">
                 <div class="header">
                     <h2>Add Category</h2>
                 </div>
                 <div class="body">
                     <form id="category-form" enctype="multipart/form-data">
                         <div class="form-group ">
                             <div class="form-line">
                                 <input type="text" class="form-control" name="category-name" placeholder='Name' required>
                                 <!-- <label class="form-label">Name</label> -->
                             </div>
                         </div>
                         <div class="form-group ">
                             <div>
                                 <!-- <textarea name="details" cols="30" rows="5" class="form-control no-resize" required></textarea> -->
                                 <label class="form-label">Contest Image</label>
                                 <div>
                                    <img width = '100' id = 'image_tag' src="" alt="">
                                 </div>
                                 <input id = 'category_input'  name='category-image' type="file" class="form-control " accept="image/*" required>
                             </div>
                         </div>
                         <div id="alert-message"></div>
                         <button class="btn btn-primary waves-effect" type="submit" id='contactSubmitBtn'>Add</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <script src="scripts/submitForms.js"></script>
 <script>

$('#category_input').change(e=>{
        // console.log('input  file change');
        
        $('#image_tag')[0].src=URL.createObjectURL(e.target.files[0]); 
    })
 </script>