@extends('base')
@section('Public.helpCenter')


<div class="container-fluid">
    <div class="header">
        <h1 class="header-title">
            Help Center
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item text-light"> Estate Property Help Center</li>
                <li class="breadcrumb-item active" aria-current="page">Create a Ticket</li>
            </ol>
        </nav>
    </div>
    <div class="col-md-10" >
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Need Help?</h5>
                <h6 class="card-subtitle text-muted">
                    Fill up the form below and we'll get back to you as soon as possible.</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="/HelpCenter" onsubmit="alert('The Form has been Submitted.')" >
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" name="name" id="inputEmail4" >
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input type="email" class="form-control" name="email" id="inputPassword4">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputContact">Contact Number</label>
                        <input type="text" class="form-control" name="contactNo" id="inputContact" >
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="inputState">Tell us about yourself</label>
                                <select id="form-select" class="form-control" name="info">
                                    <option hidden="">Please Select</option>
                                    <option value="Property Agent/Agency">Property Agent/Agency</option>
                                    <option value="Property Developer">Property Developer</option>
                                    <option value="Private Property Owner">Private Property Owner</option>
                                    <option value="Media Agency or Direct Advertiser">Media Agency or Direct Advertiser</option>
                                    <option value="Property Buyer">Property Buyer</option>
                                    <option value="Member of the Press/Media">Member of the Press/Media</option>
                                    <option value="Others">Others</option>
                                </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputAddress2">What do you need help with</label>
                            <select id="form-select" class="form-control" name="help">
                                <option hidden="">Please Select</option>
                                <option value="My Acount">My Acount</option>
                                <option value="My Advertisement">My Advertisement</option>
                                <option value="Credits & Billings">Credits & Billings</option>
                                <option value="Premium Service">Premium Service</option>
                                <option value="Technical Issue">Technical Issue</option>
                                <option value="Feedback & Suggestion">Feedback & Suggestion</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" ></textarea> 
                        </div>
                    </div>
                    <button type="submit"  class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    






</div>

@stop