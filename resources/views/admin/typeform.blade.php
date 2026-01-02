@include('admin.includes.sider')

     
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-6">
                <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Add Type</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <div class="container">
                    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                  <form action="{{ route('type.store') }}" method="POST">
                  @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                     

                      
                       

                     
                  <label class="form-label" >name</label>

                        <input type="text"  name="name" class="form-control"  />
                      </div>
                    <div class="mb-3">


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