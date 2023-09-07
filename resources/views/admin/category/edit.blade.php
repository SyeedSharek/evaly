@extends('admin.admin_master')



@section('admin_contain')


<style>
    body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
    background: #053f6e;
    margin-top: 3%;
    margin-bottom: 10%;
    width: 60%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 10%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 10%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #f7f1f1;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>





<div class="container contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
    </div>

    <form action="{{ url('/categories/'.$category->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <p class="alert-success">
            <?php
            $message = Session::get('message');
            if ($message) {
                echo $message;
                Session::put('message',null);
            }
                         
            
            ?>

        </p>

        <h3 style="color: white">Edit Product Category</h3>
       <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder=" Category Name" value="{{ $category->name }}" required />
                </div>
                
                <div class="control-group">
                    <label class="control-label">Upload Image</label>
                    <div class="controls">
                        <input type="file" name="image" value="" >
                    </div>
                </div> 

               
                 <br>
                
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Add Category" />
                </div>
            </div>
            
        </div>
    </form>
</div>


@endsection