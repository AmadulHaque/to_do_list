<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>





<div class="container">
    <div class="row mt-5">

        <div style="margin: auto" class="col-8">
            <table class="table align-middle mb-0 bg-white">
                <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">Add +</button>
                <thead class="bg-light">
                  <tr>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Subject</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img
                            src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                            alt=""
                            style="width: 45px; height: 45px"
                            class="rounded-circle"
                            />
                        <div class="ms-3">
                          <p class="text-muted mb-0">{{$item->name}}</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="fw-normal mb-1">{{$item->roll}}</p>
                    </td>
                    <td>
                      <p class="fw-normal mb-1">{{$item->subject}}</p>
                    </td>
                    
                    <td>
                      <button id="" id_val="{{$item->id}}" type="button" class="delete_btn btn btn-danger">Delete</button>
                      <button type="button" class="btn  btn-primary">Edit</button>
                    </td>
                  </tr>
                @endforeach 
                </tbody>
            </table>
        </div>
    </div>


</div>







  <!-- Modal -->
  <div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog  ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form id="student_post_ajax" method="POST">
                @csrf
                <div class="form-outline mb-4">
                    <input type="text" id="name" name="name" class="form-control" />
                    <label class="form-label" for="name">Name</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="Roll" name="roll" class="form-control" />
                    <label class="form-label" for="Roll">Roll</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="Subject" name="subject" class="form-control" />
                    <label class="form-label" for="Subject">Subject</label>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

    <!-- MDB -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>

$(document).ready(function(){
  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }

  $('#student_post_ajax').submit(function(e){
      e.preventDefault();
      let addForm = new FormData($('#student_post_ajax')[0]);
      $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type:'post',
          url: '/student_post',
          data:addForm,
          contentType:false,
          processData:false,
          success: function(data){ 
              console.log(data);
              if(data.status=='201'){
                  $('.table').load(location.href+' .table');
                  $('#exampleModal').modal('hide');
                  toastr.success('Student Add Success');
              }else{
                  alert('Student add Fail');
              }
          },
          error:function (response){
            console.log(response);

          }
      });
  })

  $('.delete_btn').click(function(e){
    e.preventDefault();
    $id = $(this).attr('id_val');
    $('.table').load(location.href+' .table');
    $.ajax({
      type:'get',
      url:'/student_delete/'+$id,
      success:function (response) {
        $('.table').load(location.href+' .table');
        console.log(response);
        toastr.success('Student Delete Success');
      },
      error:function (response) {
        $('.table').load(location.href+' .table');
        console.log(response);
        
      }
    })

  });


});
</script>
</body>
</html>
