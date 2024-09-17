@extends('masteradmin')
@section('content')

<div class="container">
          
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Manage Cost</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Cost</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Manage </a>
                </li>
              </ul>
            </div>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                     <a href="{{url('/booking')}}"> <h4 class="card-title">Add Cost</h4></a>
                      <button
                        class="btn btn-primary btn-round ms-auto"
                        data-bs-toggle="modal"
                        data-bs-target="#addRowModal"
                      >
                        <i class="fa fa-plus"></i>
                        Add Cost
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <!-- Modal -->
  <!-- -------------popup--------- -->
  <div
                      class="modal fade"
                      id="addRowModal"
                      tabindex="-1"
                      role="dialog"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header border-0">
                            <h5 class="modal-title">
                              <span class="fw-mediumbold"> New</span>
                              <span class="fw-light">  Cost</span>
                            </h5>
                            <button
                              type="button"
                              class="close"
                              data-dismiss="modal"
                              aria-label="Close"
                            >
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p class="small">
                              Create a new Cost using this form, make sure you
                              fill them all
                            </p>
                            <form>
                              <div class="row">
                                <div class="col-sm-12">

                            
                                

                                  <div class="form-group form-group-default">
                                    <label> Name of Cost </label>
                                    <input
                                      id="addName"
                                      type="text"
                                      class="form-control"
                                      placeholder="Cost"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-6 pe-0">
                                  <div class="form-group form-group-default">
                                    <label>Quantity</label>
                                    <input
                                      id="Position"
                                      type="number"
                                      class="form-control"
                                      placeholder="Quantity"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-6 pe-0">
                                  <div class="form-group form-group-default">
                                    <label>cost tk</label>
                                    <input
                                      id="addOffice"
                                      type="Number"
                                      class="form-control"
                                      placeholder="tk"
                                    />
                                  </div>
                                  </div>

                                  
                                  <div class="col-md-6 pe-0">
                                  <div class="form-group form-group-default">
                                    <label>Aditional-Note</label>
                                    <input
                                      id="addOffice"
                                      type="textarea"
                                      class="form-control"
                                      placeholder="Aditional-Note"
                                    />
                                  </div>
                                  </div>
                    

                                 
                                </div>
                              </div>
                              <input type="submit" name="submit" value="submit" class="btn btn-success">
                            </form>
                          </div>
                         
                        </div>
                      </div>
                    </div>
<!-- -------------popup--------- -->
                    <div class="table-responsive">
                      <table
                        id="add-row"
                        class="display table table-striped table-hover"
                      >
                        <thead>
                          <tr>
                            <th>ID#</th>
                            <th>cost Name</th>
                            <th>Quantity</th>
                            <th>Cost-taka</th>
                            <th>Aditional-Note</th>
                           
                            <th style="width: 10%">Action</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          <tr>
                            <td>01</td>
                            <td>System Architect</td>
                            <td>Edinburgh@gmail.com</td>
                            <td>36054654645</td>
                            <td>good/dood</td>
                            <td>
                              <div class="form-button-action">
                                <button
                                  type="button"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-primary btn-lg"
                                  data-original-title="Edit Task"
                                >
                                  <i class="fa fa-edit"></i>
                                </button>
                                <button
                                  type="button"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-danger"
                                  data-original-title="Remove"
                                >
                                  <i class="fa fa-times"></i>
                                </button>
                              </div>
                            </td>
                          </tr>
                        
                          
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

          </div>
         
        </div>

       

    
      

@endsection