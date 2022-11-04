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
                    <th>Title</th>
                    <th>Status</th>
                    <th>Position</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
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
                          <p class="fw-bold mb-1">John Doe</p>
                          <p class="text-muted mb-0">john.doe@gmail.com</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="fw-normal mb-1">Software engineer</p>
                      <p class="text-muted mb-0">IT department</p>
                    </td>
                    <td>
                      <span class="badge badge-success rounded-pill d-inline">Active</span>
                    </td>
                    <td>Senior</td>
                    <td>
                      <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Edit
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img
                            src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                            class="rounded-circle"
                            alt=""
                            style="width: 45px; height: 45px"
                            />
                        <div class="ms-3">
                          <p class="fw-bold mb-1">Alex Ray</p>
                          <p class="text-muted mb-0">alex.ray@gmail.com</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="fw-normal mb-1">Consultant</p>
                      <p class="text-muted mb-0">Finance</p>
                    </td>
                    <td>
                      <span class="badge badge-primary rounded-pill d-inline"
                            >Onboarding</span
                        >
                    </td>
                    <td>Junior</td>
                    <td>
                      <button
                              type="button"
                              class="btn btn-link btn-rounded btn-sm fw-bold"
                              data-mdb-ripple-color="dark"
                              >
                        Edit
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img
                            src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                            class="rounded-circle"
                            alt=""
                            style="width: 45px; height: 45px"
                            />
                        <div class="ms-3">
                          <p class="fw-bold mb-1">Kate Hunington</p>
                          <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="fw-normal mb-1">Designer</p>
                      <p class="text-muted mb-0">UI/UX</p>
                    </td>
                    <td>
                      <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                    </td>
                    <td>Senior</td>
                    <td>
                      <button
                              type="button"
                              class="btn btn-link btn-rounded btn-sm fw-bold"
                              data-mdb-ripple-color="dark"
                              >
                        Edit
                      </button>
                    </td>
                  </tr>
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
<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script><script>
$(document).ready(function(){

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
                    $('#exampleModal').modal('hide');
                    alert('student Add success !');
                }else{
                    alert('Student add Fail');
                }
            },
            error:function (response){
              console.log(response);

            }
        });
    })


});
</script>
</body>
</html>
