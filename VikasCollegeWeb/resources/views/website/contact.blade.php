@include('website.header')

    <div class="container">

                 <div class="row" style="margin-top: 20px;">
                 <div class="col s12 m4 l4 ">
                     <div class="card-panel">
                         <h5 class="center">CONTACT US</h5>
                        <p><b>Address :</b></p>
                         <P> Vikas High School Marg, Kannamwar Nagar – 2, Vikhroli (East), Mumbai – 400083.</P>
                         <p><b>Phone :</b></p>
                         <P>022  25783540 / 25784267</P>
                         <p><b>Fax :</b></p>
                         <P>022  25796196</P>
                         <p><b>Email :</b></p>
                         <p> vikascollegeprincipal@gmail.com</P>
                     </div>
                 </div>

                 <div class="col s12 m7 l7 offset-m1 offset-l1 ">
                     <div class="card-panel">
                         <h5 class="center">SEND US EMAIL</h5>
                         <form style="margin: 20px;">
                             <div class="input-field">
                                 <input id="name" type="text" class="validate">
                                 <label for="name">Name</label>
                             </div>
                             <div class="input-field">
                                 <input id="email" type="email" class="validate" >
                                 <label for="email">Email</label>
                             </div>
                             <div class="input-field">
                                 <input id="telephone" type="tel" class="validate">
                                 <label for="telephone">Telephone</label>
                             </div>
                             <div class="input-field">
                                 <textarea id="textarea1" class="materialize-textarea" ></textarea>
                                 <label for="textarea1">Message</label>
                             </div>
                             <div class="col s6 m4 offset-s3 offset-l4">
                                 <button class="btn waves-effect waves-light" type="submit" name="">Submit</button>
                             </div>
                         </form>
                     </div>
                 </div>
                 </div>
             </div>

<div class="container">
    <div class="row">
        <div class="col-s12">
            <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.7839314779458!2d72.93619371463998!3d19.117132537064315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c79bcfffffff%3A0x9a668ebd44f72ba!2sVikas+College+of+Arts+Science+and+Commerce!5e0!3m2!1sen!2sin!4v1503664338024" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

    @include('website.footer')