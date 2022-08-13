    

$(document).ready(function(){

  //Customers
$('#addCustomer').on('click', function () {
  $('#saveBtn').val("add-Customer");
  $('#customerform').trigger("reset");
  $('#customerModalLabel').html("Add Customer");
  $('#customerModal').modal('show');
});
$('#customerform').on('submit', function (e) {
    e.preventDefault();
    processing: true;
    serverSide: true;
    ajax: "";
    
    let email = $('#email').val();
    let name = $('#name').val();
    let phone = $('#phone').val();
    let _token = $('#_token').val(); 

    var fd ={
      email:email, name:name, phone:phone, _token:'{{ csrf_token() }}'
    };
    console.log(fd);
    var form_data = document.getElementById("customerform");

    $.ajax({
      processData: false,
      contentType: false,
      cache: false,
      url: "/addcustomer",
      type:"POST",  
      data:new FormData(form_data),
      beforeSend: function () {
        Swal.fire({
            icon: 'info',
            title: 'Submit!',
            text: 'Submitting...'
        });
      },
      success: function (data) {
        if (data === "200") {
            Swal.fire({
                icon: 'success',
                title: 'SAVED!',
                showConfirmButton: false,
                timer: 1000
            }).then(function () {
              window.location.reload();
        });
      }
         else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Error processing request! Please try again.'
            });
        }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status);
      alert(thrownError);
    }
      })
  })
})


//expenses
$(document).ready(function(){
$('#addExpense').on('click', function () {
  $('#saveBtn').val("add-Expense");
  $('#expenses').trigger("reset");
  $('#expenseModalLabel').html("Add Expense");
  $('#expenseModal').modal('show');
});

$('#expenses').on('submit', function (e) {
    e.preventDefault();
    processing: true;
    serverSide: true;
    ajax: "";

  
  let expense = $('#expense').val();
  let amount = $('#amount').val();
  let _token = $('#_token').val();

  var fd ={
    expense:expense, amount:amount, _token:'{{ csrf_token() }}'
  };
  console.log(fd);
  var expform = document.getElementById("expenses");

  $.ajax({
    processData: false,
    contentType: false,
    cache: false,
    url: "/addexpenses",
    type:"POST",  
    data:new FormData(expform),
    beforeSend: function () {
      Swal.fire({
          icon: 'info',
          title: 'Submit!',
          text: 'Submitting...'
      });
    },
    success: function (data) {
      if (data === "200") {
          Swal.fire({
              icon: 'success',
              title: 'SAVED!',
              showConfirmButton: false,
              timer: 1000
          }).then(function () {
            window.location.reload();
      });
    }
       else {
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Error processing request! Please try again.'
          });
      }
  },
  error: function (xhr, ajaxOptions, thrownError) {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: thrownError
    }); }
  })
})



//invoices
$('#addInvoice').on('click', function () {
  $('#saveBtn').val("add-Invoice");
  $('#invoice').trigger("reset");
  $('#invoiceModalLabel').html("Add Invoice");
  $('#invoiceModal').modal('show');
});
$('#invoice').on('submit', function (e) {
    e.preventDefault();
    processing: true;
    serverSide: true;
    ajax: "";

  
  let order_id = $('#order_id').val();
  let order_receiver_name = $('#order_receiver_name').val();
  let order_total_amount_due = $('#order_total_amount_due').val();
  let _token = $('#_token').val(); 

  var invoiceform = document.getElementById("invoice");

  $.ajax({
     processData: false,
  contentType: false,
  cache: false,
    url: "/addinvoice",
    type:"POST",  
    data:new FormData(invoiceform),
    beforeSend: function () {
      Swal.fire({
          icon: 'info',
          title: 'Submit!',
          text: 'Submitting...'
      });
    },
    success: function (data) {
      if (data === "200") {
          Swal.fire({
              icon: 'success',
              title: 'SAVED!',
              showConfirmButton: false,
              timer: 1000
          }).then(function () {
            window.location.reload();
      });
    }
       else {
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Error processing request! Please try again.'
          });
      }
  },
  error: function (xhr, ajaxOptions, thrownError) {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: thrownError
    }); }
  })
})
})


//orders
$(document).ready(function(){
$('#addOrder').on('click', function () {
  $('#saveBtn').val("add-Order");
  $('#orders').trigger("reset");
  $('#orderModalLabel').html("Add Order");
  $('#orderModal').modal('show');
});
$('#orders').on('submit', function (e) {
    e.preventDefault();
    processing: true;
    serverSide: true;
    ajax: "";

  let order_name = $('#order_name').val();
  let product_size = $('#product_size').val();
  let product_name = $('#product_name').val();
  let product_price = $('#product_price').val();
  let _token = $('#_token').val(); 

  var fd ={
    order_name:order_name, product_size:product_size, product_name:product_name, product_price:product_price, _token:'{{ csrf_token() }}'
  };
  console.log(fd);
  var orderform = document.getElementById("orders");

  $.ajax({
     processData: false,
  contentType: false,
  cache: false,
    url: "/addorder",
    type:"POST",  
    data:new FormData(orderform),
    beforeSend: function () {
      Swal.fire({
          icon: 'info',
          title: 'Submit!',
          text: 'Submitting...'
      });
    },
    success: function (data) {
      if (data === "200") {
          Swal.fire({
              icon: 'success',
              title: 'SAVED!',
              showConfirmButton: false,
              timer: 1000
          }).then(function () {
            window.location.reload();
      });
    }
       else {
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Error processing request! Please try again.'
          });
      }
  },
  error: function (xhr, ajaxOptions, thrownError) {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: thrownError
    }); }
    })
})
})

