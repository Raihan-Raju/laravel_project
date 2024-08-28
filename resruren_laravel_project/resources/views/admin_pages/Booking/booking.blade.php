@extends('masteradmin')
@section('content')

<div class="container">
          
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Add booking</h3>
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
                  <a href="#">booking</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Add </a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Booking services</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                          <label for="email2">Your Name</label>
                          <input
                            type="email"
                            class="form-control"
                            id="email2"
                            placeholder="Enter Customer Name"
                          />
                          <small id="emailHelp2" class="form-text text-muted"
                            >Great </small
                          >
                        </div>

                        <div class="form-group">
                          <label for="email2">Email</label>
                          <input
                            type="email"
                            class="form-control"
                            id="email2"
                            placeholder="Customer Email"
                          />
                          <small id="emailHelp2" class="form-text text-muted"
                            ></small
                          >
                        </div>
                        <div class="form-group">
                          <label for="password">Number</label>
                          <input
                            type="number"
                            class="form-control"
                            id="password"
                            placeholder="Number"
                          />
                        </div>

                        <div class="form-group">
                          <label for="password">Subject</label>
                          <input
                            type="text"
                            class="form-control"
                            id="password"
                            placeholder="Subject"
                          />
                        </div>
                        <label for="message">Message</label>
                        <div class="form-floating">
                          <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            
                         </div>
                      
                        <!-- <div class="form-group">
                          <label for="smallSelect">Small Select</label>
                          <select
                            class="form-select form-control-sm"
                            id="smallSelect"
                          >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div> -->
                      </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <button class="btn btn-success">Submit</button>
                    <!-- <button class="btn btn-danger">Cancel</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>

       

    
      

@endsection