@extends('masteradmin')
@section('content')

<div class="container">
          
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Add Cost</h3>
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
                  <a href="#">Add </a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Total-Cost</div>
                  </div>
                  <div class="card-body">
             <form action="{{url('create')}}" method="post" class="form-control">
              @csrf
                  <div class="row">
                      <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                          <label for="cname">Cost Name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="cname"
                            placeholder="Enter Name of Cost"
                          />
                          <small id="emailHelp2" class="form-text text-muted"
                            >Great </small
                          >
                        </div>

                        <div class="form-group">
                          <label for="email2">Quantity</label>
                          <input
                            type="number"
                            class="form-control"
                            id="email2"
                            placeholder="Quantity of cost"
                          />
                          <small id="emailHelp2" class="form-text text-muted"
                            ></small
                          >
                        </div>
                        <div class="form-group">
                          <label for="password">Total Cost</label>
                          <input
                            type="number"
                            class="form-control"
                            id="password"
                            placeholder="Tk"
                          />
                        </div>

                        
                        <label for="message">Aditional-Note</label>
                        <div class="form-floating">
                          <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            
                         </div>
                      
                      
                      </div>
                    </div>
                  </div>
                  <div class="card-action">
                  <input type="submit" name="submit" value="submit" class="btn btn-success">
                    <!-- <button class="btn btn-danger">Cancel</button> -->
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>

       

    
      

@endsection