@extends('masteradmin')
@section('content')

<div class="container">
          
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Add Seles</h3>
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
                  <a href="#">Seles</a>
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
                    <div class="card-title">Manu Of Seles</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 col-lg-12">
                      <div id="add_new_customer_model">
      <div class="modal-dialog">
      	<div class="modal-content">
      		<div class="modal-header" style="background-color: #ff5252; color: white">
            <div class="font-weight-bold"></div>
      			
      		</div>
      		<div class="modal-body">
            <!-- customer details content -->
<!-- customer name control -->


<!-- horizontal line -->
<div class="col col-md-12">
  <hr class="col-md-12 float-left" style="padding: 0px; width: 95%; border-top: 2px solid  #02b6ff;">
</div>

<!-- form submit button -->
<div class="row col col-md-12">
  &emsp;
 
  </div>

  <div id="customer_acknowledgement" class="col-md-12 h5 text-success font-weight-bold text-center" style="font-family: sans-serif;"></div>
      		</div>
      	</div>
      </div>
    </div>


  <!-- --------------- -->

  <div class="row">
          <!-- customer details content -->
       <form action="" method="post" class="form-control">
       

           <div class="row col col-md-12">
            <div class="col col-md-3 form-group">
              <label class="font-weight-bold" for="customers_name">Customer Name :</label>
              <input id="customers_name" type="text" class="form-control" placeholder="Customer Name" name="customers_name" onkeyup="showSuggestions(this.value, 'customer');">
              <code class="text-danger small font-weight-bold float-right" id="customer_name_error" style="display: none;"></code>
              <div id="customer_suggestions" class="list-group position-fixed" style="z-index: 1; width: 18.30%; overflow: auto; max-height: 200px;"></div>
            </div>
            <div class="col col-md-3 form-group">
              <label class="font-weight-bold" for="customers_address">Address :</label>
              <input id="customers_address" type="text" class="form-control" name="customers_address" placeholder="Address" >
            </div>
            <div class="col col-md-2 form-group">
              <label class="font-weight-bold" for="invoice_number">Invoice Number :</label>
              <input id="invoice_number" type="number" class="form-control" name="invoice_number" placeholder="Invoice Number" >
            </div>
            <div class="col col-md-2 form-group">
              <label class="font-weight-bold" for="">Payment Type :</label>
              <select id="payment_type" class="form-control">
              	<option value="1">Cash Payment</option>
              	<option value="2">Card Payment</option>
                <option value="3">Net Banking</option>
              </select>
            </div>
            <div class="col col-md-2 form-group">
               <label class="font-weight-bold" for="">Date :</label>
              <input type="date" class="datepicker form-control hasDatepicker" id="invoice_date" value='2024-08-22' onblur="checkDate(this.value, 'date_error');">
              <code class="text-danger small font-weight-bold float-right" id="date_error" style="display: none;"></code>
            </div>
          </div>
          <!-- customer details content end -->

          <!-- new user button -->
          <div class="row col col-md-12">
            
            
            <div class="col col-md-2 form-group">
              <label class="font-weight-bold" for="customers_contact_number">Contact Number :</label>
              <input id="customers_contact_number" type="number" class="form-control" name="customers_contact_number" placeholder="Contact Number">
            </div>
            <!-- <div class="col col-md-1 form-group">
               <input type="submit" value="submit" name="submit" class="btn btn-primary form-control">
            </div> -->
            <div class="col col-md-2 form-group">
              <button class="btn btn-primary form-control" onclick="document.getElementById('add_new_customer_model').style.display = 'block';" name="submit" type="submit">Add New Customer</button>

            </div>
          </div>
       </form>
          <!-- closing new user button -->

          <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 3px solid  #02b6ff;">
          </div>

             
          <!-- add Items -->
  <form action="" method="post" class="form-control">
  <div class="row col col-md-12">
            <div class="row col col-md-12 font-weight-bold">
              <div class="col col-md-3" for="items Name">Items Name:</div>
             
              <div class="col col-md-2"for="Quantity">Quantity</div>
              <div class="col col-md-2"for="MRP">MRP</div>
              <div class="col col-md-2"for="Discount">Discount(%)</div>
              <div class="col col-md-3"for="Total">Total</div>
              <!-- <div class="col col-md-2"for="Action">Action</div> -->
            </div>
          </div>
          <div class="row col col-md-12">
            <div class="row col col-md-12 font-weight-bold">
              <div class="col col-md-3"><input id="items Name" type="text" class="form-control" name="items Name" placeholder="items Name" ></div>

              <div class="col col-md-2"><input id="Quantity" type="number" class="form-control" name="Quantity" placeholder="Quantity" ></div>
              <div class="col col-md-2"><input id="MRP" type="text" class="form-control" name="MRP" placeholder="MRP" ></div>
              <div class="col col-md-2"><input id="Discount" type="text" class="form-control" name="Discount" placeholder="Discount" ></div>
              <div class="col col-md-3"><input id="Total" type="text" class="form-control" name="Total" placeholder="Total" ></div>
              <!-- <div class="col col-md-2"><input id="Action" type="text" class="form-control" name="Action" placeholder="Action" ></div>
            </div> -->
          </div>
          <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #02b6ff;">
          </div>

          <div class="row col col-md-12 " id="invoice_medicine_list_div">
            
            <!--jodi jhamala hoi ai funtion ta script er vatore bosbe... getInvoiceNumber(); -->
          </div>
          <!-- end medicines -->

          <div class="row col col-md-12">
            <div class="col col-md-6 form-group"></div>
            <div class="col col-md-2 form-group float-right">
              <label class="font-weight-bold" for="">Total Amount:</label>
              <input type="text" class="form-control" value="0" id="total_amount" >
            </div>
            <div class="col col-md-2 form-group float-right">
              <label class="font-weight-bold" for="">Total Discount :</label>
              <input type="text" class="form-control" value="0" id="total_discount" >
            </div>
            <div class="col col-md-2 form-group float-right">
              <label class="font-weight-bold" for="">Net Total :</label>
              <input type="text" class="form-control" value="0" id="net_total" >
            </div>
          </div>
          
                <div>
                   <hr style="border-top: 2px solid #ff5252;">
                </div>
        
                        </div>
     <input type="submit" name="submit" value="submit" class="form-control btn btn-success">
        <!-- <button class="btn btn-success  text-right">Submit</button> -->
         <!-- <button class="btn btn-danger">Cancel</button> -->
  </form>
           <!-- form content end -->
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        </div>
    
      

@endsection