@extends('layouts.app')

@section('content')
<div class="container">
    <section id="contact">
       
        <div class="sectionheader">	<h1>CONTACT</h1></div>
        <article>
            <p>
            y
            @if(count($errors)>0)
        <div class="alert alert-danger">
            <button type="button" class="close"
            data-dismiss="alert">x</button>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        </p>
        <p>Yoda soon you will call me master Governor Tarkin. A new hope Boba Fett bantha forest moon. Tusken raider Master Yoda do or do not never tell me the odds.</p>
            
                <label for="checkcontact" class="contactbutton"><div class="mail"></div></label><input id="checkcontact" type="checkbox">
                <form action="" POST="post" class="contactform" action="/sendemail/send">
                    @csrf
                    <p class="input_wrapper"><input type="text" name="contact_name" value=""  id ="contact_name"><label for="contact_nom">NAME</label></p>
                    <p class="input_wrapper"><input type="text" name="contact_email" value=""  id ="contact_email"><label for="contact_email">EMAIL</label></p>
                    <p class="input_wrapper"><input type="text" name="contact_subject" value=""  id ="contact_subject"><label for="contact_sujet">SUBJECT</label></p>
                    <p class="textarea_wrapper"><textarea name="contact_message" id="contact_message"></textarea></p>
                    <p class="submit_wrapper"><input type="submit" value="CONTACT"></p>			
                </form>
        </article>
    </section>
</div>
@endsection