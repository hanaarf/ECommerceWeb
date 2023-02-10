@extends('layout.lp')

@section('content')
<div class="kontak">
    <div class="kanan">
     <iframe  class="position-relative rounded w-100 h-100"
     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
     frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
     tabindex="0"></iframe>
    </div>
    <div class="kiri">
        <form method="POST" action="/dashboard/form-contact">
            @csrf
         <div>
             <div class="name-email">
                 <div>
                     <div>
                         <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                     </div>
                 </div>
                 <div>
                     <div>
                         <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                     </div>
                 </div>
             </div><br>
             <div class="y">
                 <div>
                     <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                 </div>
             </div><br>
             <div class="g">
                 <div>
                     <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                 </div>
             </div><br>

             <div class="btn">
                <button type="submit">Send</button>
             </div>
         </div>
     </form>
    </div>
 </div>


  
@endsection