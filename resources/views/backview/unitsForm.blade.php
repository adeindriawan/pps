@extends('backview.master')

@section('topbar')
 <x-topbar />
@endsection

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <x-nav :role="$data['role']" />
        <div class="pcoded-content">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Basic Form Inputs</h5>
                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">

                        <!-- Page body start -->
                        <div class="page-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add Unit</h5>
                                        </div>
                                        <div class="card-block">
                                            <form class="form-material">
                                                <div class="form-group form-primary">
                                                    <input type="text" name="name" class="form-control">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Name</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Type</label>
                                                    <div class="col-sm-10">
                                                        <select name="type" class="form-control">
                                                            <option value="">Select unit type</option>
                                                            <option value="Office">Office</option>
                                                            <option value="Department">Department</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button type="submit" id="saveUnitButton" class="btn waves-effect waves-light btn-primary" style="margin-bottom: 5px;"><i class="ti-save"></i>Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page body end -->
                    </div>
                </div>
                <!-- Main-body end -->
                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>
</div>
<script>
  window.onload = function() {
    $('#saveUnitButton').click(function (e) { 
      e.preventDefault();
      const name = $('input[name="name"]').val();
      const type = $('select[name="type"]').val();
      $.ajax({
        type: "POST",
        url: "/units/store",
        data: {
          name: name,
          type: type
        },
        success: function (response) {
          Swal.fire({
            icon: 'success',
            text: response.message
          });
          console.log(response);
        }
      });
    });
  }
</script>
@endsection
