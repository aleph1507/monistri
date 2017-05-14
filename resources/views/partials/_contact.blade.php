<!--CONTACT START-->
    <div id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h1>Контакт</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
                    <hr class="pg-titl-bdr-btm"></hr>
                </div>
                <div id="sendmessage">Вашата порака е пратена. Благодариме!</div>
                <div id="errormessage"></div>
                
                <div class="form-sec">
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="Вашето Име" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="Вашиот е-маил" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="Наслов" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea class="form-control text-field-box" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Напишете ни порака"></textarea>
                            <div class="validation"></div>
            
                            <button class="button-medium" id="contact-submit" type="submit" name="contact">Прати</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--CONTACT END-->