//payments
$(document).ready(function(){
$('#addPayment').on('click', function () {
  $('#saveBtn').val("add-Payment");
  $('#payment').trigger("reset");
  $('#paymentModalLabel').html("Add Payment");
  $('#paymentModal').modal('show');
});
$('#payment').on('submit', function (e) {
    e.preventDefault();
    processing: true;
    serverSide: true;
    ajax: "";

  
  let customer = $('#paycustomer').val();
  let invoice_no = $('#invoices_id').val();
  let method = $('#method').val();
  let transaction_id = $('#transaction_id').val();
  let amount = $('#payamount').val();
  let _token = $('#_token').val(); 

 
  var payform = document.getElementById("payment");

  $.ajax({
     processData: false,
  contentType: false,
  cache: false,
    url: "/addpayment",
    type:"POST",  
    data:new FormData(payform),
    beforeSend: function () {
      Swal.fire({
          icon: 'info',
          title: 'Submit!',
          text: 'Submitting...'
      });
    },
    success: function (data) {
      if (data === "200") {
          Swal.fire({
              icon: 'success',
              title: 'SAVED!',
              showConfirmButton: false,
              timer: 1000
          }).then(function () {
            window.location.reload();
      });
    }
       else {
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Error processing request! Please try again.'
          });
      }
  },
  error: function (xhr, ajaxOptions, thrownError) {
    alert(xhr.status);
    alert(thrownError);
  }
    })
  })
})


//products
$(document).ready(function(){
  $('#addProduct').on('click', function () {
    $('#saveBtn').val("add-Product");
    $('#product').trigger("reset");
    $('#exampleModalLabel').html("Add Product");
    $('#productModal').modal('show');
  });

$('#product').on('submit', function (e) {
  e.preventDefault();

  processing: true;
  serverSide: true;
  ajax: "";

  let name = $('#name').val();
  let _token = $('#_token').val();

  var fd ={
    name:name, _token:'{{ csrf_token() }}'
  };
  console.log(fd);
  var prodform = document.getElementById("product");

  $.ajax({
    processData: false,
    contentType: false,
    cache: false,
    url: "/addproduct",
    type:"POST",  
    data:new FormData(prodform),
    beforeSend: function () {
      Swal.fire({
          icon: 'info',
          title: 'Submit!',
          text: 'Submitting...'
      });
    },
    success: function (data) {
      if (data === "200") {
          Swal.fire({
              icon: 'success',
              title: 'SAVED!',
              showConfirmButton: false,
              timer: 1000
          }).then(function () {
            window.location.reload();
      });
    }
       else {
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Error processing request! Please try again.'
          });
      }
  },
  error: function (xhr, ajaxOptions, thrownError) {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: thrownError
    });
  }
  })
})

$('#order_receiver_name').on('change', function (e) {
  e.preventDefault(); 

  let cust_id = $('#order_receiver_name').val();


  $.ajax({
    cache: false,
    url: "/getOrders",
    type:"POST",  
    data:{'cust_id':cust_id},
    success: function (data) {
      var obj=JSON.parse(data);
      if(!Object.keys(obj).length){
        var html=`<option>NO ORDER FOUND!!</option>`;
    }else{
      var html=`<option>Select Order</option>`;
      $.each(obj, function(key,val){
        html +=`<option value="`+val.id+`">`+val.id+`</option>`;
      });
    }
    $('#order_id').html(html);
  }
  })
})
$('#order_id').on('change', function (e) {
  e.preventDefault(); 

  let order_id = $('#order_id').val();


  $.ajax({
    cache: false,
    url: "/getOrderAmount",
    type:"POST",  
    data:{'order_id':order_id},
    success: function (data) {
      var obj=JSON.parse(data);
      if(obj.amount==''){
        $('#order_total_amount_due').val(0);
    }else{
      $('#order_total_amount_due').val(obj.amount);
    }
  }
  })
})

$('#paycustomer').on('change', function (e) {
  e.preventDefault(); 

  let cust_id = $('#paycustomer').val();


  $.ajax({
    cache: false,
    url: "/getInvoices",
    type:"POST",  
    data:{'cust_id':cust_id},
    success: function (data) {
      var obj=JSON.parse(data);
      if(!Object.keys(obj).length){
        var html=`<option>NO INVOICE FOUND!!</option>`;
    }else{
      var html=`<option>Select Invoice</option>`;
      $.each(obj, function(key,val){
        html +=`<option value="`+val.id+`">`+val.id+`</option>`;
      });
    }
    $('#invoices_id').html(html);
  }
  })
})
/*
$('#invoices_id').on('change', function (e) {
  e.preventDefault(); 

  let invoices_id = $('#invoices_id').val();


  $.ajax({
    cache: false,
    url: "/getInvoicesAmount",
    type:"POST",  
    data:{'invoices_id':invoices_id},
    success: function (data) {
      var obj=JSON.parse(data);
      if(obj.amount==''){
        $('#payamount').val(0);
    }else{
      $('#payamount').val(obj.amount);
    }
  },
  contentType: false,
  processData: false,
  })

})
*/
})