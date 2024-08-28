@extends('masteradmin')
@section('content')

<div class="container">
          
          
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Add Item's</h3>
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
                  <a href="#">Item's</a>
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
                    <div class="card-title">Manu Of items</div>
                  </div>
                 <form action="" method="post" class="form-control">
                  @csrf
                 <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                          <label for="email2">Items Name</label>
                          <input
                            type="email"
                            class="form-control"
                            id="email2"
                            placeholder="Enter Items Name"
                          />
                          <small id="emailHelp2" class="form-text text-muted"
                            >Great foods</small
                          >
                        </div>
                        <div class="form-group">
                          <label for="password">Quantity</label>
                          <input
                            type="number"
                            class="form-control"
                            id="password"
                            placeholder="Quantity...1.2.3.."
                          />
                        </div>

                        <div class="form-group">
                          <label for="password">Taka</label>
                          <input
                            type="number"
                            class="form-control"
                            id="password"
                            placeholder="Amount of items tk" name="number"
                          />
                        </div>
                        <div class="form-group form-inline">
                          <label
                            for="inlineinput"
                            class="col-md-3 col-form-label"
                            >images</label
                          >
                          <div class="col-md-9 p-0">
                            <input
                              type="file"
                              class="form-control input-full"
                              id="inlineinput"
                              placeholder="Enter Input"
                            />
                          </div>
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
                 </form>
                </div>
              </div>
            </div>
          </div>
         
        
        </div>

       

    
      

@endsection