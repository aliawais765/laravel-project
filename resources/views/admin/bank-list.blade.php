@include('admin.includes.sider')            <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-6">
                <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Quick Example</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <div class="container">
                     @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
  @endif
                  <form  method="POST" action="{{route('banklist.store')}}" enctype="multipart/form-data">
                  @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                     

                      
                       
                      <div class="mb-3">
                        <label for="title" class="form-label">bank</label>
                        <input type="text" class="form-control" name="title" />
                      </div>
                 <div class="mb-3">

                     
                  <label class="form-label" >image</label>

                        <input type="file"  name="image" class="form-control"  />
                      </div>
                    <div class="mb-3">

                <label clas="form-label" for="description">decription</label>
                <input class="form-control" type="text" name="description" >
                    </div>

                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
</div>
                  <!--end::Form-->
                </div>