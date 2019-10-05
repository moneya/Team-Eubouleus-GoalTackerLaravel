@extends('layouts.app')
@section('content')
<style>
//write your css here
.contact-body {
    margin:0 auto;
    font-family: Nunito,sans-serif;
    font-size: .9rem;
    font-weight: 400;
    line-height: 1.6;
    color: #fff;
    text-align: left;
    background-color: rgb(244, 247, 236);
    font-family: 'Poppins', sans-serif;
}

.contact-form {
    width: 1000px;
    margin: 0 auto;
    margin-top: 2em;
    background-color: rgb(2, 2, 31);
    border-radius: 10px;
}

.contact-form .col-md-4 {
    margin: 12em 0;
    padding-left: 50px;
    position: relative;
}

.contact-form .col-md-8 {
    margin: 2em 0;
    padding-left: 100px;
    position: relative;
}

.contact-form h1 {
    color: #3490dc;
}

.contact-form .right {
    max-width: 600px;
}

.contact-form .right .btn{
    background: #3490dc;
    color: #fff;
    border:0;
}
</style>

//write you codes here
<div class="contact-body">

    <div class="contact-form col-md-8">

        <div class="container">

            <form>

                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-12">

                        <h1>Contact Us</h1>

                        <p class="lead">We would love to hear from you!</p>

                    <div class="messages"></div>

                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 right">
                    
                    <div class="controls">
                        
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="form_name">Name *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your name *" required="required" data-error="Name is required.">
                                        
                                    <div class="help-block with-errors"></div>
                                    
                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                    
                                    <div class="help-block with-errors"></div>
                                
                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="form_need">Nature of email *</label>
                                    <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                        <option value=""></option>
                                        <option value="Request quotation">Complaint</option>
                                        <option value="Request order status">Feedback</option>
                                        <option value="Request copy of an invoice">Suggestion</option>
                                        <option value="Other">Other</option>
                                    </select>

                                    <div class="help-block with-errors"></div>
                                
                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-group">

                                    <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Your message *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                
                                </div>

                            </div>

                            <div class="col-md-12">

                                <input type="submit" class="btn btn-success btn-send" value="Send message">
                            
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12">

                                <p class="text-muted">
                                    <strong>*</strong> These fields are required.</p>
                            
                                </div>

                        </div>

                    </div>

                </div>
                    
            </form>

        </div>

    </div>

</div>
@endsection

@section('script')
// write your js code here
@endsection
