@extends('admin.admin_layouts')



@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Blog Section</span>
      </nav>

      <div class="sl-pagebody">


        <div class="card pd-20 pd-sm-40">
         <h6 class="card-body-title">New Post ADD</h6>
         <a href="{{ route('all.blogpost') }}" class="btn btn-success btn-sm pull-right">All Post</a>
         <p class="mg-b-20 mg-sm-b-30">New Post Add Form</p>

      <form method="post" action="{{ route('store.post') }}" enctype="multipart/form-data">
        @csrf

         <div class="form-layout">
           <div class="row mg-b-25">
             <div class="col-lg-6">
               <div class="form-group">
                 <label class="form-control-label">Product Title (English): <span class="tx-danger">*</span></label>
                 <input class="form-control" type="text" name="post_title_en"  placeholder="Enter Post title in english">
               </div>
             </div><!-- col-4 -->
             <div class="col-lg-6">
               <div class="form-group">
                 <label class="form-control-label">Product Title (Latvian): <span class="tx-danger">*</span></label>
                 <input class="form-control" type="text" name="post_title_lv" placeholder="Enter Post title in Latvian">
               </div>
             </div><!-- col-4 -->


             <div class="col-lg-4">
               <div class="form-group mg-b-10-force">
                 <label class="form-control-label">Blog Category: <span class="tx-danger">*</span></label>
                 <select class="form-control select2" data-placeholder="Choose country" name="category_id">
                   <option label="Choose category"></option>
                   @foreach($blogcategory as $row)
                   <option value="{{ $row->id }}">{{ $row->category_name_en}}</option>
                   @endforeach
                 </select>
               </div>
             </div><!-- col-4 -->


             <div class="col-lg-12">
               <div class="form-group">
                 <label class="form-control-label">Post Details (English): <span class="tx-danger">*</span></label>
                 <textarea class="form-control" id="summernote" name="details_en"> </textarea>
               </div>
             </div><!-- col-4 -->


             <div class="col-lg-12">
               <div class="form-group">
                 <label class="form-control-label">Post Details (Latvian): <span class="tx-danger">*</span></label>
                 <textarea class="form-control" id="summernote1" name="details_lv"> </textarea>
               </div>
             </div><!-- col-4 -->


             <div class="col-lg-4">
               <div class="form-group">
                 <label class="form-control-label">Post Image: <span class="tx-danger">*</span></label>
                 <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input" name="post_image" onchange="readURL1(this);" required="">
                    <span class="custom-file-control"></span>
                  </label>
                <img src="#" id="one">
                </div>
             </div><!-- col-4 -->



           </div><!-- row -->
          </div> <!-- End row -->
          <br><br>

           <div class="form-layout-footer">
             <button class="btn btn-info mg-r-5" type="submit">Submit Form</button>
           </div><!-- form-layout-footer -->
         </div><!-- form-layout -->
       </div><!-- card -->
            </form>

      </div>

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->



<script type="text/javascript">
 function readURL1(input){
   if (input.files && input.files[0]) {
     var reader = new FileReader();
     reader.onload = function(e) {
       $('#one')
       .attr('src', e.target.result)
       .width(80)
       .height(80);
     };
     reader.readAsDataURL(input.files[0]);
   }
 }
</script>


@endsection
