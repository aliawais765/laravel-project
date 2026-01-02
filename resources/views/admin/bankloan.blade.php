@include('admin.includes.sider')
  Bootstrap Form
     
              <!--end::Col-->
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
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
           
           
           
           
           
           
           
           
                  <form action="{{ route('bankloan.store') }}" method="POST">
                  @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                     

                      <div class="mb-3">
                            <label for="bank" class="form-label">loan type</label>
                 <select class="form-select" aria-label="Default select example" name="type">
  <option selected>select type </option>
  @foreach($types as $type)
  <option value="{{$type->id}}">{{$type->name}}</option>
 @endforeach
</select>
                      </div>
                   
                      <div class="mb-3">
                        <label for="bank" class="form-label">bank</label>
                        <input type="text" class="form-control" name="bank" >
                      </div>
                 <div class="mb-3">

                     
                  <label class="form-label" >amount</label>

                        <input type="number"  name="amount" class="form-control"  />
                      </div>
                    <div class="mb-3">

                <label clas="form-label" for="interest">Interest</label>
                <input class="form-control" type="number" name="interest" step="0.01" value="{{ old('interest', $loan->interest ?? '') }}">
                    </div>



<div class="mb-3">
<label class="form-label" >tenure_years</label>
<input class="form-control" type="number" name="tenure_years">
</div>

<div class="mb-3">
  <label class="form-label">notes</label>
  <input class="form-control" name="notes" type="text">
</div>
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
           