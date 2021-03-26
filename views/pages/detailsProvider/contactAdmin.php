
<div class="dashboard">
<?php include_once '../views/layouts/detailsProviderSideNav.php';?>
    <div class="dash-content__container">
        <div class="dash-content">
            <div class="heading-secondary margin-b-m margin-t-m">
               <p class="center-text"> Contact Admin</p>
            </div>
    
            <form action="/utrance-railway/contact-admin" method="POST" >
            <div class="content__fields">

               <?php
                  if (isset($_SESSION['user'])) 
                  {
                  $html = "";
                  $html .= "<div class='firstname-box content__fields-item'>";
                  $html .= "<label for='firstname' class='form__label'>From</label>";
                  $html .= "<input type='text' name='first_name' class='form__input' value=" . App::$APP->activeUser()['first_name'] . "></div>";
                
                  $dom = new DOMDocument();
                  $dom->loadHTML($html);
                  print_r($dom->saveHTML());
                  }
              ?>

                          <div class="emai-box content__fields-item">
                          <label for="email" class="form__label">To</label>
                          <input type="email" name="email_id" class="form__input">
                          </div>
            
                          <fieldset class="classess-box content__fields-item">
                          <legend class="form__label">Detail Type</legend>
                              <div class="reservation-categorybox__container checkbox__horizontal">
                                  <div class="seatbox-sleepingberths reservation__category-item">
                                      <label for="train_schedule">Train Schedule</label>
                                      <input type="radio" value="train_schedule" name="details_type" id="train_schedule" >
                                  </div>
                                  <div class="seatbox-sleepingberths reservation__category-item">
                                      <label for="ticket_price">Ticket Price</label>
                                      <input type="radio" value="ticket_price" name="details_type" id="ticket_price" >
                                  </div>
                                  <div class="seatbox-sleepingberths reservation__category-item">
                                      <label for="other">Other</label>
                                      <input type="radio" value="other" name="details_type" id="other" >
                                  </div>
                              </div> 
                              <br>     
                          </fieldset>
              
                          <fieldset class="classess-box content__fields-item">
                          <legend class="form__label">Message</legend>    
                                <div class="containerTextArea">
                                <textarea class="textinput" rows="10" cols="60" name="detail" placeholder=" Enter the message here..."></textarea>
                                </div>
                          </fieldset>
                
                          <div class="btn__save-box">
                          <input type="submit" class="btn__save btn-settings"  name="submit" value="Send">
                          </div>
          </div>
          </div>
          </div>
          </form>
            
       
          </div>
        </div>
      </div>